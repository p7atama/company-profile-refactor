<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_home extends CI_Model
{
    private $table = "tb_home";
 
    public function getAll() {
        return $this->db->get($this->table)->result();
    }
    
    public function index(){
        $query = "SELECT * from tb_home";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }

    public function save($data) {
        return $this->db->insert($this->table, $data);
    }

    public function getById($id) {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function update($data,$id) {
        // $this->db->set($data);
        // $this->db->update('tb_home');
        // $this->db->WHERE('id',$id);

        return $this->db->update('tb_home', $data, array('id' => $id));
    }

    public function delete($id) {
        $this->db->delete($this->table, array("id" => $id));
        unlink("uploads/home".$data);
    }
}