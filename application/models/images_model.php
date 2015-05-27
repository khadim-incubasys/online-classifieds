<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * author: khadim Raath
 */

class Images_model extends MY_Model {

    public $table_name = 'images';
    public $primary_key = 'id';

    public function __construct() {
        parent::__construct();
    }
}
