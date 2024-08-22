<?php 
defined('BASEPATH') or exit ('No direct script access allowed');

class Auth extends CI_Controller{
    public function index(){
        $this->load->view('templates/auth_header');
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registrasi(){
        $this->load->view('templates/auth_header');
        $this->load->view('auth/register');
        $this->load->view('templates/auth_footer');
    }
    public function otp(){
        $this->load->view('templates/auth_header');
        $this->load->view('auth/otp.php');
        $this->load->view('templates/auth_footer');
    }
    public function countdown(){
        $this->load->view('templates/auth_header');
        $this->load->view('auth/countdown.php');
        $this->load->view('templates/auth_footer');
    }
    public function lupaPassword(){
        $this->load->view('templates/auth_header');
        $this->load->view('auth/lupa_password.php');
        $this->load->view('templates/auth_footer');

    }
}