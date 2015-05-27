<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author: khadim Raath
 */

class Location_model extends MY_Model {

    public $table_name = 'locations';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public function seed() {
        $locations = array('Lahore', 'Islamabad', 'Karachi', 'Peshawar', 'Multan', 'Faisalabad', 'Bahawalnagar', 'Kasur');
        $batch_array = array();
        for ($id = 0; $id < count($locations); $id++) {
            if (!$this->is_already_exist("id", $id + 1)) {
                $insert = array(
                    "id" => $id + 1,
                    "title" => $locations[$id],
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
