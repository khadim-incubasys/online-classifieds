<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * @Khadim Raath
 */

//
class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Category_model');
    }

    public function index() {
        $data['title'] = "All Categories";
        $data['cats'] = $this->Category_model->list_all();
        $this->load->view('category/index', $data);
    }

    public function list_all() {
        $data['title'] = "All Categories";

        $data['cats'] = $this->Category_model->list_all();
        $this->load->view('category/index', $data);
    }

}
