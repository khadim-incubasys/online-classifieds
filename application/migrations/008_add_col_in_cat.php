<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_add_col_in_cat extends CI_Migration {

    public function up() {
        $fields = array(
            'image_url' => array(
                'type' => 'varchar',
                'constraint' => 255,
                'null' => FALSE
            )
        );
        $this->dbforge->add_column('categories', $fields,'title');
        
        
    }

    public function down() {
    }

}
