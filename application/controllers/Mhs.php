<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhs extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('M_Login');
        $current_user=$this->M_Login->is_role();
        //cek session dan level user
        if($this->M_Login->is_role() != "3"){
            redirect("welcome/");
        }
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
        $username = $this->session->userdata('username');
        $header['profile'] = $this->M_Mahasiswa->get_profile(array ('nim'=>"$username"))->row();
        $data['view'] = $this->M_Pengumuman->get_pengumuman()->result();
        $this->load->view('layout/header_mhs', $header);
        $this->load->view('mhs/dashboard', $data);
        $this->load->view("layout/footer");
    }

    public function pribadi()
    {
        $username = $this->session->userdata('username');
        $header['cek'] = "pribadi";
        $header['profile'] = $this->M_Mahasiswa->get_profile(array ('nim'=>"$username"))->row();
        $data['diri'] = $this->M_Mahasiswa->getwhere_mahasiswa(array('nim'=>"$username"))->row();
        $this->load->view('layout/header_mhs',$header);
        $this->load->view('mhs/pribadi',$data);
        $this->load->view("layout/footer");
    }

    public function edit_pribadi()
    {
        $username = $this->session->userdata('username');
        $header['cek'] = "pribadi";
        $header['profile'] = $this->M_Mahasiswa->get_profile(array ('nim'=>"$username"))->row();
        $data['diri'] = $this->M_Mahasiswa->getwhere_mahasiswa(array('nim'=>"$username"))->row();
        $username = $this->session->userdata('username');
        $this->load->view('layout/header_mhs', $header);
        $this->load->view('mhs/change_data_pribadi',$data);
        $this->load->view("layout/footer");
    }

    public function tambah_semester()
    {
        $username = $this->session->userdata('username');
        $semester=$this->M_Portofolio->insert_semester_new($username);
        redirect (base_url("Mhs/form_semester"."/"."$semester")); 
    }

    public function update_diri()
    {
        $username = $this->session->userdata('username');
        $nik = $this->input->post('nik',true);
        $nama = $this->input->post('nama',true);
        $konsentrasi = $this->input->post('konsentrasi',true);
        $angkatan = $this->input->post('angkatan',true);
        $tempat_lahir = $this->input->post('tempat_lahir',true);
        $tgl_lahir = $this->input->post('tgl_lahir',true);
        $alamat = $this->input->post('alamat',true);
        $alamat_ortu = $this->input->post('alamat_ortu',true);
        $sso = $this->input->post('sso',true);
        $email = $this->input->post('email',true);
        $no_hp = $this->input->post('no_hp',true);
        
        $data = [
            "nik"=>$nik,
            "nama"=>$nama,
            "konsentrasi"=>$konsentrasi,
            "angkatan"=>$angkatan,
            "tempat_lahir"=>$tempat_lahir,
            "tgl_lahir"=>$tgl_lahir,
            "alamat"=>$alamat,
            "alamat_ortu"=>$alamat_ortu,
            "sso"=>$sso,
            "email"=>$email,
            "no_hp"=>$no_hp,
        ];
        $this->M_Mahasiswa->update_data($data,$username);
        $profile = $_FILES['profile'];
        if(empty($profile['name'])){}
            else{
            $config['upload_path'] = './assets/fotoProfile';
            $config['encrypt_name'] = TRUE;
            $config['allowed_types'] = '*';

            $this->load->library('upload',$config,'profile');
            $this->profile->initialize($config);
            if(!$this->profile->do_upload('profile')){
                echo "Upload Gagal"; die();
            } else {
                $profile=$this->profile->data('file_name');
            }
            $dataprofile = [
            "profile"=>$profile,];
            $this->M_Mahasiswa->update_data($dataprofile,$username);
        }
        redirect (base_url("Mhs/pribadi")); 

    }

    public function form()
    {
        $username = $this->session->userdata('username');
        $header['cek'] = "portofolio";
        $header['semester'] = $this->M_Portofolio->get_semester(array('mahasiswa'=>"$username"))->result();
        $header['profile'] = $this->M_Mahasiswa->get_profile(array ('nim'=>"$username"))->row();
        $data['enc'] = $this->M_Mahasiswa->getwhere_mahasiswa(array('nim'=>"$username"))->row()->enc;
        $this->load->view('layout/header_mhs', $header);
        $this->load->view('mhs/portofolio', $data);
        $this->load->view("layout/footer");
    }

    public function form_semester($semester)
    {
        $data['topik'] = array();
        $username = $this->session->userdata('username');
        $sem = [
            "mahasiswa"=>$username,
            "semester"=>$semester,
        ];
        if ($semester<=8) :
            $this->M_Portofolio->insert_semester($sem);
        else :
            $cek = $this->M_Portofolio->cek_semester($sem);
            if ($cek==0):
                redirect(base_url("Mhs/form"));
            else:
                //DO NOTHING
            endif;
        endif;
        $id_portofolio = $this->M_Portofolio->get_portofolio($sem)->row()->id;
        $get_id_portofolio = $this->M_Portofolio->get_all_id(array('mahasiswa'=>"$username"))->result();
        foreach ($get_id_portofolio as $gip){
            $get_id_magang = $this->M_Magang->getwhere_magang(array('id_portofolio'=>"$gip->id"))->result();
            foreach ($get_id_magang as $gim){
                array_push($data['topik'], "$gim->topik");
            }
        }
        $header['cek'] = "portofolio";
        $header['semester'] = $this->M_Portofolio->get_semester(array('mahasiswa'=>"$username"))->result();
        $header['profile'] = $this->M_Mahasiswa->get_profile(array ('nim'=>"$username"))->row();
        $data['enc'] = $this->M_Mahasiswa->getwhere_mahasiswa(array('nim'=>"$username"))->row()->enc;
        $data['id_portofolio'] = $id_portofolio;
        $data['semester']=$semester;
        $data['dosen'] = $this->M_Dosen->get_dosen()->result();
        $data['akademik'] = $this->M_Akademik->getwhere_akademik(array('id_portofolio'=>"$id_portofolio"))->row();
        $data['prestasi'] = $this->M_Prestasi->getwhere_prestasi(array('id_portofolio'=>"$id_portofolio"))->result();
        $data['magang'] = $this->M_Magang->getwhere_magang(array('id_portofolio'=>"$id_portofolio"))->result();
        $data['aktivitas'] = $this->M_Aktivitas->getwhere_aktivitas(array('id_portofolio'=>"$id_portofolio"))->result();
        $data['kompetensi'] = $this->M_Kompetensi->getwhere_kompetensi(array('id_portofolio'=>"$id_portofolio"))->result();
        $this->load->view('layout/header_mhs', $header);
        $this->load->view('mhs/portofolio_semester', $data);
        $this->load->view("layout/footer");
    }

    public function update_akademik()
    {
        $username = $this->session->userdata('username');
        $semester = $this->input->post('semester',true);
        $id_portofolio = $this->input->post('id_portofolio',true);
        $sks = $this->input->post('sks',true);
        $ips = str_replace(",", ".", $this->input->post('ips',true));
        $ipk = str_replace(",", ".", $this->input->post('ipk',true));
        
        $set = ["id_portofolio"=>$id_portofolio];
        
        $data = [
            "id_portofolio"=>$id_portofolio,
            "sks"=>$sks,
            "ips"=>$ips,
            "ipk"=>$ipk,
        ];
        $this->M_Akademik->update_akademik($data,$set);
        $krs = $_FILES['krs'];
        if(empty($krs['name'])){}
            else{
            $config1['upload_path'] = './assets/krs';
            $config1['encrypt_name'] = TRUE;
            $config1['allowed_types'] = 'pdf';

            $this->load->library('upload',$config1,'krs');
            $this->krs->initialize($config1);
            if(!$this->krs->do_upload('krs')){
                echo "Upload Gagal"; die();
            } else {
                $krs=$this->krs->data('file_name');
            }
            $datakrs = [
            "id_portofolio"=>$id_portofolio,
            "krs"=>$krs,];
            $this->M_Akademik->update_akademik($datakrs,$set);
        }
        $transkrip = $_FILES['transkrip'];
        if(empty($transkrip['name'])){}
            else{
            $config2['upload_path'] = './assets/transkrip';
            $config2['encrypt_name'] = TRUE;
            $config2['allowed_types'] = 'pdf';

            $this->load->library('upload',$config2,'transkrip');
            $this->transkrip->initialize($config2);
            if(!$this->transkrip->do_upload('transkrip')){
                echo "Upload Gagal"; die();
            } else {
                $transkrip=$this->transkrip->data('file_name');
            }
            $datatranskrip = [
            "id_portofolio"=>$id_portofolio,
            "transkrip"=>$transkrip,];
            $this->M_Akademik->update_akademik($datatranskrip,$set);
        }
        redirect (base_url("Mhs/form_semester"."/"."$semester")); 

    }

    public function insert_prestasi()
    {
        $username = $this->session->userdata('username');
        $semester = $this->input->post('semester',true);
        $id_portofolio = $this->input->post('id_portofolio',true);
        $nama = $this->input->post('nama',true);
        $penyelenggara = $this->input->post('penyelenggara',true);
        $judul = $this->input->post('judul',true);
        $dosbing = $this->input->post('dosbing',true);
        $tgl_awal = $this->input->post('tgl_awal',true);
        $tgl_akhir = $this->input->post('tgl_akhir',true);
        $tingkat = $this->input->post('tingkat',true);
        $prestasi = $this->input->post('prestasi',true);

        $nama_dosbing = $this->input->post('nama_dosbing',true);
        if (empty($nama_dosbing)){

        }
        else {
            $data = [
                "nip"=>$dosbing,
                "nama"=>$nama_dosbing,
                "status"=>1
            ];
            $this->M_Dosen->update_dosen($data,$dosbing);
        }
        
        $data = [
            "id_portofolio"=>$id_portofolio,
            "nama"=>$nama,
            "penyelenggara"=>$penyelenggara,
            "judul"=>$judul,
            "dosbing"=>$dosbing,
            "tgl_awal"=>$tgl_awal,
            "tgl_akhir"=>$tgl_akhir,
            "tingkat"=>$tingkat,
            "prestasi"=>$prestasi,
        ];
        $id_prestasi = $this->M_Prestasi->insert_prestasi($data);
        $sertifikat = $_FILES['sertifikat'];
        if(empty($sertifikat['name'])){}
            else{
            $config1['upload_path'] = './assets/sertifikat';
            $config1['encrypt_name'] = TRUE;
            $config1['allowed_types'] = 'pdf';

            $this->load->library('upload',$config1,'sertifikat');
            $this->sertifikat->initialize($config1);
            if(!$this->sertifikat->do_upload('sertifikat')){
                echo "Upload Gagal"; die();
            } else {
                $sertifikat=$this->sertifikat->data('file_name');
            }
            $datasertifikat = [
            "sertifikat"=>$sertifikat,];
            $this->M_Prestasi->update_prestasi($datasertifikat,$id_prestasi);
        }
        $foto = $_FILES['foto'];
        if(empty($foto['name'])){}
            else{
            $config2['upload_path'] = './assets/foto';
            $config2['encrypt_name'] = TRUE;
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->load->library('upload',$config2,'foto');
            $this->foto->initialize($config2);
            if(!$this->foto->do_upload('foto')){
                echo "Upload Gagal"; die();
            } else {
                $foto=$this->foto->data('file_name');
            }
            $datafoto = [
            "foto"=>$foto,];
            $this->M_Prestasi->update_prestasi($datafoto,$id_prestasi);
        }
        $surat = $_FILES['surat'];
        if(empty($surat['name'])){}
            else{
            $config3['upload_path'] = './assets/surat';
            $config3['encrypt_name'] = TRUE;
            $config3['allowed_types'] = 'pdf';

            $this->load->library('upload',$config3,'surat');
            $this->surat->initialize($config3);
            if(!$this->surat->do_upload('surat')){
                echo "Upload Gagal"; die();
            } else {
                $surat=$this->surat->data('file_name');
            }
            $datasurat = [
            "surat"=>$surat,];
            $this->M_Prestasi->update_prestasi($datasurat,$id_prestasi);
        }
        redirect (base_url("Mhs/form_semester"."/"."$semester")); 
    }

    public function delete_prestasi()
    {
        $id = $this->input->post('id');
        $semester = $this->input->post('semester');
        $this->M_Prestasi->del_prestasi(array('id'=>$id));
        redirect (base_url("Mhs/form_semester"."/"."$semester")); 
    }

    public function checkTopik()
    {
        $topik = $this->input->get('topik');
        $username = $this->input->get('username');
        $get_id_portofolio = $this->M_Portofolio->get_all_id(array('mahasiswa'=>"$username"))->result();
        foreach ($get_id_portofolio as $gip){
            $id = $gip->id;
            $check_topik = $this->M_Magang->check_topik($id, $topik)->row();
            if(empty($check_topik)){
                $data['cek'] = "empty";
                $data['id'] = NULL;
            }
            else{
                $data['cek'] = "exist";
                $data['id'] = $check_topik->id;
                break;
            }
        }
        echo json_encode($data);
        
    }

    public function insert_magang()
    {
        $username = $this->session->userdata('username');
        $id = $this->input->post('id',true);
        $semester = $this->input->post('semester',true);
        $id_portofolio = $this->input->post('id_portofolio',true);
        $kategori = $this->input->post('kategori',true);
        $merdeka = $this->input->post('merdeka',true);
        $nama = $this->input->post('nama',true);
        $alamat = $this->input->post('alamat',true);
        $tgl_awal = $this->input->post('tgl_awal',true);
        $tgl_akhir = $this->input->post('tgl_akhir',true);
        $posisi = $this->input->post('posisi',true);
        $topik = $this->input->post('topik',true);
        $dosbing = $this->input->post('dosbing',true);

        $nama_dosbing = $this->input->post('nama_dosbing',true);
        if (empty($nama_dosbing)){

        }
        else {
            $data = [
                "nip"=>$dosbing,
                "nama"=>$nama_dosbing,
                "status"=>1
            ];
            $this->M_Dosen->update_dosen($data,$dosbing);
        }

        if (empty($id)){
            $data = [
                "id_portofolio"=>$id_portofolio,
                "kategori"=>$kategori,
                "merdeka"=>$merdeka,
                "nama"=>$nama,
                "alamat"=>$alamat,
                "tgl_awal"=>$tgl_awal,
                "tgl_akhir"=>$tgl_akhir,
                "posisi"=>$posisi,
                "topik"=>$topik,
                "dosbing"=>$dosbing,
            ];
            $id_magang = $this->M_Magang->insert_magang($data);
        }

        else {
            $id_magang = $id;
        }

        $proposal = $_FILES['proposal'];
        if(empty($proposal['name'])){}
            else{
            $config1['upload_path'] = './assets/pendamping';
            $config1['encrypt_name'] = TRUE;
            $config1['allowed_types'] = 'pdf';

            $this->load->library('upload',$config1,'proposal');
            $this->proposal->initialize($config1);
            if(!$this->proposal->do_upload('proposal')){
                echo "Upload Gagal"; die();
            } else {
                $proposal=$this->proposal->data('file_name');
            }
            $datafile = [
            "proposal"=>$proposal,];
            $this->M_Magang->update_magang($datafile,$id_magang);
        }
        $bukti = $_FILES['bukti'];
        if(empty($bukti['name'])){}
            else{
            $config2['upload_path'] = './assets/pendamping';
            $config2['encrypt_name'] = TRUE;
            $config2['allowed_types'] = 'pdf';

            $this->load->library('upload',$config2,'bukti');
            $this->bukti->initialize($config2);
            if(!$this->bukti->do_upload('bukti')){
                echo "Upload Gagal"; die();
            } else {
                $bukti=$this->bukti->data('file_name');
            }
            $datafile = [
            "bukti"=>$bukti,];
            $this->M_Magang->update_magang($datafile,$id_magang);
        }
        $laporan = $_FILES['laporan'];
        if(empty($laporan['name'])){}
            else{
            $config3['upload_path'] = './assets/pendamping';
            $config3['encrypt_name'] = TRUE;
            $config3['allowed_types'] = 'pdf';

            $this->load->library('upload',$config3,'laporan');
            $this->laporan->initialize($config3);
            if(!$this->laporan->do_upload('laporan')){
                echo "Upload Gagal"; die();
            } else {
                $laporan=$this->laporan->data('file_name');
            }
            $datafile = [
            "laporan"=>$laporan,];
            $this->M_Magang->update_magang($datafile,$id_magang);
        }
        redirect (base_url("Mhs/form_semester"."/"."$semester")); 
    }

    public function delete_magang()
    {
        $id = $this->input->post('id');
        $semester = $this->input->post('semester');
        $this->M_Magang->del_magang(array('id'=>$id));
        redirect (base_url("Mhs/form_semester"."/"."$semester")); 
    }

    public function insert_aktivitas()
    {
        $username = $this->session->userdata('username');
        $semester = $this->input->post('semester',true);
        $id_portofolio = $this->input->post('id_portofolio',true);
        $klasifikasi = $this->input->post('klasifikasi', true);
        $tingkat = $this->input->post('tingkat', true);
        $nama = $this->input->post('nama',true);
        $jabatan = $this->input->post('jabatan',true);
        $tgl_awal = $this->input->post('tgl_awal',true);
        $tgl_akhir = $this->input->post('tgl_akhir',true);
        
        $data = [
            "id_portofolio"=>$id_portofolio,
            "klasifikasi"=>$klasifikasi,
            "tingkat"=>$tingkat,
            "nama"=>$nama,
            "jabatan"=>$jabatan,
            "tgl_awal"=>$tgl_awal,
            "tgl_akhir"=>$tgl_akhir,
        ];
        $id_aktivitas = $this->M_Aktivitas->insert_aktivitas($data);
        $sertifikat = $_FILES['sertifikat'];
        if(empty($sertifikat['name'])){}
            else{
            $config1['upload_path'] = './assets/sertifikat';
            $config1['encrypt_name'] = TRUE;
            $config1['allowed_types'] = 'pdf';

            $this->load->library('upload',$config1,'sertifikat');
            $this->sertifikat->initialize($config1);
            if(!$this->sertifikat->do_upload('sertifikat')){
                echo "Upload Gagal"; die();
            } else {
                $sertifikat=$this->sertifikat->data('file_name');
            }
            $datasertifikat = [
            "sertifikat"=>$sertifikat,];
            $this->M_Aktivitas->update_aktivitas($datasertifikat,$id_aktivitas);
        }
        $foto = $_FILES['foto'];
        if(empty($foto['name'])){}
            else{
            $config2['upload_path'] = './assets/foto';
            $config2['encrypt_name'] = TRUE;
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';

            $this->load->library('upload',$config2,'foto');
            $this->foto->initialize($config2);
            if(!$this->foto->do_upload('foto')){
                echo "Upload Gagal"; die();
            } else {
                $foto=$this->foto->data('file_name');
            }
            $datafoto = [
            "foto"=>$foto,];
            $this->M_Aktivitas->update_aktivitas($datafoto,$id_aktivitas);
             
        }
        redirect (base_url("Mhs/form_semester"."/"."$semester"));
    }

    public function delete_aktivitas()
    {
        $id = $this->input->post('id');
        $semester = $this->input->post('semester');
        $this->M_Aktivitas->del_aktivitas(array('id'=>$id));
        redirect (base_url("Mhs/form_semester"."/"."$semester")); 
    }

    public function insert_kompetensi()
    {
        $username = $this->session->userdata('username');
        $semester = $this->input->post('semester',true);
        $id_portofolio = $this->input->post('id_portofolio',true);
        $nama = $this->input->post('nama', true);
        $rumpun = $this->input->post('rumpun', true);
        $nomor = $this->input->post('nomor',true);
        $penerbit = $this->input->post('penerbit',true);
        $tgl = $this->input->post('tgl',true);
        
        $data = [
            "id_portofolio"=>$id_portofolio,
            "nama"=>$nama,
            "rumpun"=>$rumpun,
            "nomor"=>$nomor,
            "penerbit"=>$penerbit,
            "tgl"=>$tgl,
        ];
        $id_kompetensi = $this->M_Kompetensi->insert_kompetensi($data);
        $sertifikat = $_FILES['sertifikat'];
        if(empty($sertifikat['name'])){}
            else{
            $config1['upload_path'] = './assets/sertifikat';
            $config1['encrypt_name'] = TRUE;
            $config1['allowed_types'] = 'pdf';

            $this->load->library('upload',$config1,'sertifikat');
            $this->sertifikat->initialize($config1);
            if(!$this->sertifikat->do_upload('sertifikat')){
                echo "Upload Gagal"; die();
            } else {
                $sertifikat=$this->sertifikat->data('file_name');
            }
            $datasertifikat = [
            "sertifikat"=>$sertifikat,];
            $this->M_Kompetensi->update_kompetensi($datasertifikat,$id_kompetensi);
        }
        
            redirect (base_url("Mhs/form_semester"."/"."$semester")); 
        
    }

    public function delete_kompetensi()
    {
        $id = $this->input->post('id');
        $semester = $this->input->post('semester');
        $this->M_Kompetensi->del_kompetensi(array('id'=>$id));
        redirect (base_url("Mhs/form_semester"."/"."$semester")); 
    }

    public function checkDosen()
    {
        $nip = $this->input->get('nip');
        $if_exists = $this->M_Dosen->getwhere_dosen(array('nip'=>"$nip"))->row()->nama;
        if (!empty($if_exists)) {
            $data['cek'] = "exist";
            $data['nama'] = $if_exists;
            echo json_encode($data);
        } else {
            $data['cek'] = "empty";
            echo json_encode($data);
        }
    }

}