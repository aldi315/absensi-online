<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('Karyawan_model', 'karyawan');
    if ($this->session->userdata('nik') == null) {
        redirect(base_url().'auth/login');
    }
}

	
    public function logout() {
    $addHistory = $this->karyawan->addHistory('Guru', 'Guru telah melakukan logout', date('d/m/Y H:i:s'));
    $this->session->sess_destroy();
    redirect(base_url());
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
        // $addHistory = $this->karyawan->addHistory($this->session->userdata('name'), $this->session->userdata('name').' Telah melakukan login', date('d/m/Y H:i:s'));
        $data['getUserOnlineByOnline'] = $this->karyawan->getUserOnlineByOnline();
        $data['dataKaryawan'] = $this->karyawan->getDataKaryawanById($this->session->userdata('id'));

        $data['settingAbsensi'] = $getSettingAbsensi = $this->karyawan->getSettingAbsensi();
        $data['absensiKaryawan'] = $this->karyawan->getAbsensiKaryawanById($this->session->userdata('id'));
        $data['alasanKaryawan'] = $this->karyawan->getAlasanKaryawanByName($this->session->userdata('name'));
        $this->load->view('guru/Dashboard', $data);
    }




}
?>