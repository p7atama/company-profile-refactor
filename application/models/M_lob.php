<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_lob extends CI_Model
{
    private $table = "tb_lob";
 
    public function getAll() {
        return $this->db->get($this->table)->result();
    }

    public function index(){
        $results = array();
        $this->db->select('');
        $this->db->from('tb_lob');
        $this->db->WHERE('judul','STAMPING DIVISION');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function getInjection(){
        $results = array();
        $this->db->select('');
        $this->db->from('tb_lob');
        $this->db->WHERE('judul','INJECTION DIVISION');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function getMachining(){
        $results = array();
        $this->db->select('');
        $this->db->from('tb_lob');
        $this->db->WHERE('judul','MACHINING DIVISION');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function getAssembly(){
        $results = array();
        $this->db->select('');
        $this->db->from('tb_lob');
        $this->db->WHERE('judul','ASSEMBLY DIVISION');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function getTooling(){
        $results = array();
        $this->db->select('');
        $this->db->from('tb_lob');
        $this->db->WHERE('judul','TOOLING DIVISION');
        $query = $this->db->get();

        if($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
    }

    public function getCovac(){
        $results = array();
        $this->db->select('');
        $this->db->from('tb_lob');
        $this->db->WHERE('judul','SILICON RUBBER DIVISION');
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
        return $this->db->update('tb_lob', $data, array('id' => $id));
    }

    public function delete($id) {
        return $this->db->delete($this->table, array("id" => $id));
    }
}