<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_recruitment_none_approve extends CI_Model
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
        $this->db->WHERE('status','');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }


    public function getNoneApprove($tanggal_dari, $tanggal_sampai, $posisi = false){
        // Build the query with bindings (safe against SQL injection) and only
        // apply the posisi filter when a non-empty position was chosen. This
        // keeps the default view (no position selected) equivalent to the old
        // getNoneApproveDefault() which ignored posisi entirely.
        if (!empty($posisi))
        {
            $sql = "SELECT * FROM tb_pelamar AS k
                        WHERE k.`status` = 'None'
                          AND CAST(k.date AS DATE) BETWEEN ? AND ?
                          AND k.`posisi` = ?
                        ORDER BY k.`date` DESC";
            $result = $this->db->query($sql, array($tanggal_dari, $tanggal_sampai, $posisi));
        }
        else
        {
            $sql = "SELECT * FROM tb_pelamar AS k
                        WHERE k.`status` = 'None'
                          AND CAST(k.date AS DATE) BETWEEN ? AND ?
                        ORDER BY k.`date` DESC";
            $result = $this->db->query($sql, array($tanggal_dari, $tanggal_sampai));
        }
        return $result;
    }

    public function getNoneApproveDefault(){
        $query = "SELECT * FROM tb_pelamar AS q
                    WHERE CAST(q.date AS DATE) = CURDATE() AND q.`status` = 'None'
                    ORDER BY q.`date` DESC";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }

    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function update($data,$id) {
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function getById($id) {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    function tampilposisi()
    {
        $q = "SELECT * FROM tb_recruitment AS p ORDER BY p.id desc ";
        $query = $result = $this->db->query($q);
        if ($result->num_rows() > 0){
            return $result->result_array();
        }
        else {
            return array();
        }
    }

    public function deleteCheckBox($id)
    {
        // Guard: never call delete() without a WHERE clause.
        // CodeIgniter blocks clause-less deletes, which is what happened
        // when $id arrived empty (no checkboxes selected).
        if (empty($id)) {
            return false;
        }
        if (!is_array($id)) {
            $id = array($id);
        }
        $this->db->where_in('id', $id);
        return $this->db->delete('tb_pelamar');
    }

    public function deleteMultiple($id){
        // Guard: never call delete() without a WHERE clause.
        if (empty($id)) {
            return false;
        }
        if (!is_array($id)) {
            $id = array($id);
        }
        $this->db->where_in('id', $id);
        return $this->db->delete('tb_pelamar');
    }
}