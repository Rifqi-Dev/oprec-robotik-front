<?php 
defined('BASEPATH') or exit ('No direct script access allowed');

class User extends CI_Controller{
    public function index(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('user/dsh_s_1.php');
        $this->load->view('templates/footer.php');
    }
    public function step_2(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('user/dsh_s_2.php');
        $this->load->view('templates/footer.php');
    }
    public function step_3(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('user/dsh_s_3.php');
        $this->load->view('templates/footer.php');
    }
    public function step_4(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/topbar.php');
        $this->load->view('user/dsh_s_4.php');
        $this->load->view('templates/footer.php');
    }
}