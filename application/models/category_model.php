<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author: khadim Raath
 */

class Category_model extends MY_Model {

    public $table_name = 'categories';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public function seed() {
        $categories = array('Laptops', 'Mobiles', 'Cats', 'Dogs', 'LEDs', 'Electronics', 'Assesories-m', 'Asseories-l');
        $batch_array = array();
        for ($id = 0; $id < count($categories); $id++) {
            if (!$this->is_already_exist("id", $id + 1)) {
                $insert = array(
               "id" => $id + 1,
                "title" => $categories[$id],
                'status' => 1
                );
                array_push($batch_array, $insert);
            }
        }
            if (!empty($batch_array)) {
                $this->db->insert_batch($this->table_name, $batch_array);
            }
    }

}
