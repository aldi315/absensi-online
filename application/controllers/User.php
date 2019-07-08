<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Karyawan_model', 'karyawan');
        if ($this->session->userdata('nik') == null) {
            redirect(base_url().'auth/login');
        }
        
        $this->karyawan->updateUserOnline($this->session->userdata('name'),date('d/m/Y H:i:s'), 1);

    }


    public function messageAlert($type, $title) {
        $messageAlert = "
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000
        });
    
        Toast.fire({
            type: '".$type."',
            title: '".$title."'
        });
        ";
        return $messageAlert;
    }
    public function kirim_chat()
    {
        $user= $this->input->post("user");
        $pesan= htmlspecialchars(($this->input->post("pesan")));
        $result = $this->db->insert('chat', array('user' => $user, 'pesan' => $pesan));
        redirect ("user/ambil_pesan");
    }
     
    public function ambil_pesan()
    {
        $tampil=$this->db->order_by('waktu', 'ASC')->get('chat')->result();
        foreach ($tampil as $key) {
            $waktu = $key->waktu;
            $jam = substr($waktu, 10);
            $sekarang = date("Y-m-d");
            if (substr($waktu, 0,10) == $sekarang) {
                $waktu = "Hari ini.".$jam." WIB";
            }
            $nickname = $this->session->userdata('nickname');

            if($key->user == 'admin'){
              echo "<div id='$key->id_chat' class='col-md-12 ml-10 alert alert-danger mb-2' style='padding:5px' role='alert'><b>$key->user </b> : <span class='font-12'>$waktu<span> <hr style='margin:0px'> $key->pesan <br></div>";
            }elseif($key->user == 'guru'){
                echo "<div id='$key->id_chat' class='col-md-12 ml-10 alert alert-info mb-2' style='padding:5px' role='alert'><b>$key->user </b> : <span class='font-12'>$waktu<span> <hr style='margin:0px'> $key->pesan <br></div>";
            }elseif($key->user == $nickname){
                echo "<div id='$key->id_chat' class='col-md-12 ml-10 alert alert-success mb-2' style='padding:5px' role='alert'><b>$key->user </b> : <span class='font-12'>$waktu<span> <hr style='margin:0px'> $key->pesan <br></div>";
            }
            else{
                echo "<div id='$key->id_chat' class='col-md-12 ml-10 alert alert-warning mb-2' style='padding:5px' role='alert'><b>$key->user </b> : <span class='font-12'>$waktu<span> <hr style='margin:0px'> $key->pesan <br></div>";
            }
            }
    }

    public function index() {
        // $addHistory = $this->karyawan->addHistory($this->session->userdata('name'), $this->session->userdata('name').' Telah melakukan login', date('d/m/Y H:i:s'));
        $data['getUserOnlineByOnline'] = $this->karyawan->getUserOnlineByOnline();
        $data['dataKaryawan'] = $this->karyawan->getDataKaryawanById($this->session->userdata('id'));
        
        $data['settingAbsensi'] = $getSettingAbsensi = $this->karyawan->getSettingAbsensi();
        $data['absensiKaryawan'] = $this->karyawan->getAbsensiKaryawanById($this->session->userdata('id'));
        $data['alasanKaryawan'] = $this->karyawan->getAlasanKaryawanByName($this->session->userdata('name'));

        $getLibur = $this->karyawan->getLibur();
        $data['start'] = $getLibur[0]->dari;
        $data['end'] = $getLibur[0]->sampai;
        $data['kenapa'] = $getLibur[0]->kenapa;
        $this->load->view('user/Dashboard', $data);
    }

    public function daftarTeman(){
    $data['dataKaryawan'] = $this->karyawan->getDataKaryawanById($this->session->userdata('id'));
    $this->load->view('user/Teman', $data);
    }

      public function teras(){
            // $addHistory = $this->karyawan->addHistory('Admin', 'Admin telah melakukan login', date('d/m/Y H:i:s'));
        $data['getJadwalPiket'] = $this->karyawan->getJadwalPiket();
        $data['dataWaliKelas'] = $this->karyawan->getWaliKelas();
        $data['getJabatan'] = $this->karyawan->getJabatan();
        $data['getWaliKelas'] = $this->karyawan->getWaliKelas();
        $data['getAllDataKaryawan'] = $this->karyawan->getAllDataKaryawan();
        $data['getOrganisasi'] = $this->karyawan->getOrganisasi();
         $data['dataKaryawan'] = $this->karyawan->getDataKaryawanById($this->session->userdata('id'));
        $data['sessionGuru'] =  $this->session->userdata('level') == 'Guru';
        $data['sessionAdmin'] =  $this->session->userdata('level') == 'Admin';
        // $psw = md5('guru'); //ganteng for admin
        // return $this->db->insert('users_karyawan', array('nik' => 112233, 'password' => $psw, 'level' => 'Guru'));
      
        $this->load->view('user/Teras', $data);
      }

      public function absensiSiswa() {
        $date = date('d/m/Y');
        $data['alasanKaryawan'] = $this->karyawan->getAlasanKaryawanByName($this->session->userdata('name'));
        $data['dataKaryawan'] = $this->karyawan->getDataKaryawanById($this->session->userdata('id'));
        $data['getAbsensi'] = $this->karyawan->getAbsensi();
        $data['getAbsensiByAbsen'] = $this->karyawan->getAbsensiByAbsen();
        $data['getAbsensiByDate'] = $this->karyawan->getAbsensiByDate($date);
        $data['getAllDataKaryawan'] = $this->karyawan->getAllDataKaryawan();

        
        $this->load->view('user/AbsensiSiswa', $data);
    }

    public function absenKaryawan() {
        $id = $this->uri->segment('3');
        $cekId = $this->karyawan->getDataKaryawanById($id);

        if ($cekId[0]->id) {
            $getSettingAbsensi = $this->karyawan->getSettingAbsensi();
            $start = $getSettingAbsensi[0]->mulai_absen;
            $end = $getSettingAbsensi[0]->selesai_absen;
            if (!(strtotime($start) <= time())) {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Waktu untuk absen belum di mulai'));
                redirect(base_url().'user');
            }elseif (!(time() >= strtotime($end))) {
                $absensiKaryawan = $this->karyawan->getAbsensiKaryawanById($id);
                if ($absensiKaryawan[0]->absen == 1) {
                    $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Sudah absen'));
                    redirect(base_url().'user');
                }else{

                    $absenHarian = $this->karyawan->absenHarian($id);
                    $tambahKehadiran = $this->karyawan->updateAbsensiKaryawan($id, 'hadir', 1);
                    $tambahHistory = $this->karyawan->addHistory($cekId[0]->name, $cekId[0]->name.' telah melakukan absen', date('d/m/Y H:i:s'));
                    $addRekapAbsen = $this->karyawan->addRekapAbsen($cekId[0]->name, date('d/m/Y'), date('H:i:s'), 'hadir');
                    if ($absenHarian && $tambahKehadiran && $tambahHistory && $addRekapAbsen) {
                        $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Absen berhasil'));
                        redirect(base_url().'user');
                    }else{
                        $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal untuk absen'));
                        redirect(base_url().'user');
                    }
                }
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Batas waktu untuk absen telah berakhir'));
                redirect(base_url().'user');
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal untuk absen'));
            redirect(base_url().'user');
        }
    }

     public function changeInfoKaryawan() {
        $id = $this->input->post('id');
        $position = htmlspecialchars($this->input->post('position'));
        $age = htmlspecialchars($this->input->post('age'));
        $start_date = htmlspecialchars($this->input->post('start_date'));
        $salary = htmlspecialchars($this->input->post('salary'));
        $email = htmlspecialchars($this->input->post('email'));
        $handphone = htmlspecialchars($this->input->post('handphone'));
        $tentang = htmlspecialchars($this->input->post('tentang'));
        $ambilAngkaKeSatu = substr($handphone, 0,1);
        $ambilAngkaKeDua = substr($handphone, 0,2);
        if ($handphone != '') {
            if ($ambilAngkaKeSatu != 6 || $ambilAngkaKeDua != 62) {
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Nomor handphone harus diawali dengan 62'));
            redirect(base_url().'user');
            }
            
        }
        
        $data = array(
                'position' => $position,
                'age' => $age,
                'start_date' => $start_date,
                'salary' => $salary,
                'email' => $email,
                'handphone' => $handphone,
                'tentang' => $tentang
            );
            $changeInfo = $this->karyawan->changeInfoKaryawanById($id, $data);
            if ($changeInfo == 1) {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil mengubah info'));
                redirect(base_url().'user');
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengubah info'));
                redirect(base_url().'user');    
            }
       
    }
    public function changeFotoKaryawan() {
        $id = $this->input->post('id');
        $upload = $this->karyawan->uploadImage();
        if ($id && $upload['result'] == "success") {
            $data = array(
                'image_name' => $upload['file']['file_name']
            );
            $changeFoto = $this->karyawan->changeInfoKaryawanById($id, $data);

            if ($changeFoto == 1) {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil mengubah foto'));
                redirect(base_url().'user');
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengubah foto'));
                redirect(base_url().'user');
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengupload gambar'));
            redirect(base_url().'user');
        }
    }

    public function logout() {
        $this->karyawan->updateUserOnline($this->session->userdata('name'),date('d/m/Y H:i:s'), 0);
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
}