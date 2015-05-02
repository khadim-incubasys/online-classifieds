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
        $data['title'] = "Advertisements";
        $this->load->model('Advertisement_model');
        $data['ads'] = $this->Advertisement_model->get_all_custom_where(array("status" => 1));
        $this->load->view('advertisement/index', $data);
    }

    public function view($id = 1) {

        $this->load->model('Advertisement_model');
        $result = $this->Advertisement_model->get_single_ad($id);
        if ($result && !empty($result)) {
            $data['ad'] = $result[0];
            $this->load->model('User_model');
            $data['user'] = $this->User_model->get_single("id", $result[0]['user_id']);
            $data['title'] = "View:-" . $result[0]['title'];
            $this->load->view('advertisement/view', $data);
        } else {
            show_404();
        }
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
            if ($this->input->server('REQUEST_METHOD') != 'POST') {
                $data['title'] = "New Ad";
                $this->load->view('advertisement/create', $data);
            } else {
                $this->load->model('Advertisement_model');

                if ($this->Advertisement_model->create_ad())
                    redirect("advertisement");
                else {
                    redirect("advertisement/submit_ad");
                }
            }
        } else {
            redirect('user/login');
        }
    }

    public function contact_to_buy($id = 1) {
        if ($this->input->is_ajax_request()) {
            $this->load->model('Advertisement_model');
            $result = $this->Advertisement_model->contact_to_buy();
            echo json_encode($result);
        } else {
            $this->load->model('Advertisement_model');
            $result = $this->Advertisement_model->get_single_ad($id);
            if ($result && !empty($result)) {
                $data['ad'] = $result[0];
                $this->load->model('User_model');
                $data['user'] = $this->User_model->get_single("id", $result[0]['user_id']);
                $data['title'] = "View:-" . $result[0]['title'];
                $this->load->view('advertisement/view', $data);
            } else {
                show_404();
            }
        }
    }

    public function search() {
        $this->load->model('Advertisement_model');
        $data = $this->Advertisement_model->search_by();
        $data['title'] = "Search Results";
        $this->load->view('advertisement/search-results', $data);
    }

    public function upload_image() {
        $this->load->library('Imageuploader');
        $upload_handler = new Imageuploader(null, true);
    }

}
