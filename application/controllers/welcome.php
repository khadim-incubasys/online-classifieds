<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = "Advertisements";
        $this->load->model('Advertisement_model');
        $data['ads'] = $this->Advertisement_model->get_all_custom_where(array("status" => 1));
        $this->load->view('advertisement/index', $data);
    }

    public function contact_us() {
        if ($this->input->server('REQUEST_METHOD') != 'POST') {
            $data['title'] = "Contact Us";
            $this->load->view('contact-us', $data);
        } else {
            $email_data['email'] = $this->input->post('email');
            $email_data['name'] = $this->input->post('name');
            $email_data['phone'] = $this->input->post('phone');
            $email_data['message'] = $this->input->post('message');
            $user = $this->session->userdata("user");
            $email_data['cc'] = $user->email;
            email_contact_us($email_data);
            redirect('welcome/contact_us_success');
        }
    }

    public function contact_us_success() {
        $data['title'] = "Contact us success";
        $this->load->view('contact-us-success', $data);
    }

    public function about_us() {
        $data['title'] = "About Us";
        $this->load->view('about-us', $data);
    }

    public function test() {
        $data['title'] = "test page";
        $this->load->view('test', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */