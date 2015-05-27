<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_categories extends CI_Migration {

    public function up() {
        $table = "categories";

        $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
        $this->dbforge->add_field("title varchar(255) NOT NULL");
        
         $this->dbforge->add_field("status BOOLEAN NOT NULL DEFAULT 0 ");
         
        $this->dbforge->add_field("created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

        $this->dbforge->add_key('id', TRUE);

        $this->dbforge->create_table($table, TRUE);

    }

    public function down() {
        $table = "categories";
        $this->dbforge->drop_table($table);
    }

}
