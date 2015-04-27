<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * @Khadim Raath
 */

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $method = $this->router->method;
        $auth_methods = array("index", "my_ads", "me", "logout", "settings", "change_password");
        if (in_array($method, $auth_methods)) {
            if (!is_logged_in()) {
                show_404();
            }
        }
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
        if ($this->input->is_ajax_request()) {
            $this->load->model('User_model');
            $result = $this->User_model->user_login();
            echo json_encode($result);
        } else {
            $data['title'] = "Login";
            $this->load->view('advertisement/index', $data);
        }
    }

    public function register() {
        if ($this->input->is_ajax_request()) {
            $this->load->model('User_model');
            $result = $this->User_model->create_user();
            echo json_encode($result);
        } else {
            $data['title'] = "Register";
            $this->load->view('advertisement/index', $data);
        }
    }

    public function verify_registration($token) {
        $this->load->model('User_model');
        if ($this->User_model->activate($token)) {
            redirect('user/login');
        } else {
            show_404();
        }
    }

    public function logout() {
        $this->session->sess_destroy();
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
