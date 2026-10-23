<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_recruitment_not_approved extends CI_Model
{
    private $table = "tb_pelamar";
 
    public function getAll() 
    {
        return $this->db->get($this->table)->result();
    }

    public function index(){
        $results = array();
        $this->db->select('');
        $this->db->from('tb_pelamar');
        $this->db->WHERE('status','Not Approve');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

     public function getNotApprove($tanggal_dari, $tanggal_sampai, $posisi = false){
        // Bindings (safe against SQL injection). Only apply the posisi filter
        // when a non-empty position was chosen, so the default view (no
        // position selected) is equivalent to the old getNotApproveDefault().
        if (!empty($posisi))
        {
            $sql = "SELECT * FROM tb_pelamar AS k
                        WHERE k.`status` = 'Not Approve'
                          AND CAST(k.date AS DATE) BETWEEN ? AND ?
                          AND k.`posisi` = ?
                        ORDER BY k.`id` DESC";
            $result = $this->db->query($sql, array($tanggal_dari, $tanggal_sampai, $posisi));
        }
        else
        {
            $sql = "SELECT * FROM tb_pelamar AS k
                        WHERE k.`status` = 'Not Approve'
                          AND CAST(k.date AS DATE) BETWEEN ? AND ?
                        ORDER BY k.`id` DESC";
            $result = $this->db->query($sql, array($tanggal_dari, $tanggal_sampai));
        }
        return $result;
    }

    public function getNotApproveDefault(){
        $query = "SELECT * FROM tb_pelamar AS q
                    WHERE CAST(q.date AS DATE) = CURDATE() AND q.`status` = 'Not Approve'
                    ORDER BY q.`id` DESC";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }

    function tampilposisi()
    {
        $q = "SELECT * FROM tb_recruitment AS p ORDER BY p.id DESC ";
        $query = $result = $this->db->query($q);
        if ($result->num_rows() > 0){ 
            return $result->result_array();
        }
        else {
            return array();
        }
    }
    
    // public function save($data) 
    // {
    //     return $this->db->insert($this->table, $data);
    // }
    
    public function getById($id) {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }
}