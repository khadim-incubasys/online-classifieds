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

    public function settings() {
        $data['title'] = SITE_TITLE;
        $this->load->view('user/settings', $data);
    }

}
