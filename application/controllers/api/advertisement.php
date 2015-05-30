<?php

//require_once '../libraries/REST_Controller.php';
require APPPATH . '/libraries/REST_Controller.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class advertisement extends REST_Controller {


    public function view_get() {
        $id =  $this->get('id');
        $this->load->model("Advertisement_model");
        $result = $this->Advertisement_model->get_single_ad($id);
        if ($result && !empty($result)) {
            $data['ad'] = $result[0];
            $this->load->model('User_model');
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
            $data['is_rated']=TRUE;
            if (is_logged_in()) {
                $user = $this->session->userdata("user");
                if ($user->id != $result[0]['user_id'])
                    $data['is_rated'] = $this->User_rating_model->is_already_exist("ad_id", $result[0]['id'], "rated_by", $user->id);
            }

            $data['title'] = "View:-" . $result[0]['title'];
             $this->response(array('data' => $data, 'message' => 'success', 'status' => true), 200);
        } else {
            $this->response(array('data' =>"", 'message' => 'Ad Not Found!', 'status' => FALSE), 200);
        }
    }

}
