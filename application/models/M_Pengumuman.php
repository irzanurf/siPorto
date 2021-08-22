<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pengumuman extends CI_Model
{
    public function insert_pengumuman($data)
    {
        $this->db->insert('tb_pengumuman',$data);
        return $this->db->insert_id();
    }

    public function update_pengumuman($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_pengumuman',$data);
    }

    public function get_pengumuman()
    {
        $query = $this->db->select('*')
        ->from('tb_pengumuman')
        ->order_by('date','desc')
        ->get();
        return $query;
    }

    public function getwhere_pengumuman(array $data)
    {
        $query = $this->db->select('*')
        ->from('tb_pengumuman')
        ->where($data)
        ->get();
        return $query;
    }

    public function del_pengumuman(array $data)
    {
        $query = $this->db->delete('tb_pengumuman',$data);
        return $query;
    }

    public function count_wali($username)
    {
        $this->db->where('doswal',"$username");
        return $this->db->count_all_results('tb_mahasiswa');
    }

    public function count_dosen()
    {
        return $this->db->count_all_results('tb_dosen');
    }

    public function count_mahasiswa()
    {
        return $this->db->count_all_results('tb_mahasiswa');
    }

}