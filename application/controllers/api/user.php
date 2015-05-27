<?php

//require_once '../libraries/REST_Controller.php';
require APPPATH . '/libraries/REST_Controller.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class User extends REST_Controller {


    public function login_post() {
        $email = $this->post('email');
        $password = $this->post('password');
        if (!empty($email) && !empty($password)) {
            $this->load->model('User_model');
            $result = $this->User_model->user_login($email, $password);
            $this->response(array('data' => $result, 'message' => 'success', 'status' => true), 200);
        } else {
            $this->response(array('data' => array(), 'message' => 'Failed! some fields missing.', 'status' => true), 200);
        }
    }

}
