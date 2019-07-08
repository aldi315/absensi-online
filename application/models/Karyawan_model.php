<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    public function getAbsensi() {
        return $this->db->get('data_absen')->result();
    }

    public function getOrganisasi() {
        return $this->db->get('organisasi')->result();
    }
    public function getOrganisasiByNameJabatan($name,$position) {
        return $this->db->get_where('organisasi',array('name' => $name, $position => 1))->result();
    }
    public function getOrganisasiByName($name) {
        return $this->db->get_where('organisasi',array('name' => $name))->result();
    }

    public function getOrganisasiById($id) {
        return $this->db->get_where('organisasi',array('id' => $id))->result();
    }
    
    public function getUser($nik) {
        return $this->db->get_where('users_karyawan',array('nik' => $nik))->result();
    }
    public function getOrganisasiByJabatan($position) {
        return $this->db->get_where('organisasi',array($position => 1))->result();
    }

    
    public function addAnggotaOrganisasi($name, $nik, $position,$nilai) {
        return $this->db->insert('organisasi', array('name' => $name, 'foto' => $nik, $position => $nilai, ));
    }

    public function getJabatan() {
        return $this->db->get('jabatan')->result();
    }
    public function getJadwalPiket() {
        return $this->db->get('jadwal_piket')->result();
    }
    public function getJabatanByJabatan($seksiValue) {
        return $this->db->get_where('jabatan', array('jabatan' => $seksiValue))->result();
    }

     public function deleteJabatan($seksi) {
        return $this->db->delete('jabatan', array('jabatan' => $seksi));
    }

    public function deleteOrganisasi($seksi) {
        return $this->db->delete('organisasi', array($seksi => '1'));
    }
    public function deleteOrganisasiById($id) {
        return $this->db->delete('organisasi', array('id' => $id));
    }

    public function addSeksi($seksiTitle, $seksi, $max) {
        return $this->db->insert('jabatan', array('jabatan' => $seksi, 'name_jabatan' => $seksiTitle, 'max' => $max));
    }
    public function alterDropTableOrganisasi($seksi) {
        return $this->db->query("ALTER TABLE `organisasi` DROP $seksi");
        
    }

    public function updateJumlahSeksi($jumlah, $position) {
        return $this->db->set(array('jumlah' => $jumlah))->where('jabatan', $position)->update('jabatan');
    }

    public function alterTableOrganisasi($seksi, $after) {
        return $this->db->query("ALTER TABLE `organisasi` ADD $seksi INT NOT NULL AFTER $after");
        
    }
    public function getUserOnline() {
        return $this->db->order_by('name', 'ASC')->get('user_online')->result();
    }

    public function getUserOnlineByOnline() {
        return $this->db->get_where('user_online', array('online' => '1'))->result();
    }

    public function getAbsensiByAbsen() {
        return $this->db->get_where('absensi_karyawan', array('absen' => '0'))->result();
    }

    public function getAbsensiByDate($date) {

        return $this->db->get_where('data_absen', array('date' => $date))->result();
    }
    public function getAbsensiByNameDate($name,$date) {

        return $this->db->get_where('data_absen', array('name'=> $name,'date' => $date))->result();
    }
    public function getAbsensiById($id) {
        return $this->db->get_where('data_absen', array('id' => $id))->result();
    }

    public function getAbsensiByName($name) {
        return $this->db->get_where('data_absen', array('name' => $name))->result();
    }

    public function getAllDataKaryawan() {
        return $this->db->order_by('name', 'ASC')->get('data_karyawan')->result();
    }


    public function getDataKaryawanById($id) {
        return $this->db->get_where('data_karyawan', array('id' => $id))->result();
    }
    public function getDataKaryawanByName($name) {
        return $this->db->get_where('data_karyawan', array('name' => $name))->result();
    }

    public function getDataKaryawanByNik($nik) {
        return $this->db->get_where('data_karyawan', array('nik' => $nik))->result();
    }

    public function getAbsensiKaryawanById($id) {
        return $this->db->get_where('absensi_karyawan', array('id' => $id))->result();
    }

    public function getAbsensiKaryawanByName($name) {
        return $this->db->get_where('absensi_karyawan', array('nama' => $name))->result();
    }

    public function getAlasanKaryawanByName($name) {
        return $this->db->order_by('id', 'DESC')->get_where('alasan_karyawan', array('nama' => $name))->result();
    }
    public function getAlasanKaryawanByNameDate($name,$date) {
        return $this->db->get_where('alasan_karyawan', array('nama' => $name,'tanggal' => $date))->result();
    }
    public function deleteAlasanKaryawan($name,$date) {
        return $this->db->delete('alasan_karyawan', array('nama' => $name, 'tanggal' => $date));
    }
    public function deleteOrganisasiByName($name) {
        return $this->db->delete('organisasi', array('name' => $name));
    }

    public function changeInfoKaryawanById($id, $data) {
        return $this->db->set($data)->where('id', $id)->update('data_karyawan');
    }
    public function changeJadwalPiket($data) {
        return $this->db->set($data)->update('jadwal_piket');
    }
    public function changeFotoWaliKelas($foto) {
        return $this->db->set($data)->update('data_wali_kelas');
    }

    public function addDataKaryawan($data) {
        return $this->db->insert('data_karyawan', $data);
    }
    public function Libur($dari,$sampai,$kenapa) {
        return $this->db->set('dari', $dari)->set('sampai', $sampai)->set('kenapa', $kenapa)->update('libur');
    }
    public function ubahWaliKelas($data) {
        return $this->db->set($data)->update('data_wali_kelas');
    }
    public function getWaliKelas() {
        return $this->db->get('data_wali_kelas')->result();
    }


    public function addAbsensiKaryawan($data) {
        return $this->db->insert('absensi_karyawan', $data);
    }

    public function updateAbsensiKaryawan($id, $kehadiran, $jumlah) {
        return $this->db->set(array($kehadiran => $jumlah, 'terakhir_diupdate' => date('H:i:s')))->where('id', $id)->update('absensi_karyawan');
    }
    public function updateAbsensiKaryawanWhereName($name, $kehadiran, $jumlah) {
        return $this->db->set(array($kehadiran => $jumlah, 'terakhir_diupdate' => date('H:i:s')))->where('nama', $name)->update('absensi_karyawan');
    }
    public function updatedata_absen($id, $data) {
        return $this->db->set($data)->where('id', $id)->update('data_absen');
    }

    public function updateUserOnline($name, $date, $online) {
        return $this->db->set(array('date' => $date, 'online' => $online))->where('name', $name)->update('user_online');
    }

    public function addAlasanKaryawan($name, $alasan, $date) {
        return $this->db->insert('alasan_karyawan', array('nama' => $name, 'alasan' => $alasan, 'tanggal' => $date));
    }
    public function updateAlasanKaryawan($data,$name) {
        return $this->db->set($data)->where('nama', $name)->update('alasan_karyawan');
    }



    public function resetAbsensiHariIni($name, $kehadiran, $jumlah) {
        $this->db->set($kehadiran, $jumlah, FALSE )->where('nama', $name)->update('absensi_karyawan');
        
    }

    public function resetAbsen() {
        $this->db->delete('data_absen', array('date' => date('d/m/Y')));
        return $this->db->set('absen', '0', FALSE)->update('absensi_karyawan');
    }

    public function deleteKaryawan($id) {
        $this->db->delete('users_karyawan', array('id' => $id+2));
        $this->db->delete('user_online', array('id'=> $id));
        $this->db->delete('absensi_karyawan', array('id' => $id));
        return $this->db->delete('data_karyawan', array('id' => $id));
    }
    
    public function loginKaryawan($nik, $password) {

        return $this->db->where('nik', $nik)->where('password', $password)->get('users_karyawan')->result();
    }
    public function loginKaryawanAll() {
        return $this->db->get('users_karyawan')->result();
    }
    public function getUserKaryawan() {
        return $this->db->get('users_karyawan')->result();
    }

    public function addUserKaryawan($nik, $password) {
        return $this->db->insert('users_karyawan', array('nik' => $nik, 'password' => $password, 'level' => 'Karyawan'));
    }
    public function addUserOnline($name, $online) {
        return $this->db->insert('user_online', array('name' => $name, 'online' => $online));
    }

    public function settingAbsensi($start, $end) {
        return $this->db->set('mulai_absen', $start)->set('selesai_absen', $end)->update('setting_absensi');
    }

    public function getSettingAbsensi() {
        return $this->db->get('setting_absensi')->result();
    }
    public function getLibur() {
        return $this->db->get('libur')->result();
    }

    public function absenHarian($id) {
        return $this->db->set('absen', '1')->where('id', $id)->update('absensi_karyawan');
    }
    public function addRekapAbsen($name, $tanggal, $time, $ket){
        return $this->db->insert('data_absen', array('name' => $name, 'date' => $tanggal,'time' =>$time, 'ket' => $ket));
    }

    public function addHistory($name, $info, $tanggal) {
        return $this->db->insert('history_karyawan', array('nama' => $name, 'info' => $info, 'tanggal' => $tanggal));
    }
    public function getAllHistory() {
        return $this->db->get('history_karyawan')->result();
    }
    public function getChat() {
        return $this->db->get('chat')->result();
    }
    public function getDataHistoryById($id) {
        return $this->db->get_where('history_karyawan', array('id' => $id))->result();
    }
    public function deleteHistory($id) {
        return $this->db->delete('history_karyawan', array('id' => $id));
    } 
    public function deleteAllHistory() {
        return $this->db->truncate('history_karyawan');
    }
    public function clearChat() {
        return $this->db->truncate('chat');
    }
    


    public function uploadImage() {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['remove_space'] = TRUE;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('upload_image')) {
            return array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
        }else{
            return array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
        }
    }
}