<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * @Khadim Raath
 */

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = SITE_TITLE;
        $this->load->view('user/index', $data);
    }
    public function my_ads() {
        $data['title'] = "Login";
        $this->load->view('user/my_ads', $data);
    }
    public function me() {
        $data['title'] = "Khadim-Raath";
        $this->load->view('user/me', $data);
    }
    public function login() {
        $data['title'] = "Login";
        $this->load->view('user/login', $data);
    }
    public function signup() {
        $data['title'] = "signup";
        $this->load->view('user/create', $data);
    }
    public function logout() {
        $data['title'] = "Logut";
        redirect('advertisement/index');
    }
    public function settings() {
        $data['title'] = "Settings";
        $this->load->view('user/settings', $data);
    }
    public function change_password() {
        $data['title'] = "Change Password";
        $this->load->view('user/change_pwd', $data);
    }

}
