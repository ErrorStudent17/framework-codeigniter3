<?php defined('BASEPATH') or exit('No direct script access allowed');
class Auth extends CI_Controller
{
    private $redirect = "t_user";
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }
    public function index()
    {
        $this->session->sess_destroy();
        $data = array('login' => '');
        $this->load->view('login', $data);
    }
    public function login()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $data = $this->M_auth->CekLogin('t_user', 'username', $user);
        if ($data['password'] == $pass and $data['username'] == $user) {
            $array = array(
                'username' => $data['username'], 'nama_user' => $data['nama_user'], 'IsAdmin' => 1
            );
            // var_dump($data['nama_user']);
            $this->session->set_userdata($array);
            redirect('Dashboard', 'refresh');
        } else {
            echo "<script>alert('Username atau Password salah!');</script>";
            redirect('Auth', 'refresh');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Auth', 'refresh');
    }
}