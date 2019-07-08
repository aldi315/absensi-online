<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Karyawan_model', 'karyawan');
        if ($this->session->userdata('nik') == null) {
            redirect(base_url().'auth/login');
        }elseif ($this->session->userdata('level') == 'Karyawan') {
            redirect(base_url().'user');
        }
        $sessionGuru =  $this->session->userdata('level') == 'Guru';
        $sessionAdmin=  $this->session->userdata('level') == 'Admin';

            // elseif ($this->session->userdata('level') == 'Guru') {
        //     redirect(base_url().'guru');
        // }
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


    public function index() {
        // $addHistory = $this->karyawan->addHistory('Admin', 'Admin telah melakukan login', date('d/m/Y H:i:s'));
        $data['sessionGuru'] =  $this->session->userdata('level') == 'Guru';
        $data['sessionAdmin'] =  $this->session->userdata('level') == 'Admin';
        // $psw = md5('gan_teng'); //ganteng for admin
        // return $this->db->insert('users_karyawan', array('nik' => 123321, 'password' => $psw, 'level' => 'Admin'));
        $data['dataWaliKelas'] = $this->karyawan->getWaliKelas();
  

        $this->load->view('admin/Dashboard', $data);
    }



    public function organisasi(){
        $date = date('d/m/Y');
        // $data['getAbsensi'] = $this->karyawan->getAbsensi();
        // $data['getAbsensiByAbsen'] = $this->karyawan->getAbsensiByAbsen();
        // $data['getAbsensiByDate'] = $this->karyawan->getAbsensiByDate($date);

        // $name=getOrganisasiByJabatan($key->jabatan)[0]->name;
        // $foto=$this->karyawan->getDataKaryawanByName($name);
        $data['getJabatan'] = $this->karyawan->getJabatan();
        $data['getWaliKelas'] = $this->karyawan->getWaliKelas();
        $data['getAllDataKaryawan'] = $this->karyawan->getAllDataKaryawan();
        $data['getOrganisasi'] = $this->karyawan->getOrganisasi();
        $this->load->view('admin/Organisasi', $data);
    }

    public function addAnggota(){
        $name = $this->input->post('name');
        $position = $this ->input->post('position');
        $dataKaryawan = $this->karyawan->getDataKaryawanByName($name);
        $getJabatan = $this->karyawan->getJabatanByJabatan($position);
        $max = $getJabatan[0]->max;
        $jum = $getJabatan[0]->jumlah;
        $nik = $dataKaryawan[0]->image_name;
        if ($this->input->post('name') == 'Pilih Nama' || $this->input->post('position') == 'Position' ) {
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Pilih Nama & Position'));
                redirect(base_url().'karyawan/organisasi');
        }else{
            if ($jum < $max) {

            $getOrganisasiByNameJabatan = $this->karyawan->getOrganisasiByNameJabatan($name,$position);
             if ($getOrganisasiByNameJabatan == !null) {
            $alert = $name.' Sudah Ada di bagian '.ucfirst($position);
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
                redirect(base_url().'karyawan/organisasi');
            }else{
               $getJabatanByJabatan = $this->karyawan->getJabatanByJabatan($position);
            $jumlah = $getJabatanByJabatan[0]->jumlah;
            $tambahKeJabatan = $this->karyawan->updateJumlahSeksi($jumlah+1, $position);
             $tambahKeOrganisasi = $this->karyawan->addAnggotaOrganisasi($name,$nik,$position,1);
                if ($tambahKeOrganisasi) {
            $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil Ditambahkan'));
                redirect(base_url().'karyawan/organisasi'); 
              }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal Ditambahkan'));
                redirect(base_url().'karyawan/organisasi');   
              }
            }
        }else{
         
                $alert = "Room Penuh Gan";
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
                redirect(base_url().'karyawan/organisasi');
            
        }
       
        
    }
}
    public function waliKelas(){
        $name =$this->input->post('name');
        $birthdate =$this->input->post('birthdate');
        $email =$this->input->post('email');
        $phone =$this->input->post('phone');
        $address =$this->input->post('address');
        $tentang = $this->input->post('tentang');
        $data = array(
                    'name' => $name,
                    'start_date' => $birthdate,
                    'email' => $email,
                    'handphone' => $phone,
                    'address' => $address,
                    'tentang' => $tentang
                );
        $add = $this->karyawan->ubahWaliKelas($data);
        if ($add == 1) {
             $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Data Berhasil Diubah'));
                redirect(base_url().'karyawan');       

        }else{
             $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Data Gagal Diubah'));
                redirect(base_url().'karyawan');                   
        }

    }
    public function addSeksi(){
        $selectPosition = $this->input->post('selectPosition');
        $seksi =$this->input->post('seksi');
        $seksiValue = strtolower(str_replace( ' ', '_', $seksi));

        $getJabatan = $this->karyawan->getJabatan();
        $getJabatanByJabatan = $this->karyawan->getJabatanByJabatan($seksiValue);
        
        if ($seksi == null  && $selectPosition == !null) {
            if ($selectPosition == "Pilih Seksi") {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Pilih Seksi Dulu'));
                redirect(base_url().'karyawan/organisasi');       
            }else{
                $seksi = $selectPosition;
                $seksiTitle = ucfirst(str_replace( '_', ' ', $seksi));
                $cekSeksi = $this->karyawan->getJabatanByJabatan($seksi);
                if ($cekSeksi) {
                
                if ( $cekSeksi[0]->max == 1) {
                    $alert = $seksiTitle.' Sudah Ada';
                    $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
                redirect(base_url().'karyawan/organisasi'); 
                die;      
                }
            }
                
            }
        }elseif($seksi == !null  && $selectPosition !== "Pilih Seksi"){
              $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gabisa Pilih Dua'));
                redirect(base_url().'karyawan/organisasi');       
        }
                

        if ($getJabatanByJabatan == !null) {
        $alert = $seksiTitle.' Sudah Ada';
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
                redirect(base_url().'karyawan/organisasi');       
        }else{
             if ($getJabatan == null) {
                    $setelah = 'foto';            
                 
             }else{   

                 $ambilElementAkhirDariGetJabatan = end($getJabatan);
                 $setelah = $ambilElementAkhirDariGetJabatan->jabatan ;
             }
                if ($selectPosition == 'wali_kelas' || $selectPosition == 'ketua_kelas' || $selectPosition == 'wakil_ketua_kelas') {
                    $max = 1;
                }else{
                    $max = 10;
                }
                if ($selectPosition !== 'Pilih Seksi') {
                    $seksi = $selectPosition;
                    
                }else{
                $seksiTitle = $seksi;
                $seksi = $seksiValue;
            }
                 $addSeksi = $this->karyawan->addSeksi($seksiTitle, $seksi, $max);
                 $alter = $this->karyawan->alterTableOrganisasi($seksi, $setelah);
        if ($addSeksi == 1 && $alter == 1) {
        $alert = $seksiTitle.' Berhasil Ditambahkan';
            $this->session->set_flashdata('messageAlert', $this->messageAlert('success', $alert));
                redirect(base_url().'karyawan/organisasi');   
        }else{
            $alert = $seksiTitle.' Gagal Ditambahkan';
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
                redirect(base_url().'karyawan/organisasi');   
        }
      }
  }

    public function clearRoom(){ 
        $room = $this->uri->segment(3);
        $cekJabatan = $this->karyawan->getJabatanByJabatan($room);
        $deleteAnggotaOrganisasi = $this->karyawan->deleteOrganisasi($room);
        $jadiNol = $this->karyawan->updateJumlahSeksi(0,$room);
        if ($deleteAnggotaOrganisasi == 1 && $jadiNol == 1) {
            $alert = 'Berhasil DiBersihkan';
            $this->session->set_flashdata('messageAlert', $this->messageAlert('success', $alert));
                redirect(base_url().'karyawan/organisasi');      
        }else{
            $alert = 'Gagal DiBersihkan';
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
                redirect(base_url().'karyawan/organisasi');      
        }
    }
 
    public function deleteSeksi(){
        $seksi =$this->input->post('seksi');
        $cekJabatan = $this->karyawan->getJabatanByJabatan($seksi);
        $seksiTitle =  ucfirst(str_replace( '_', ' ', $seksi));

        if ($cekJabatan == null) {
            $alert = 'Pilih Seksi yang ingin dihapus';
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
                redirect(base_url().'karyawan/organisasi');      
        }else{
            $deleteAnggotaOrganisasi = $this->karyawan->deleteOrganisasi($seksi);
            $delete = $this->karyawan->deleteJabatan($seksi);
            $deleteOrganisasi = $this->karyawan->alterDropTableOrganisasi($seksi);
        if ($delete == 1 && $deleteOrganisasi == 1 && $deleteAnggotaOrganisasi == 1) {
         
            $alert = $seksiTitle.' Berhasil Dihapus';
            $this->session->set_flashdata('messageAlert', $this->messageAlert('success', $alert));
                redirect(base_url().'karyawan/organisasi');      
        }else{

            $alert = $seksiTitle.' Gagal Dihapus';
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
                redirect(base_url().'karyawan/organisasi');   
        }
    }


    }

    public function data_karyawan() {
        $data['getAllDataKaryawan'] = $this->karyawan->getAllDataKaryawan();
        $this->load->view('admin/DataKaryawan', $data);
        
    }

    public function tambah_karyawan() {
        $this->load->view('admin/TambahKaryawan');
    }


    public function absensi_karyawan() {
        $date = date('d/m/Y');
        $data['getAbsensi'] = $this->karyawan->getAbsensi();
        $data['getAbsensiByAbsen'] = $this->karyawan->getAbsensiByAbsen();
        $data['getAbsensiByDate'] = $this->karyawan->getAbsensiByDate($date);
        $data['getAllDataKaryawan'] = $this->karyawan->getAllDataKaryawan();
        
        $this->load->view('admin/AbsensiKaryawan', $data);
    }

    public function setting_absensi() {
        $data['getSettingAbsensi']= $this->karyawan->getSettingAbsensi();
        $this->load->view('admin/SettingAbsensi', $data);
    }

    public function history() {
        $data['getUserOnline'] = $this->karyawan->getUserOnline();
        $data['getAllHistory'] = $this->karyawan->getAllHistory();
        $data['sessionAdmin'] =  $this->session->userdata('level') == 'Admin';
        
        $this->load->view('admin/History', $data);

    }


    public function logout() {
        $addHistory = $this->karyawan->addHistory('Admin', 'Admin telah melakukan logout', date('d/m/Y H:i:s'));
        $this->session->sess_destroy();
        redirect(base_url());
    }

    public function resetAbsen() {
        $getAbsensiByDate = $this->karyawan->getAbsensiByDate(date('d/m/Y'));
        $resetAbsen = $this->karyawan->resetAbsen();
            
            if ($getAbsensiByDate !== null) {
                foreach ($getAbsensiByDate as $key ) {
                 $name= $key->name; 
                 $kehadiran = $key->Ket;
                 $getAbsensiKaryawanByName = $this->karyawan->getAbsensiKaryawanByName($name);
                 $hadirnya = $getAbsensiKaryawanByName[0]->$kehadiran;
                 if ($hadirnya > 0 ) {
                    $jumlah = $hadirnya-1;
                 }elseif($hadirnya <= 0){
                     $jumlah = 0;
                 }
                 
                 $this->karyawan->resetAbsensiHariIni($name, $kehadiran, $jumlah);
            }
            }
             
            
        $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil mereset absen'));
         redirect(base_url().'karyawan/setting_absensi');
    }

    public function isTime($time) {
        return preg_match("#([0-1]{1}[0-9]{1}|[2]{1}[0-3]{1}):[0-5]{1}[0-9]{1}#", $time);
    }
    
    public function settingAbsensi() {

        $start = $this->input->post('start');
        $end = $this->input->post('end');
        if ($start && $end) {
            if ($this->isTime($start) && $this->isTime($end)) {
                $this->karyawan->settingAbsensi($start, $end);
                $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil mengubah pengaturan'));
                redirect(base_url().'karyawan/setting_absensi');
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Format jam salah'));
                redirect(base_url().'karyawan/setting_absensi');
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengubah pengaturan'));
            redirect(base_url().'karyawan/setting_absensi');
        }
    }

    public function edit() {
        $id = $this->uri->segment(3);
        $cekId = $this->karyawan->getDataKaryawanById($id);
        if ($cekId[0]->id) {
            $dataKaryawan = $this->karyawan->getDataKaryawanById($id);
            $data['dataKaryawan'] = $dataKaryawan;
            $data['absensiKaryawan'] = $this->karyawan->getAbsensiKaryawanById($id);
            // $data['getAbsensiByName'] = $this->karyawan->getAbsensiByName($cekId[0]->name);
            $data['alasanKaryawan'] = $this->karyawan->getAlasanKaryawanByName($dataKaryawan[0]->name);
            $this->load->view('admin/EditKaryawan', $data);
        }else{
            redirect();
        }
    }

    public function editAbsen(){
        $id = $this->uri->segment(3);
        $this->load->view('admin/EditAbsen');
    }

    public function deleteHistory(){
        
        $id = $this->uri->segment(3);
        $cekId = $this->karyawan->getDataHistoryById($id);        
        if ($cekId[0]->id){
            $deleteHistory = $this->karyawan->deleteHistory($id);
            if ($deleteHistory) {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil menghapus'));
                redirect(base_url().'karyawan/history');
            }
        }
    }
    public function deleteAllHistory(){
        $deleteAllHistory = $this->karyawan->deleteAllHistory();

        if ($deleteAllHistory == 1) {
            $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Clear All Success'));
                redirect(base_url().'karyawan/history');
        }
        
    }

    public function delete() {
        $id = $this->uri->segment(3);
        $cekId = $this->karyawan->getDataKaryawanById($id);
        if ($cekId[0]->id) {
            
            $deleteKaryawan = $this->karyawan->deleteKaryawan($id);
            if ($deleteKaryawan == 1) {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil menghapus Siswa'));
                redirect(base_url().'karyawan/data_karyawan');
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal menghapus Siswa'));
                redirect(base_url().'karyawan/data_karyawan');
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal menghapus Siswa'));
            redirect(base_url().'karyawan/data_karyawan');
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
                redirect(base_url().'karyawan/edit/'.$id);
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengubah foto'));
                redirect(base_url().'karyawan/edit/'.$id);
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengupload gambar'));
            redirect(base_url().'karyawan/edit/'.$id);
        }
    }
    
    public function changeFotoWaliKelas() {
        $upload = $this->karyawan->uploadImage();
        $id = $this->input->post('id');
        
        if ($id && $upload['result'] == "success") {
            $data = array(
                'image_name' => $upload['file']['file_name']
            );
            $changeFoto = $this->karyawan->changeFotoWaliKelas($foto);
            if ($changeFoto == 1) {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil mengubah foto'));
                redirect(base_url().'karyawan');
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengubah foto'));
                redirect(base_url().'karyawan');
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengupload gambar'));
            redirect(base_url().'karyawan');
        }
    }
    

    public function changeInfoKaryawan() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $position = $this->input->post('position');
        $age = $this->input->post('age');
        $start_date = $this->input->post('start_date');
        $salary = $this->input->post('salary');
        $email = $this->input->post('email');
        $handphone = $this->input->post('handphone');
        $nik = $this->input->post('nik');
        $tentang = $this->input->post('tentang');
        if ($name && $position && $age && $start_date && $salary && $email && $handphone && $nik && $tentang) {
            $data = array(
                'name' => $name,
                'position' => $position,
                'age' => $age,
                'start_date' => $start_date,
                'salary' => $salary,
                'email' => $email,
                'handphone' => $handphone,
                'nik' => $nik,
                'tentang' => $tentang
            );
            $changeInfo = $this->karyawan->changeInfoKaryawanById($id, $data);
            if ($changeInfo == 1) {
                $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil mengubah info'));
                redirect(base_url().'karyawan/edit/'.$id);
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengubah info'));
                redirect(base_url().'karyawan/edit/'.$id);    
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengubah info'));
            redirect(base_url().'karyawan/edit/'.$id);
        }
    }

    public function tambahKaryawan() {
        $name = $this->input->post('name');
        $position = $this->input->post('position');
        $age = $this->input->post('age');
        $start_date = $this->input->post('start_date');
        $salary = $this->input->post('salary');
        $email = $this->input->post('email');
        $handphone = $this->input->post('handphone');
        $nik = $this->input->post('nik');
        $password = md5($this->input->post('password'));
        $tentang = $this->input->post('tentang');
        $upload = $this->karyawan->uploadImage();

        
        
    if ($this->karyawan->getDataKaryawanByNik($nik) == null) {
        if ($name && $position && $age && $nik && $password && $upload) {
            if ($upload['result'] == "success") {
                $data = array(
                    'name' => $name,
                    'position' => $position,
                    'age' => $age,
                    'start_date' => $start_date,
                    'salary' => $salary,
                    'email' => $email,
                    'handphone' => $handphone,
                    'nik' => $nik,
                    'tentang' => $tentang,
                    'image_name' => $upload['file']['file_name']
                );
                $addUserOnline = $this->karyawan->addUserOnline($name,0);
                $addUserKaryawan = $this->karyawan->addUserKaryawan($nik, $password);
                $addDataKarywan = $this->karyawan->addDataKaryawan($data);
                $addAbsensiKaryawan = $this->karyawan->addAbsensiKaryawan(array('nama' => $name, 'hadir' => 0, 'alpa' => 0, 'izin' => 0, 'sakit' => 0));
                if ($addUserKaryawan == 1 || $addDataKarywan == 1 || $addAbsensiKaryawan == 1 || $addUserOnline == 1) {
                    $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil menambahkan Siswa'));
                    redirect(base_url().'karyawan/tambah_karyawan');
                }else{
                    $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal menambahkan Siswa'));
                    redirect(base_url().'karyawan/tambah_karyawan');
                }
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal mengupload gambar'));
            redirect(base_url().'karyawan/tambah_karyawan');    
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal menambahkan Siswa'));
            redirect(base_url().'karyawan/tambah_karyawan');
        }
    }else{
        $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'NIS Sudah Ada'));
            redirect(base_url().'karyawan/tambah_karyawan');    
        }    
    }

    public function ubahAbsen(){
        $date = $this->input->post('date');
        $name = $this->input->post('name');
        $tahun = substr($date, 0,4);
        $bulan = substr($date, 5,2);
        $tanggal = substr($date, 8,2);
        $date = $tanggal ."/".$bulan."/".$tahun;
        $getAllDataKaryawan = $this->karyawan->getAllDataKaryawan();
        $getAbsensiByNameDate = $this->karyawan->getAbsensiByNameDate($name,$date);
        if ($getAbsensiByNameDate == !null) {
            $data['tanggal'] = $getAbsensiByNameDate[0]->date;
            $data['name'] = $getAbsensiByNameDate[0]->name;
            $data['ket'] = $getAbsensiByNameDate[0]->Ket;
            $data['id'] = $getAbsensiByNameDate[0]->id;
            if ($getAbsensiByNameDate[0]->Ket != 'hadir') {
                $getAlasan = $this->karyawan->getAlasanKaryawanByNameDate($name,$date);
                $data['alasan'] = $getAlasan[0]->alasan;
            }

            $this->load->view('admin/UbahAbsensi', $data);
        }else{
         $alert= 'Nama dan Tanggal tidak ada dalam Absensi';
           $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
        redirect(base_url().'karyawan/absensi_karyawan');   
        }
        
    }
    public function ubah_absen(){
        $kehadiran = $this->input->post('kehadiran');
        $alasan = $this->input->post('alasan'); 
        $alasan = '['.$kehadiran.'] :'.$alasan;
        $idData_absen = $this->input->post('id'); 
        $name = $this->input->post('name'); 
        $ket = $this->input->post('ket'); 
        $dateInput = $this->input->post('dateInput');
        $time = date('H:i:s');
        if ($kehadiran == 'hadir') {
        // $getAbsensiByNameDate = $this->karyawan->getAbsensiByNameDate($name,$date);
            $data = array('Ket' => $kehadiran, 'time' => $time );       
            $updatedata_absen = $this->karyawan->updatedata_absen($idData_absen,$data);
            $updateAbsensiKaryawan = $this->karyawan->updateAbsensiKaryawanWhereName($name,$kehadiran,1);
            $updateAbsensiKaryawanNgurangi = $this->karyawan->updateAbsensiKaryawanWhereName($name,$ket,0);
            $deleteAlasanKaryawan = $this->karyawan->deleteAlasanKaryawan($name,$dateInput);
            if ($updatedata_absen == 1 && $updateAbsensiKaryawan == 1 && $updateAbsensiKaryawanNgurangi == 1 && $deleteAlasanKaryawan == 1) {
                $alert= 'Berhasil Dubah';
           $this->session->set_flashdata('messageAlert', $this->messageAlert('success', $alert));
        redirect(base_url().'karyawan/absensi_karyawan');   
            }else{
                $alert= 'Gagal Diubah';
           $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
        redirect(base_url().'karyawan/absensi_karyawan');   
            }
        }else{
            $data = array('Ket' => $kehadiran, 'time' => $time );
            $updatedata_absen = $this->karyawan->updatedata_absen($idData_absen,$data);
            $updateAbsensiKaryawan = $this->karyawan->updateAbsensiKaryawanWhereName($name,$kehadiran,1);
            $updateAbsensiKaryawanNgurangi = $this->karyawan->updateAbsensiKaryawanWhereName($name,$ket,0);
            $addAlasan = $this->karyawan->addAlasanKaryawan($name,$alasan,$dateInput);
            if ($ket == 'hadir') {
                $updateAlasan = $this->karyawan->addAlasanKaryawan($name,$alasan,$dateInput);
                
            }else{
                $data = array('alasan' => $alasan);
                $updateAlasan = $this->karyawan->updateAlasanKaryawan($data,$name);
            }    
            if ($updatedata_absen == 1 && $updateAbsensiKaryawan == 1 && $updateAlasan) {
                $alert= 'Berhasil Dubah';
           $this->session->set_flashdata('messageAlert', $this->messageAlert('success', $alert));
        redirect(base_url().'karyawan/absensi_karyawan');   
            }else{
                $alert= 'Gagal Diubah';
           $this->session->set_flashdata('messageAlert', $this->messageAlert('error', $alert));
        redirect(base_url().'karyawan/absensi_karyawan');   
            }
        }


    }


    

    public function absensiKaryawan() {
        $name = $this->input->post('name');
        $kehadiran = $this->input->post('kehadiran');
        
        $alasan = $this->input->post('alasan');
        $date = date('d/m/Y');
        $waktu = date('H:i:s');
        $up = strtoupper($kehadiran);
        $alasan = "[".$up."] => ".$alasan;

        
        if ($name && $kehadiran && $alasan) {
            $absensiKaryawan = $this->karyawan->getAbsensiKaryawanByName($name);
            if ($absensiKaryawan[0]->id) { 
                $hadirnya = $absensiKaryawan[0]->$kehadiran;
                $jumlah = $hadirnya + 1;
                $updateAbsensiKaryawan = $this->karyawan->updateAbsensiKaryawan($absensiKaryawan[0]->id, $kehadiran, $jumlah);
                $addAlasanKaryawan = $this->karyawan->addAlasanKaryawan($name, $alasan, $date);
                $absenHarian = $this->karyawan->absenHarian($absensiKaryawan[0]->id);

                $addRekapAbsen = $this->karyawan->addRekapAbsen($name, date('d/m/Y'), date('H:i:s'), $kehadiran);
                if ($updateAbsensiKaryawan == 1 && $addAlasanKaryawan == 1 && $addRekapAbsen == 1) {
                    $this->session->set_flashdata('messageAlert', $this->messageAlert('success', 'Berhasil Update absensi'));
                    redirect(base_url().'karyawan/absensi_karyawan');
                }else{
                    $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal Update absensi'));
                redirect(base_url().'karyawan/absensi_karyawan');
                }
            }else{
                $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal Update absensi'));
                redirect(base_url().'karyawan/absensi_karyawan');
            }
        }else{
            $this->session->set_flashdata('messageAlert', $this->messageAlert('error', 'Gagal menambah absensi'));
            redirect(base_url().'karyawan/absensi_karyawan');
        }
    }
}