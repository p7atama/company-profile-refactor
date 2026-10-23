<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class m_admin extends CI_Model
{
    
    public function getAll($table) {
        return $this->db->get($table)->result();
    }

    public function getDisclaimer(){
        $query = "SELECT * FROM tb_disclaimer AS q";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }

    public function save($table,$data) {
        return $this->db->insert($table, $data);
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