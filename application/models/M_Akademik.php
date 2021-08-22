<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Akademik extends CI_Model
{
    public function insert_semester($data)
    {
        $query = $this->db->select('*')
        ->from('tb_portofolio')
        ->where($data)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_portofolio',$data);
        }
        else{

        }   
    }

    public function getwhere_akademik(array $data)
    {
        $query = $this->db->select('*')
        ->from('tb_akademik')
        ->where($data)
        ->get();
        return $query;
    }

    public function update_akademik($data, $set)
    {
        $query = $this->db->select('*')
        ->from('tb_akademik')
        ->where($set)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_akademik',$data);
        }
        else{
            $this->db->where($set);
            $this->db->update('tb_akademik',$data);
        }   
    }
}