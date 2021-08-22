<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Dosen extends CI_Model
{
    public function get_dosen()
    {
        $query = $this->db->select('*')
        ->from('tb_dosen')
        ->get();
        return $query;
    }

    public function getwhere_dosen(array $data)
    {
        $query = $this->db->select('*')
        ->from('tb_dosen')
        ->where($data)
        ->get();
        return $query;
    }

    public function get_profile(array $data)
    {
        $query = $this->db->select('*')
        ->from('tb_dosen')
        ->where($data)
        ->get();
        return $query;
    }

    public function del_dsn(array $data){
        $query = $this->db->delete('tb_dosen',$data);
        return $query;
    }

    public function insert_dosen($data,$username)
    {
        $query = $this->db->select('*')
        ->from('tb_dosen')
        ->where('nip',"$username")
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_dosen',$data);
        }
        else{

        }   
    }

}