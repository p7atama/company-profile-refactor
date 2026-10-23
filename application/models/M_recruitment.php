<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_recruitment extends CI_Model
{
    private $table = "tb_pelamar";
 
    public function getAll() 
    {
        return $this->db->get($this->table)->result();
    }

    public function index(){
        $query = "SELECT * from tb_pelamar";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }
 
    // public function index(){
    //     // $results = array();
    //     $this->db->select('');
    //     $this->db->from('tb_pelamar');
    //     $this->db->WHERE('status','');
    //     $query = $this->db->get();

    //     if($query->num_rows() > 0) {
    //         $results = $query->result();
    //     }
    //     return $results;
    // }
    
    public function save($data) 
    {
        return $this->db->insert($this->table, $data);
    }
    
    public function getById($id) {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function delete($id) 
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    function validid_new($ktp)
     {
        //  $q = "SELECT t.no_ktp, CAST(t.date AS DATE) AS tgl_daftar, CURDATE() AS sekarang,
        //     DATEDIFF(CURDATE(),CAST(t.date AS DATE)) AS tes
        //     FROM tb_pelamar AS t 
        //     WHERE t.no_ktp = '$ktp' AND DATEDIFF(CURDATE(),CAST(t.date AS DATE)) < 180";
        //  $query = $result = $this->db->query($q);
        //  if ($result->num_rows()> 0){
        //      return 0;
        //  }
        //  else 
        //  {
             return 1;
        //  }
     }

     function validid($ktp)
     {
         $q = "SELECT q.no_ktp FROM tb_pelamar AS q
            WHERE q.`no_ktp` = '$ktp'";
         $query = $result = $this->db->query($q);
         if ($result->num_rows()> 0){
             return 0;
         }
         else 
         {
             return 1;
         }
     }

     function validkuota($code)
     {
         // Client-side hint for cekLimit(). The AUTHORITATIVE quota check is
         // server-side in Recruitment_form::save(). We deliberately do NOT use
         // `sisa` here: production's karir VIEW has no sisa column (only staging's
         // does), so referencing it 500s on production and silently broke the
         // "quota full" warning. Instead compute the live count from tb_pelamar
         // and compare to `limit` — works on both table- and view-based karir.
         $q = "SELECT r.`limit`,
                      (SELECT COUNT(*) FROM tb_pelamar p WHERE p.posisi = r.division_code) AS sudah_isi
               FROM tb_recruitment r
               WHERE r.`division_code` = ?
                 AND r.`close` >= CURDATE()";
         $result = $this->db->query($q, array($code));
         if ($result && $result->num_rows() > 0) {
             $row = $result->row();
             return ((int)$row->limit - (int)$row->sudah_isi > 0) ? 1 : 0;
         }
         return 0;
     }
}