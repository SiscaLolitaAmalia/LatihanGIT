<?php
class SiswaModel extends CI_Model
{
    public function insertSiswa($data)
    {
        $this->db->insert('siswa', $data);
        return $this->db->insert_id();
    }

    public function getSiswaByNis($nis)
    {
        $query = $this->db->get_where('siswa', array('nis' => $nis));
        return $query->row();
    }
}
