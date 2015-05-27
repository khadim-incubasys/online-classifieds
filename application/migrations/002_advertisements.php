<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_advertisements extends CI_Migration {

    public function up() {
        $table = "advertisements";

        $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
        $this->dbforge->add_field("title varchar(255) NOT NULL");
        $this->dbforge->add_field("price int(11) NOT NULL DEFAULT 0");
        $this->dbforge->add_field("location varchar(255)");
        $this->dbforge->add_field("category varchar(255)");
        $this->dbforge->add_field("image_url varchar(255)");
       
        $this->dbforge->add_field("stock int(11)");
        
         $this->dbforge->add_field("status BOOLEAN NOT NULL DEFAULT 0 ");
         $this->dbforge->add_field("description varchar(255)");
        $this->dbforge->add_field("created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

        $this->dbforge->add_key('id', TRUE);

        $this->dbforge->create_table($table, TRUE);

    }

    public function down() {
        $table = "advertisements";
        $this->dbforge->drop_table($table);
    }

}
