<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author: khadim Raath
 */

class Friends_model extends MY_Model {

    public $table_name = 'friends';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }

    public function get_friends() {
        $user = $this->session->userdata("user");
        if ($user) {
            $where = "f.user_id = " . $user->id;
            $join_array = array(
                array('table' => 'users u', 'condition' => 'u.id = f.friend_id ', 'direction' => 'left')
            );
            $select = 'u.*';
            $result = $this->Friends_model->fetch_join_multiple_limit(NULL, NULL, $select, "friends f", $join_array, $where, "f.id", '');
            return $result;
        } else {
            return FALSE;
        }
    }

}
