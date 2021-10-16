<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Mahasiswa extends CI_Model
{
    public function get_mahasiswa()
    {
        $query = $this->db->select('tb_mahasiswa.*, tb_dosen.nama as doswal')
        ->from('tb_mahasiswa')
        ->join('tb_dosen','tb_mahasiswa.doswal=tb_dosen.nip','inner')
        ->get();
        return $query;
    }

    public function getwhere_mahasiswa(array $data)
    {
        $query = $this->db->select('tb_mahasiswa.*, tb_dosen.nama as doswal')
        ->from('tb_mahasiswa')
        ->join('tb_dosen','tb_mahasiswa.doswal=tb_dosen.nip','inner')
        ->where($data)
        ->get();
        return $query;
    }

    public function get_profile(array $data)
    {
        $query = $this->db->select('nama, profile')
        ->from('tb_mahasiswa')
        ->where($data)
        ->get();
        return $query;
    }

    public function update_data($data,$username)
    {
        $this->db->where('nim',$username);
        $this->db->update('tb_mahasiswa',$data);
    }

    public function insert_mahasiswa($data,$username)
    {
        $query = $this->db->select('*')
        ->from('tb_mahasiswa')
        ->where('nim',"$username")
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            $this->db->insert('tb_mahasiswa',$data);
        }
        else{

        }   
    }

    public function del_mhs(array $data){
        $query = $this->db->delete('tb_mahasiswa',$data);
        return $query;
    }

    public function check_enc($data)
    {
        $query = $this->db->select('*')
        ->from('tb_mahasiswa')
        ->where($data)
        ->get();
        $result = $query->result_array();
        $count = count($result);
    
        if (empty($count)){
            redirect(base_url('welcome'));
        }
        else{
            // DO NOTHING
        } 
    }

}