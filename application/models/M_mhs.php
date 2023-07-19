<?php defined('BASEPATH') or exit('No direct script access allowed');
class M_mhs extends CI_Model
{
    private $table = 't_mahasiswa';
    private $nim = 'nim';
    public $nilai1, $nilai2, $hasil;

    public function GetAll()
    {
        $this->db->order_by($this->nim, 'desc');
        return $this->db->get($this->table);
    }
    public function save($data)
    {
        return $this->db->insert($this->table, $data);
    }
    public function edit($kd)
    {
        $this->db->where($this->nim, $kd);
        return $this->db->get($this->table)->row_array();
    }
    public function update($kd, $data)
    {
        $this->db->where($this->nim, $kd);
        return $this->db->update($this->table, $data);
    }
    public function delete($data)
    {
        $this->db->where($data);
        return $this->db->delete($this->table);
    }

    public function hitungNilaiAkhir() {

        // Retrieve data from the database table
        $query = $this->db->get('t_mahasiswa');

        foreach ($query->result() as $row) {
            $nilai_akhir = (10/100*$row->formatif) + (25/100*$row->tugas) + (30/100*$row->uts) + (35/100*$row->uas);
            // ($row->uas + $row->uts) / 2;
            $grade = '';
            if ($nilai_akhir >= 85 && $nilai_akhir <= 100 ) {
                $grade = 'A';
            } elseif ($nilai_akhir >= 70 && $nilai_akhir <= 84) {
                $grade = 'B';
            } elseif ($nilai_akhir >= 60 && $nilai_akhir <= 69) {
                $grade = 'C';
            } elseif ($nilai_akhir >= 45 && $nilai_akhir <= 59) {
                $grade = 'D';
            } elseif ($nilai_akhir >= 0 && $nilai_akhir <= 44) {
                $grade = 'E';
            }else{
                $grade = '-';
            }
            
            $keterangan = '';
            switch ($grade) {
                case 'A':
                    $keterangan = 'Sangat Baik';
                    break;
                case 'B':
                    $keterangan = 'Baik';
                    break;
                case 'C':
                    $keterangan = 'Cukup';
                    break;
                case 'D':
                    $keterangan = 'Kurang';
                    break;
                case 'E':
                    $keterangan = 'Sangat Kurang';
                    break;
                case '-':
                    $keterangan = '-';
                    break;
            }
            $this->db->where('nim', $row->nim);
            $this->db->update('t_mahasiswa', array(
            'nilai_akhir' => $nilai_akhir,
            'nilai_mutu' => $grade,
            'ket' => $keterangan
));
        }
    }
}
