<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_check_applicants extends CI_Model
{
    private $table = "tb_pelamar";
    
    public function getAll() {
        $results = array();
        $this->db->select('');
        $this->db->from('tb_pelamar');
        $this->db->where('name','tester data');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
        // return $this->db->get($this->table)->result();
    }

    public function getAll_byfilter($keyword) {
        $results = array();
        $this->db->select('');
        $this->db->from('v_pelamar');
        $this->db->like('name',$keyword);
        $this->db->or_like('no_ktp',$keyword);
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
        // return $this->db->get($this->table)->result();
    }

    function getDataDefault()
        {
            $query = $this->db->query("SELECT * FROM tb_pelamar AS q WHERE q.`name` = 'Setio Eka Fajrii'");
            return $query;
        }
    
    public function tampil_pelamar_bykeyword($keyword){
        $query = "SELECT * FROM tb_pelamar AS q
                        WHERE q.`name` LIKE '%$keyword%' OR q.`no_ktp` LIKE '%$keyword%'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }


    public function update($table,$where_id,$data,$id) {
        return $this->db->update($table, $data, array("id_".$where_id => $id));
    }

    public function delete($table,$where_id,$id) {
        return $this->db->delete($table, array("id_".$where_id => $id));
    }
    
}