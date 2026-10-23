<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Applicant_filter
 *
 * Shared date-range + position filter for the three applicant-list pages
 * (None Approve / Approve / Not Approve). Keeping the filter in one session
 * key means switching tabs preserves the same Tanggal / Sampai Dengan /
 * Pilih Code selection, and delete/save redirects return to the same filter
 * instead of resetting to today's default.
 *
 * Usage in a controller's index():
 *
 *   $this->load->library('applicant_filter');
 *   $f = $this->applicant_filter->resolve();
 *   // $f['tanggal_dari'], $f['tanggal_sampai'], $f['posisi']
 */
class Applicant_filter
{
    /** Session key shared across all three applicant-list controllers. */
    const KEY = 'loa_filter';

    /** @var CI_Controller */
    private $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->library('session');
    }

    /**
     * Resolve the active filter.
     *
     * If the current request submitted the filter form (POST tampil=Show),
     * the submitted values are saved to the session and returned. Otherwise
     * the last-saved filter is returned, falling back to today's date and
     * an empty position when nothing has been saved yet.
     *
     * @return array {tanggal_dari, tanggal_sampai, posisi}
     */
    public function resolve()
    {
        if ($this->ci->input->post('tampil') === 'Show')
        {
            $filter = array(
                'tanggal_dari'   => $this->ci->input->post('tanggal_dari'),
                'tanggal_sampai' => $this->ci->input->post('tanggal_sampai'),
                'posisi'         => $this->ci->input->post('posisi'),
            );
            $this->ci->session->set_userdata(array(self::KEY => $filter));
            return $filter;
        }

        $saved = $this->ci->session->userdata(self::KEY);
        if (is_array($saved) && ! empty($saved))
        {
            return array(
                'tanggal_dari'   => isset($saved['tanggal_dari'])   ? $saved['tanggal_dari']   : date('Y-m-d'),
                'tanggal_sampai' => isset($saved['tanggal_sampai']) ? $saved['tanggal_sampai'] : date('Y-m-d'),
                'posisi'         => isset($saved['posisi'])         ? $saved['posisi']         : '',
            );
        }

        return array(
            'tanggal_dari'   => date('Y-m-d'),
            'tanggal_sampai' => date('Y-m-d'),
            'posisi'         => '',
        );
    }

    /**
     * Clear the saved filter (return to the default view).
     */
    public function clear()
    {
        $this->ci->session->unset_userdata(self::KEY);
    }
}