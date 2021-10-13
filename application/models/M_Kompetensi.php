<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kompetensi extends CI_Model
{
    public function getwhere_kompetensi(array $data)
    {
        $query = $this->db->select('tb_kompetensi.*')
        ->from('tb_kompetensi')
        ->where($data)
        ->get();
        return $query;
    }

    public function insert_kompetensi($data)
    {
        $this->db->insert('tb_kompetensi',$data);
        return $this->db->insert_id();
    }

    public function update_kompetensi($data, $id)
    {
        $this->db->where('id',$id);
        $this->db->update('tb_kompetensi',$data);
    }

    public function del_kompetensi(array $data)
    {
        $query = $this->db->delete('tb_kompetensi',$data);
        return $query;
    }
}