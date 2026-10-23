<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_contact extends CI_Model
{
    private $table = "tb_contact";
 
    public function getAll() {
        return $this->db->get($this->table)->result();
    }

    public function index(){
        $results = array();
        $this->db->select('');
        $this->db->from('tb_contact');
        $this->db->order_by('id','DESC');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }
    
    public function save($data) {
        return $this->db->insert($this->table, $data);
    }

    public function getById($id) {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function update($data,$id) {
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id) {
        return $this->db->delete($this->table, array("id" => $id));
    }

    function tambah($table){
        foreach ($_POST['user'] as $user) {
            $this->db->insert($table, $user);
        }
    }
}