<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    private $view = "front/";
    private $templated = "template/";
    private $redirect = "Dashboard";
    public function __construct()
    {
        parent::__construct();
        IsAdmin();
    }
    public function index()
    // $data
    {
        $this->load->view($this->templated . 'header');
        $this->load->view($this->view . 'index');
        $this->load->view($this->templated . 'footer');
    }
}
