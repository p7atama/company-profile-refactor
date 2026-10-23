<?php
 
class List_of_applicants extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array("m_recruitment_none_approve","m_user"));
        $this->load->library(array('form_validation', 'applicant_filter'));
        $this->m_user->cek_login();
    }

	public function index()
	{
        // Shared filter: saved on "Show", restored on every other hit (e.g.
        // after a delete, or when switching between the three applicant tabs).
        $f = $this->applicant_filter->resolve();
        $tanggal_dari   = $f['tanggal_dari'];
        $tanggal_sampai = $f['tanggal_sampai'];
        $posisi         = $f['posisi'];

        $data['recruitment']   = $this->m_recruitment_none_approve->getNoneApprove($tanggal_dari, $tanggal_sampai, $posisi);
        $data['posisi']        = $this->m_recruitment_none_approve->tampilposisi();
        $data['tanggal_dari']  = $tanggal_dari;
        $data['tanggal_sampai'] = $tanggal_sampai;
        $data['posisiT']       = $posisi;
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/list_applicants',$data);
        $this->load->view('_layouts_admin/footer');
	}

    public function view($id)
    {
        $data['recruitment'] = $this->m_recruitment_none_approve->getById($id);
        $data['id'] = $id;
        $this->load->view('_layouts_admin/head');
        $this->load->view('_layouts_admin/navbar');
        $this->load->view('_layouts_admin/sidebar');
        $this->load->view('admin/view_apply',$data);
        $this->load->view('_layouts_admin/footer');
    }

    public function save($id){
        //$id = $this->input->post('id');
        $data = array(
            'status' => $this->input->post('status'),
            'confirm_by' => $this->input->post('confirm_by'),
            'confirm_date' => $this->input->post('confirm_date'),
            'note' => $this->input->post('note'),
            'status_print' => $this->input->post('status_print'),
        );
        $before = (array) $this->m_recruitment_none_approve->getById($id);
        $this->m_recruitment_none_approve->update($data,$id);
        $this->load->library('audit_log');
        $this->audit_log->log('update', 'tb_pelamar', $id, $before, $data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan!');
        redirect('pintumasuk/list_of_applicants');
    }

	function delete($id) {
        $before = (array) $this->m_recruitment_none_approve->getById($id);
        $this->m_recruitment_none_approve->delete($id);
        $this->load->library('audit_log');
        $this->audit_log->log('delete', 'tb_pelamar', $id, $before, null);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pintumasuk/list_of_applicants');
    }

    public function export_excel(){
        $tanggal = date('M-Y');
        $data = array( 'title' => 'Data Pelamar PT Padma Soode Indonesia' . '['.$tanggal.']',
            'recruitment' => $this->m_recruitment_none_approve->index());

        $this->load->view('admin/applicants_excel_report',$data);
    }

    /**
     * Export applicants to a .xls (same HTML-as-Excel engine + columns as
     * export_excel()), PLUS one extra trailing "Image" column showing each
     * applicant's formal photo.
     *
     * Row scope (mirrors what the user sees / selects on the list page):
     *   - If specific rows are checked, export ONLY those (ids POSTed via
     *     id[] by the button, taken from the client-side selectedIds Set).
     *   - Otherwise, export ALL rows shown on the page (the active
     *     date-range + position filter), via getNoneApprove().
     */
    public function export_excel_with_image(){
        $tanggal = date('M-Y');
        $data = array( 'title' => 'Data Pelamar PT Padma Soode Indonesia' . '['.$tanggal.']');

        // Did the user check specific rows? (POST id[], injected by the
        // Export button from the client-side selectedIds Set — same pattern
        // the Delete button uses.)
        $posted = $this->input->post('id');
        $selected_ids = array();
        if (is_array($posted)) {
            // keep only valid integer ids
            foreach ($posted as $pid) {
                $pid = trim((string) $pid);
                if ($pid !== '' && ctype_digit($pid)) {
                    $selected_ids[$pid] = TRUE;
                }
            }
        }

        // Start from the SAME rows the list page shows (status = 'None' +
        // the active date-range + position filter), so "all" really means
        // everything visible on screen.
        $f = $this->applicant_filter->resolve();
        $result = $this->m_recruitment_none_approve->getNoneApprove(
            $f['tanggal_dari'], $f['tanggal_sampai'], $f['posisi']
        );
        $all_rows = $result->result();

        if (!empty($selected_ids)) {
            // Export only the checked rows, keeping the page's current order.
            $rows = array();
            foreach ($all_rows as $rec) {
                if (isset($selected_ids[$rec->id])) {
                    $rows[] = $rec;
                }
            }
        } else {
            // Nothing checked -> export everything shown on the page.
            $rows = $all_rows;
        }

        $data['recruitment'] = $rows;

        $this->load->view('admin/applicants_excel_report_with_image', $data);
    }

    public function delete_all_checkbox()
    {
        $id = $this->input->post('id');
        if (empty($id)) {
            $this->session->set_flashdata('error', 'Tidak ada data yang dipilih.');
            redirect('pintumasuk/list_of_applicants');
        }
        $this->m_recruitment_none_approve->deleteCheckBox($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('pintumasuk/list_of_applicants');
    }

    public function deleteCoba(){
        // Read the array of checked IDs (name="id[]" in the view).
        $id = $this->input->post('id');
        if (empty($id)) {
            $this->session->set_flashdata('error', 'Tidak ada data yang dipilih.');
            redirect('pintumasuk/list_of_applicants');
        }
        $deleted = $this->m_recruitment_none_approve->deleteMultiple($id);
        if ($deleted === FALSE) {
            $this->session->set_flashdata('error', 'Gagal menghapus data.');
        } else {
            $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        }
        redirect('pintumasuk/list_of_applicants');
    }
}