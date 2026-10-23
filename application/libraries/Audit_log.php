<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Audit Log Library
 * Records CRUD actions with user, timestamp, before/after data, IP, and computer name.
 */
class Audit_log
{
    /** @var array Keys to exclude from logged data (e.g. passwords) */
    private $excluded_keys = array('password', 'password_hash');

    /**
     * Get CodeIgniter instance
     */
    protected function ci()
    {
        return get_instance();
    }

    /**
     * Log a CRUD action
     *
     * @param string $action 'create', 'update', or 'delete'
     * @param string $table_name Table affected (e.g. tb_lob, tb_contact)
     * @param string|int|null $record_id Primary key value of affected row
     * @param array|object|null $data_before Row data before change (null for create)
     * @param array|object|null $data_after Row data after change (null for delete)
     */
    public function log($action, $table_name, $record_id, $data_before = null, $data_after = null)
    {
        $ci = $this->ci();
        $ci->load->model('m_audit_log');

        $user_identifier = $ci->session->userdata('username');
        if (empty($user_identifier)) {
            $user_identifier = 'guest';
        }

        $ip_address = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;

        $computer_name = null;
        if ($ip_address) {
            $hostname = @gethostbyaddr($ip_address);
            if ($hostname && $hostname !== $ip_address) {
                $computer_name = $hostname;
            }
        }

        $user_agent = isset($_SERVER['HTTP_USER_AGENT']) ? substr($_SERVER['HTTP_USER_AGENT'], 0, 512) : null;

        $data_before_json = $this->sanitize_and_encode($data_before);
        $data_after_json = $this->sanitize_and_encode($data_after);

        $record_id_str = ($record_id !== null && $record_id !== '') ? (string) $record_id : null;

        $log_data = array(
            'action' => $action,
            'table_name' => $table_name,
            'record_id' => $record_id_str,
            'data_before' => $data_before_json,
            'data_after' => $data_after_json,
            'user_identifier' => $user_identifier,
            'ip_address' => $ip_address,
            'computer_name' => $computer_name,
            'user_agent' => $user_agent
        );

        $ci->m_audit_log->insert_log($log_data);
    }

    /**
     * Sanitize data (remove sensitive keys) and encode to JSON
     *
     * @param array|object|null $data
     * @return string|null JSON string or null
     */
    private function sanitize_and_encode($data)
    {
        if ($data === null) {
            return null;
        }

        if (is_object($data)) {
            $data = (array) $data;
        }

        if (!is_array($data)) {
            return null;
        }

        foreach ($this->excluded_keys as $key) {
            if (isset($data[$key])) {
                $data[$key] = '[REDACTED]';
            }
        }

        return json_encode($data, JSON_UNESCAPED_UNICODE);
    }
}
