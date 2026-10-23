<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Region
 *
 * Handles AJAX cascade selectors for province -> kabupaten/kota -> kecamatan -> desa.
 * Uses the cahyadsn wilayah table (Kemendagri 2025 codes), where hierarchy is
 * encoded in the kode: 32 = Jawa Barat, 32.16 = Kabupaten Bekasi,
 * 32.16.01 = Kecamatan Tarumajaya, 32.16.01.1007 = Setu Asih.
 * Endpoints are listed in config/config.php csrf_exclude_uris.
 */
class Region extends MY_Controller
{
    /**
     * Kabupaten/Kota for a province.
     * @param string $prov_kode  e.g. "32"
     */
    public function kabupaten($prov_kode)
    {
        $prov_kode = $this->db->escape_like_str((string) $prov_kode);
        $rows = $this->db->query(
            "SELECT kode, nama FROM wilayah
             WHERE kode LIKE ? ESCAPE '|'
               AND kode NOT LIKE ? ESCAPE '|'
             ORDER BY (SUBSTRING_INDEX(kode, '.', -1) >= 70) ASC, nama ASC",
            array($prov_kode . '|.%', $prov_kode . '|.%.%')
        )->result();

        $html = "<option value=''>- Pilih Kota/Kabupaten -</option>";
        $current_type = null;
        foreach ($rows as $row) {
            $is_kota = (substr($row->kode, -2) >= 70);
            $type = $is_kota ? 'kota' : 'kabupaten';
            if ($type !== $current_type) {
                if ($current_type !== null) { $html .= "</optgroup>"; }
                $html .= "<optgroup label='" . ($is_kota ? 'Kota' : 'Kabupaten') . "'>";
                $current_type = $type;
            }
            $html .= "<option value='" . htmlspecialchars($row->kode, ENT_QUOTES) . "'>"
                   . htmlspecialchars($row->nama, ENT_QUOTES) . "</option>";
        }
        if ($current_type !== null) { $html .= "</optgroup>"; }
        echo $html;
    }

    /**
     * Kecamatan for a kabupaten/kota.
     * @param string $kab_kode  e.g. "32.16"
     */
    public function kecamatan($kab_kode)
    {
        $kab_kode = $this->db->escape_like_str((string) $kab_kode);
        $rows = $this->db->query(
            "SELECT kode, nama FROM wilayah
             WHERE kode LIKE ? ESCAPE '|'
               AND kode NOT LIKE ? ESCAPE '|'
             ORDER BY nama ASC",
            array($kab_kode . '|.%', $kab_kode . '|.%.%')
        )->result();

        $html = "<option value=''> - Pilih Kecamatan - </option>";
        foreach ($rows as $row) {
            $html .= "<option value='" . htmlspecialchars($row->kode, ENT_QUOTES) . "'>"
                   . htmlspecialchars($row->nama, ENT_QUOTES) . "</option>";
        }
        echo $html;
    }

    /**
     * Kelurahan/Desa for a kecamatan.
     * @param string $kec_kode  e.g. "32.16.01"
     */
    public function desa($kec_kode)
    {
        $kec_kode = $this->db->escape_like_str((string) $kec_kode);
        $rows = $this->db->query(
            "SELECT kode, nama FROM wilayah
             WHERE kode LIKE ? ESCAPE '|'
             ORDER BY nama ASC",
            array($kec_kode . '|.%')
        )->result();

        $html = "<option value=''> - Pilih Desa - </option>";
        foreach ($rows as $row) {
            $html .= "<option value='" . htmlspecialchars($row->kode, ENT_QUOTES) . "'>"
                   . htmlspecialchars($row->nama, ENT_QUOTES) . "</option>";
        }
        echo $html;
    }
}