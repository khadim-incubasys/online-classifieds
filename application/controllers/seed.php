<?php

/*
 * Khadim
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Seed extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    public function index(){
        $this->seed_categarories();
        $this->seed_locations();
    }

        public function seed_categarories() {
        $this->load->model('Category_model');
        if ($this->Category_model->seed()) {
            echo "Catehories Seeded <br>";
        } else {
            echo "Already catehories seeded <br>";
        }
    }

    public function seed_locations() {
        $this->load->model('Location_model');
        if ($this->Location_model->seed()) {
            echo "Locations Seeded <br>";
        } else {
            echo "Already locations seeded <br>";
        }
    }
}
