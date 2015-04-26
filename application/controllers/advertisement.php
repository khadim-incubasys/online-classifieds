<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * @Khadim Raath
 */

//
class Advertisement extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Advertisement";
        $this->load->view('advertisement/index', $data);
    }

    public function view($id) {
        $data['title'] = $id;
        $this->load->view('advertisement/view', $data);
    }

    public function view_by_location($location) {
        $data['title'] = $location;
        $this->load->view('advertisement/index', $data);
    }

    public function power_ads() {
        $data['title'] = "Power Ads";
        $this->load->view('advertisement/index', $data);
    }

    public function submit_ad() {
        if (is_logged_in()) {
            $data['title'] = "New Ad";
            $this->load->view('advertisement/create', $data);
        } else {
            redirect('user/login');
        }
    }

    public function buy($id) {
        $data['title'] = "Buy Ad";
        $this->load->view('advertisement/view', $data);
    }

    public function search() {
        
    }

}
