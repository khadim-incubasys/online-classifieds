<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_user_ratings extends CI_Migration {

    public function up() {
        $table = "user_ratings";

        $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
        $this->dbforge->add_field("user_id int(11) unsigned NOT NULL");
        $this->dbforge->add_field("rated_by int(11) unsigned NOT NULL");
        $this->dbforge->add_field("stars int(11) unsigned NOT NULL");
        
        $this->dbforge->add_field("ad_id int(11) unsigned NOT NULL");
        
         $this->dbforge->add_field("status BOOLEAN NOT NULL DEFAULT 0 ");

        $this->dbforge->add_field("created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

        $this->dbforge->add_key('id', TRUE);

        $this->dbforge->create_table($table, TRUE);

    }

    public function down() {
        $table = "user_ratings";
        $this->dbforge->drop_table($table);
    }

}
