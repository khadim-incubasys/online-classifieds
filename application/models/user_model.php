<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author: khadim Raath
 */

class User_model extends MY_Model {

    public $table_name = 'users';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
        $this->load->helper("random_password_helper");
    }

    public function create_user() {
        $return = array();
        if ($this->form_validation->run("create_user")) {
            $email = $this->input->post('email');
            if (!$this->is_already_exist("email", $email)) {
                $token = md5(uniqid() . microtime() . rand());
                $password = generatePassword();
                $insert = array(
                    "name" => $this->input->post('name'),
                    'token' => $token,
                    'status' => 0,
                    "password" => $password,
                    "email" => $email,
                    "country" => $this->input->post('country'),
                    "city" => $this->input->post('city'),
                    "address" => $this->input->post('address'),
                    "phone" => $this->input->post('phone')
                );
                if ($this->User_model->create($insert)) {
                    send_email($recipient);
                    return array("result" => TRUE, "message" => "Registered Successfully");
                } else {
                    return array("result" => FALSE, "message" => "Something went wrong");
                }
            } else {
                return array("result" => FALSE, "message" => "The Email field must contain a unique value.");
            }
        } else {
            return array("result" => FALSE, "message" => "Invalid or some fields missing");
        }
    }

    public function user_login() {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $this->db->where("email", $email);
        $this->db->where("password", $password);
        $db_result = $this->db->get($this->table_name);
        
        if ($db_result && !empty($db_result)) {
            
            if ($db_result->num_rows() == 1) {
                $user = $db_result->row();
                $this->session->set_userdata("user", $user);
                $this->session->set_userdata('logged_in', TRUE);
                return array("result" => true, "message" => "Logged in successfully");
            }
            else{
                return array("result" => false, "message" => "Something went wrong");
            }
        } else {
            return array("result" => FALSE, "message" => "Invalid or some fields missing");
        }
    }

}
