<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dsn extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('M_Login');
        $current_user=$this->M_Login->is_role();
        //cek session dan level user
        if($this->M_Login->is_role() != "2"){
            redirect("welcome/");
        }
        
        $this->load->model('M_Mahasiswa');
        $this->load->model('M_Dosen');
        $this->load->model('M_Portofolio');
        $this->load->model('M_Akademik');
        $this->load->model('M_Prestasi');
        $this->load->model('M_Kompetensi');
        $this->load->model('M_Magang');
        $this->load->model('M_Aktivitas');
        $this->load->model('M_Pengumuman');
        
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $header['profile'] = $this->M_Dosen->get_profile(array ('nip'=>"$username"))->row();
        $data['view'] = $this->M_Pengumuman->get_pengumuman()->result();
        $data['mahasiswa'] = $this->M_Pengumuman->count_mahasiswa();
        $data['wali'] = $this->M_Pengumuman->count_wali($username);
        $data['dosen'] = $this->M_Pengumuman->count_dosen();
        $this->load->view('layout/header_dsn', $header);
        $this->load->view('dsn/dashboard', $data);
        $this->load->view("layout/footer");
    }

    public function datamhs()
    {
        $username = $this->session->userdata('username');
        $header['profile'] = $this->M_Dosen->get_profile(array ('nip'=>"$username"))->row();
        $data['mahasiswa'] = $this->M_Mahasiswa->getwhere_mahasiswa(array('doswal'=>"$username"))->result();
        $this->load->view('layout/header_dsn', $header);
        $this->load->view('dsn/daftar_mhs',$data);
        $this->load->view("layout/footer");
    }

    public function pribadi()
    {
        $username = $this->session->userdata('username');
        $header['profile'] = $this->M_Dosen->get_profile(array ('nip'=>"$username"))->row();
        $nim = $this->input->get('nim', true);
        $data['diri'] = $this->M_Mahasiswa->getwhere_mahasiswa(array('nim'=>"$nim"))->row();
        $this->load->view('layout/header_dsn', $header);
        $this->load->view('dsn/pribadi',$data);
        $this->load->view("layout/footer");
    }

    public function form_semester()
    {
        $username = $this->session->userdata('username');
        $header['profile'] = $this->M_Dosen->get_profile(array ('nip'=>"$username"))->row();
        $semester = $this->input->get('semester', true);
        $nim = $this->input->get('nim', true);
        $sem = [
            "mahasiswa"=>$nim,
            "semester"=>$semester,
        ];
        if ($semester<=8) :
            $this->M_Portofolio->insert_semester($sem);
        else :
            $cek = $this->M_Portofolio->cek_semester($sem);
            if ($cek==0):
                redirect(base_url("Dsn/form_semester?nim="."$nim"."&semester=1"));
            else:
                //DO NOTHING
            endif;
        endif;
        $id_portofolio = $this->M_Portofolio->get_portofolio($sem)->row()->id;
        $data['sem'] = $this->M_Portofolio->get_semester(array('mahasiswa'=>"$nim"))->result();
        $data['id_portofolio'] = $id_portofolio;
        $data['nim']=$nim;
        $data['semester']=$semester;
        $data['dosen'] = $this->M_Dosen->get_dosen()->result();
        $data['akademik'] = $this->M_Akademik->getwhere_akademik(array('id_portofolio'=>"$id_portofolio"))->row();
        $data['prestasi'] = $this->M_Prestasi->getwhere_prestasi(array('id_portofolio'=>"$id_portofolio"))->result();
        $data['magang'] = $this->M_Magang->getwhere_magang(array('id_portofolio'=>"$id_portofolio"))->result();
        $data['kompetensi'] = $this->M_Kompetensi->getwhere_kompetensi(array('id_portofolio'=>"$id_portofolio"))->result();
        $data['aktivitas'] = $this->M_Aktivitas->getwhere_aktivitas(array('id_portofolio'=>"$id_portofolio"))->result();
        $this->load->view('layout/header_dsn', $header);
        $this->load->view('dsn/portofolio_semester', $data);
        $this->load->view("layout/footer");
    }


}