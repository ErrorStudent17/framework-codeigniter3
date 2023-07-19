<?php defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
    private $view = "front/v_mhs/";
    private $templated = "template/";
    private $redirect = "Mahasiswa";

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_mhs');
    }

    function index()
    {
        $read = $this->M_mhs->GetAll();
        $data = array(
            'read' => $read
        );
        $this->load->view($this->templated . 'header');
        $this->load->view($this->view . 'index', $data);
        $this->load->view($this->templated . 'footer');
    }
    public function create()
    {
        $this->load->helper('url');
        $data = array('create' => '');
        $this->load->view($this->templated . 'header');
        $this->load->view($this->view . 'create', $data);
        $this->load->view($this->templated . 'footer');
    }
    public function save()
    {
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'formatif' => $this->input->post('formatif'),
            'tugas' => $this->input->post('tugas'),
            'uts' => $this->input->post('uts'),
            'uas' => $this->input->post('uas')
            // 'nilai_akhir' => $this->input->post('nilai_akhir'),
            // 'nilai_mutu' => $this->input->post('nilai_mutu'),
            // 'ket' => $this->input->post('ket')
            // 'pswd_admin' => md5($this->input->post('pswd_admin'))
        );
        $this->M_mhs->save($data);
        $this->M_mhs->hitungNilaiAkhir();
        redirect($this->redirect, 'refresh');
    }
    public function edit()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'edit' => $this->M_mhs->edit($kd)
        );
        $this->load->view($this->templated . 'header');
        $this->load->view($this->view . 'edit', $data);
        $this->load->view($this->templated . 'footer');
    }
    public function update()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'nim' => $this->input->post('nim'),
            'nama_mhs' => $this->input->post('nama_mhs'),
            'formatif' => $this->input->post('formatif'),
            'tugas' => $this->input->post('tugas'),
            'uts' => $this->input->post('uts'),
            'uas' => $this->input->post('uas')
            // 'nilai_akhir' => $this->input->post('nilai_akhir'),
            // 'nilai_mutu' => $this->input->post('nilai_mutu'),
            // 'ket' => $this->input->post('ket')
        );
        $this->M_mhs->update($kd, $data);
        $this->M_mhs->hitungNilaiAkhir();
        redirect($this->redirect, 'refresh');
    }
    public function delete()
    {
        $kd = $this->uri->segment(3);
        $data = array(
            'nim' => $kd
        );
        $this->M_mhs->delete($data);
        redirect($this->redirect, 'refresh');
    }

    // $hitung = (10/100*'formatif') + (25/100*'tugas') + (30/100*'uts') + (35/100*'uas'),
    // $nilai_akhir = (0.1*raport.absensi) + (0.25*raport.nilai_tugas) + (0.3*raport.nilai_uts) + (0.35*raport.nilai_uas)

    // public function hitungNilai()
    // {
    //     $this->M_mhs->hitungNilaiAkhir();

    //     redirect($this->redirect, 'refresh');
    // }
}
