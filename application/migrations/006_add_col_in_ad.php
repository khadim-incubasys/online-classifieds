<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_col_in_ad extends CI_Migration {

    public function up() {
        $fields = array(
            'user_id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE
            )
        );
        $this->dbforge->add_column('advertisements', $fields,'id');
        
        
    }

    public function down() {
    }

}
