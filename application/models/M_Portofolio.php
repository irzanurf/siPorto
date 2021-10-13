<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Portofolio extends CI_Model
{
    public function get_semester(array $data)
    {
        $query = $this->db->select('semester')
        ->from('tb_portofolio')
        ->where($data)
        ->where('semester >', '8')
        ->order_by('semester','asc')
        ->get();
        return $query;
    }

    public function get_all_id(array $data)
    {
        $query = $this->db->select('id')
        ->from('tb_portofolio')
        ->where($data)
        ->get();
        return $query;
    }

    public function cek_semester(array $data)
    {
        $query = $this->db->select('*')
        ->from('tb_portofolio')
        ->where($data)
        ->get();
        $result = $query->result_array();
        $count = count($result);
        if (empty($count)){
            return 0;
        }
        else{
            return 1;
        }   
    }

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

    public function insert_semester_new($username)
    {
        $i=9;
        while($i!=0) {
            $query = $this->db->select('*')
            ->from('tb_portofolio')
            ->where('mahasiswa', "$username")
            ->where('semester', "$i")
            ->get();
            $result = $query->result_array();
            $count = count($result);
            if (empty($count)){
                $data = [
                    "mahasiswa"=>$username,
                    "semester"=>$i,
                ];
                $this->db->insert('tb_portofolio',$data);
                $id = $this->db->insert_id();
                $i=0;
                $semester = $this->db->select('*')
                ->from('tb_portofolio')
                ->where('id', "$id")
                ->get();
                return $semester->row()->semester;
            }
            else{
                $i++;
            }   
        }
    }

    public function get_portofolio($data)
    {
        $query = $this->db->select('*')
        ->from('tb_portofolio')
        ->where($data)
        ->get();
        return $query;
    }

    public function del_portofolio(array $data){
        $query = $this->db->delete('tb_portofolio',$data);
        return $query;
    }

}