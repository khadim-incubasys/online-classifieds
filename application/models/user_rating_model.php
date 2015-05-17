<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author: khadim Raath
 */

class User_rating_model extends MY_Model {

    public $table_name = 'user_ratings';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public function rate_it() {
        $user = $this->session->userdata("user");
        $user_id = $this->input->post('user_id');
        $insert = array(
            "user_id" => $user_id,
            "rated_by" => $user->id,
            "stars" => $this->input->post('stars'),
            "ad_id" => $this->input->post('ad_id'),
            "status" => 1
        );
//        if ($this->User_rating_model->is_already_exist("user_id", $user_id, "rated_by", $user->id)) {
//            return $this->update("user_id", $user_id, $insert, "rated_by", $user->id);
//        } else {
            return $this->create($insert);
       // }
    }

}
