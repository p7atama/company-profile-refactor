<?php defined('BASEPATH') or exit('No direct script access allowed');

class M_career extends CI_Model
{
    private $table = "tb_recruitment";

    public function getAll()
    {
        $results = array();
        $this->db->select('');
        $this->db->from('karir');
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            $results = $query->result();
        }
        return $results;
        // return $this->db->get($this->table)->result();
    }

    public function index()
    {
        // Only show vacancies that are still open (close >= today) AND still
        // have quota left. We compute the live submission count with a
        // correlated subquery against tb_pelamar and compare it to `limit`,
        // rather than relying on a `sisa` column — because `karir` is a plain
        // table on production (no sisa), even though it's a VIEW with sisa on
        // the dev DB. This works on both. A job is shown only while its
        // submission count is below the limit.
        $query = "SELECT k.*,REPLACE(REPLACE(k.location, ' ', '_'), '&', 'dan') AS location_new
        FROM karir AS k
        WHERE k.`close` >= CURDATE()
          AND (SELECT COUNT(*) FROM tb_pelamar p WHERE p.posisi = k.division_code) < k.`limit`";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }

    public function getDisclaimer()
    {
        $query = "SELECT * FROM tb_disclaimer AS q";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }

    public function getFAQ()
    {
        $query = "SELECT * FROM tb_faq AS q";
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

    public function getById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row();
    }

    public function update($data, $id)
    {
        return $this->db->update($this->table, $data, array('id' => $id));
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, array("id" => $id));
    }

    public function cekSisaKuota($division_code)
    {
        $query = "SELECT q.division_name, q.division_code, q.sisa FROM karir AS q
        WHERE division_code = '$division_code'";
        $result = $this->db->query($query);
        if ($result->num_rows() > 0) {
            return $result;
        } else {
            return $result;
        }
    }


    function get_all_provinsi()
    {
        // Provinces are the top level of the cahyadsn wilayah table:
        // kode has no dot (e.g. "11" = Aceh, "32" = Jawa Barat).
        // Returns kode (as the option value) and nama.
        $this->db->select('kode, nama');
        $this->db->from('wilayah');
        $this->db->where("kode NOT LIKE '%.%'", NULL, FALSE);
        $this->db->order_by('nama', 'ASC');
        $query = $this->db->get();
        return $query->result();
    }
}