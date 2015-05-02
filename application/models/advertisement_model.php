<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author: khadim Raath
 */

class Advertisement_model extends MY_Model {

    public $table_name = 'advertisements';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public function create_ad() {
        $user = $this->session->userdata("user");
        $insert = array(
            "user_id" => $user->id,
            "title" => $this->input->post("title"),
            "price" => $this->input->post("price"),
            "location" => $this->input->post("location"),
            "category" => $this->input->post("category"),
            "image_url" => $this->input->post("image1"),
            "stock" => $this->input->post("stock"),
            "description" => $this->input->post("description"),
            "status" => 1
        );
        if ($this->Advertisement_model->create($insert)) {
            $ad_id = $this->db->insert_id();
            $images = array(
                "image1" => $this->input->post("image2"),
                "image2" => $this->input->post("image3"),
                "image3" => $this->input->post("image4"),
                "ad_id" => $ad_id,
                "status" => 1
            );
            $this->load->model('Images_model');
            $this->Images_model->create($images);
            return true;
        }
        return FALSE;
    }

    public function get_single_ad($id) {
        $where = "ad.id = " . $id . ' AND ad.status = 1';
        $join_array = array(
            array('table' => 'images img', 'condition' => 'img.ad_id = ad.id ', 'direction' => 'left'),
        );
        $select = 'ad.*,img.image1,img.image2,img.image3';
        $result = $this->Advertisement_model->fetch_join_multiple_limit(NULL, NULL, $select, $this->table_name . ' ad', $join_array, $where, "ad.id", '');
        return $result;
    }

    public function search_by() {
        $below_range = $this->input->get('below-range');
        $up_range = $this->input->get('up-range');
        $category = $this->input->get('category');
        $location = $this->input->get('location');
        $search_text = $this->input->get('search-text');
        $where = array("status" => 1);
        if (!empty($below_range)) {
            $where['price >= '] = $below_range;
            $data['below_range'] = $below_range;
        }
        if (!empty($up_range)) {
            $where['price <= '] = $up_range;
            $data['up_range'] = $up_range;
        }
        if (!empty($category)) {
            $where['category like '] = $category;
            $data['category'] = $category;
        }
        if (!empty($location)) {
            $where['location like '] = $location;
            $data['location'] = $location;
        }
        if (!empty($search_text)) {
            $where['title like '] = '%' . $search_text . '%';
            $data['search_text'] = $search_text;
        }
        $data['ads'] = $this->Advertisement_model->get_all_custom_where($where);

        return $data;
    }

    public function contact_to_buy() {
        $id = $this->input->post("ad_id");
        if (!empty($id)) {
            $result = $this->Advertisement_model->get_single_ad($id);
          //  print_r($result);die;
            if ($result && !empty($result)) {
                $ad = $result[0];
                $this->load->model('User_model');
                $user = $this->User_model->get_single("id", $ad['user_id']);
                $alt_email = $this->input->post("email");
                $alt_phone = $this->input->post("phone");

                $email_data['seller'] = $user;
                $email_data['ad'] = $ad;
                $email_data['buyer'] = $this->session->userdata("user");
                $email_data['alt_email']=  $alt_email;
                $email_data['alt_phone']=  $alt_phone;
                email_contact_to_buy($email_data);
                return true;
            }
        }
        return false;
    }

}
