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
        $data['ads']=  $this->Advertisement_model->get_all_custom_where(array("status"=>1));
        $this->load->view('advertisement/index', $data);
    }
    public function contact_us(){
        $data['title'] = SITE_TITLE;
        $this->load->view('contact-us', $data);
    }
    public function about_us(){
        $data['title'] = SITE_TITLE;
        $this->load->view('about-us', $data);
    }
     public function test() {
        $data['title'] = "test page";
        $this->load->view('test', $data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */