<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Magang extends CI_Model
{
    public function getwhere_magang(array $data)
    {
        $query = $this->db->select('tb_magang.*, tb_dosen.nama as dosbing')
        ->from('tb_magang')
        ->join('tb_dosen','tb_magang.dosbing=tb_dosen.nip','inner')
        ->where($data)
        ->get();
        return $query;
    }

    public function insert_magang($data)
    {
        $this->db->insert('tb_magang',$data);
        return $this->db->insert_id();
    }

    public function update_magang($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_magang',$data);
    }

    public function del_magang(array $data)
    {
        $query = $this->db->delete('tb_magang',$data);
        return $query;
    }
}