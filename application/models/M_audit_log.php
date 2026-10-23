<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_audit_log extends CI_Model
{
    private $table = "tb_audit_log";

    /**
     * Insert an audit log entry
     *
     * @param array $data Keys: action, table_name, record_id, data_before, data_after, user_identifier, ip_address, computer_name, user_agent
     * @return bool
     */
    public function insert_log($data)
    {
        return $this->db->insert($this->table, $data);
    }
}
