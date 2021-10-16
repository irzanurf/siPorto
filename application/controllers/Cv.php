<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';

class Cv extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('M_Login');
        $current_user=$this->M_Login->is_role();
        $this->load->model('M_Mahasiswa');
        $this->load->model('M_Dosen');
        $this->load->model('M_Portofolio');
        $this->load->model('M_Akademik');
        $this->load->model('M_Prestasi');
        $this->load->model('M_Magang');
        $this->load->model('M_Kompetensi');
        $this->load->model('M_Aktivitas');
        $this->load->model('M_Pengumuman');
        
    }

    public function index()
    {
        $enc=$this->input->get('c');
        if (empty($enc)){
            redirect(base_url('welcome'));
        };
        $this->M_Mahasiswa->check_enc(array('enc'=>"$enc"));
        $data['prestasi'] = [];
        $data['magang'] = [];
        $data['kompetensi'] = [];
        $data['aktivitas'] = [];
        $data['diri'] = $this->M_Mahasiswa->getwhere_mahasiswa(array('enc'=>"$enc"))->row();
        $nim = $data['diri']->nim;
        $portofolio = $this->M_Portofolio->get_all_id(array('mahasiswa'=>"$nim"))->result();
        // print_r($portofolio);
        foreach($portofolio as $p) {
            $id_portofolio = $p->id;
            // $data_prestasi = $this->M_Prestasi->getwhere_prestasi(array('id_portofolio'=>"$id_portofolio"))->result();
            $data_prestasi = $this->M_Prestasi->getwhere_prestasi(array('id_portofolio'=>"$id_portofolio", 'tb_prestasi.status'=>1))->result();
            array_push($data['prestasi'], ...$data_prestasi);
            // $data_magang = $this->M_Magang->getwhere_magang(array('id_portofolio'=>"$id_portofolio"))->result();
            $data_magang = $this->M_Magang->getwhere_magang(array('id_portofolio'=>"$id_portofolio", 'tb_magang.status'=>1))->result();
            array_push($data['magang'], ...$data_magang);
            // $data_kompetensi = $this->M_Kompetensi->getwhere_kompetensi(array('id_portofolio'=>"$id_portofolio"))->result();
            $data_kompetensi = $this->M_Kompetensi->getwhere_kompetensi(array('id_portofolio'=>"$id_portofolio", 'tb_kompetensi.status'=>1))->result();
            array_push($data['kompetensi'], ...$data_kompetensi);
            // $data_aktivitas = $this->M_Aktivitas->getwhere_aktivitas(array('id_portofolio'=>"$id_portofolio"))->result();
            $data_aktivitas = $this->M_Aktivitas->getwhere_aktivitas(array('id_portofolio'=>"$id_portofolio", 'tb_aktivitas.status'=>1))->result();
            array_push($data['aktivitas'], ...$data_aktivitas);
        };
        $url = base_url("cv?c=$enc");
        $data['url'] = $url; 
        $this->load->view('cv', $data);
    }
}