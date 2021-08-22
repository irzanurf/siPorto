<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Aktivitas extends CI_Model
{
    public function getwhere_aktivitas(array $data)
    {
        $query = $this->db->select('*')
        ->from('tb_aktivitas')
        ->where($data)
        ->get();
        return $query;
    }

    public function insert_aktivitas($data)
    {
        $this->db->insert('tb_aktivitas',$data);
        return $this->db->insert_id();
    }

    public function update_aktivitas($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_aktivitas',$data);
    }

    public function del_aktivitas(array $data)
    {
        $query = $this->db->delete('tb_aktivitas',$data);
        return $query;
    }
}