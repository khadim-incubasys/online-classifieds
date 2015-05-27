<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_likes_in_ad extends CI_Migration {

    public function up() {
        $fields = array(
            'likes' => array(
                'type' => 'INT',
                'constraint' => 11,
                'null' => FALSE,
                'default'=>0
            )
        );
        $this->dbforge->add_column('advertisements', $fields,'stock');
        
        
    }

    public function down() {
    }

}
