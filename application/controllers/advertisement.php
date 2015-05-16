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
        $this->load->model('Advertisement_model');
    }

    public function index() {
        $data['title'] = "Advertisements";

        $data['ads'] = $this->Advertisement_model->get_all_custom_where(array("status" => 1));
        $this->load->view('advertisement/index', $data);
    }

    public function view($id = 1) {
        $result = $this->Advertisement_model->get_single_ad($id);
        if ($result && !empty($result)) {
            $data['ad'] = $result[0];
            $this->load->model('User_model');
            $data['user'] = $this->User_model->get_single("id", $result[0]['user_id']);
            ///
            $this->load->model('User_rating_model');
            $rating = $this->User_rating_model->get_all_custom_where(array("status" => 1, "user_id" => $result[0]['user_id']), " count(id) as count, sum(stars) as rating");
            ///
            $data['rating'] = 0;
            if ($rating && !empty($rating)) {
                if ($rating[0]['rating']) {
                    $rate = round(($rating[0]['rating'] / ($rating[0]['count'] * 5)) * 100, 0);
                    $data['rating'] = $rate;
                }
            }
            if (is_logged_in()) {
                $user = $this->session->userdata("user");
                $data['is_rated'] = $this->User_rating_model->is_already_exist("ad_id", $result[0]['id'], "rated_by", $user->id, "user_id != ", $user->id);
            }
           // var_dump( $data['is_rated']);die;
            $data['title'] = "View:-" . $result[0]['title'];
            $this->load->view('advertisement/view', $data);
        } else {
            show_404();
        }
    }

    public function view_by_location($location_id) {
        $this->load->model('Location_model');
        $loc = $this->Location_model->get_single("id", $location_id);
        if ($loc && !empty($loc)) {
            $data['ads'] = $this->Advertisement_model->get_all_custom_where(array("status" => 1, "location" => $loc->title));
            $data['title'] = "View By Location:-" . $loc->title;
            $this->load->view('advertisement/search-results', $data);
        } else {
            show_404();
        }
    }

    public function view_by_category($cat_id) {
        $this->load->model('Category_model');
        $cat = $this->Category_model->get_single("id", $cat_id);
        if ($cat && !empty($cat)) {
            $data['ads'] = $this->Advertisement_model->get_all_custom_where(array("status" => 1, "category" => $cat->title));
            $data['title'] = "View By Category:-" . $cat->title;
            $this->load->view('advertisement/search-results', $data);
        } else {
            show_404();
        }
    }

    public function power_ads() {
        $data['title'] = "Power Ads";

        $data['ads'] = $this->Advertisement_model->get_all_custom_where(array("status" => 1));
        $this->load->view('advertisement/index', $data);
    }

    public function submit_ad() {

        if (is_logged_in()) {
            if ($this->input->server('REQUEST_METHOD') != 'POST') {
                $data['title'] = "New Ad";
                $this->load->view('advertisement/create', $data);
            } else {
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

            $result = $this->Advertisement_model->contact_to_buy();
            echo json_encode($result);
        } else {

            $result = $this->Advertisement_model->get_single_ad($id);
            if ($result && !empty($result)) {
                $data['ad'] = $result[0];
                $this->load->model('User_model');
                $data['user'] = $this->User_model->get_single("id", $result[0]['user_id']);
                ///
                $this->load->model('User_rating_model');
                $rating = $this->User_rating_model->get_all_custom_where(array("status" => 1, "user_id" => $result[0]['user_id']), "avg(stars) as rating");
                ///
                $data['rating'] = 0;
                if ($rating && !empty($rating)) {
                    if ($rating[0]['rating'])
                        $data['rating'] = $rating[0]['rating'];
                }
                if (is_logged_in()) {
                    $user = $this->session->userdata("user");
                    $data['is_rated'] = $this->User_rating_model->is_already_exist("user_id", $result[0]['user_id'], "rated_by", $user->id);
                }
                $data['title'] = "View:-" . $result[0]['title'];
                $this->load->view('advertisement/view', $data);
            } else {
                show_404();
            }
        }
    }

    public function search() {

        if ($this->input->is_ajax_request()) {
            $data = $this->Advertisement_model->search_by();
            $data['title'] = "Search Results";
            $ads_view = $this->load->view('advertisement/search_partial', $data, TRUE);
            echo json_encode($ads_view);
        } else {
            $data = $this->Advertisement_model->search_by();
            $data['title'] = "Search Results";
            $this->load->view('advertisement/search-results', $data);
        }
    }

    public function upload_image() {
        $this->load->library('Imageuploader');
        $upload_handler = new Imageuploader(null, true);
    }

    public function delete_ad($id) {

        $this->Advertisement_model->delete_it($id);
        redirect('user/my_ads');
    }

}
