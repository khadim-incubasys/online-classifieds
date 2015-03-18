<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* 
 * @Khadim Raath
 */

class Category extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index() {
        $data['title']="cat";
        $this->load->view('category/category',$data);
    }
    public function view($category) {
        $data['title']=$category;
        $this->load->view('category/category',$data);
    }
}
