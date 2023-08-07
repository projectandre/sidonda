<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_gol_darah extends CI_Model
{
    public function tampil_gol_darah()
    {
        $this->db->select('*');
        $this->db->from('tabel_donor_darah');
        $this->db->order_by('tabel_donor_darah.nama_pendonor', 'ASC'); // Mengurutkan berdasarkan nama_gol_darah secara ascending (A ke Z).
        return $this->db->get()->result_array();

        // $this->db->order_by('tabel_donor_darah.nama_pendonor', 'ASC');
        // return $this->db->get('tabel_donor_darah')->result_array();
    }

    public function kategori_gol_darah($gol_darah)
    {
        $this->db->select('*');
        $this->db->from('tabel_donor_darah');
        $this->db->order_by('tabel_donor_darah.nama_pendonor', 'ASC'); // Mengurutkan berdasarkan nama_gol_darah secara ascending (A ke Z).
        $this->db->where('golongan_darah', $gol_darah);
        return $this->db->get()->result_array();
    }

    public function tambah_gol_darah($data)
    {
        $this->db->insert('tabel_donor_darah', $data);
    }

    public function hapus_gol_darah($data)
    {
        $this->db->where('id_donor_darah', $data['id_donor_darah']);
        $this->db->delete('tabel_donor_darah', $data);
    }

    public function update_gol_darah($data)
    {
        $this->db->where('id_donor_darah', $data['id_donor_darah']);
        $this->db->update('tabel_donor_darah', $data);
    }

    public function detail_gol_darah($data)
    {
        $this->db->select('*');
        $this->db->from('tabel_donor_darah');
        $this->db->where('id_donor_darah', $data);
        return $this->db->get()->row();
    }
}
