<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_disclaimer extends CI_Model
{
    private $table = "tb_disclaimer";
 
    public function getAll() {
        $results = array();
        $this->db->select('');
        $this->db->from('tb_disclaimer');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
        // return $this->db->get($this->table)->result();
    }
    
    public function save($data) {
        return $this->db->insert($this->table, $data);
    }

    public function getById($table,$where_id,$id) {
        return $this->db->get_where($table, ["id_".$where_id => $id])->row();
    }

    public function update($table,$where_id,$data,$id) {
        return $this->db->update($table, $data, array("id_".$where_id => $id));
    }

    public function delete($table,$where_id,$id) {
        return $this->db->delete($table, array("id_".$where_id => $id));
    }
    
}