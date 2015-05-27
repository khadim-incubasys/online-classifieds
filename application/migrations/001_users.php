<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_users extends CI_Migration {

    public function up() {
        $table = "users";

        $this->dbforge->add_field("id int(11) unsigned NOT NULL AUTO_INCREMENT");
        $this->dbforge->add_field("name varchar(255) NOT NULL");
        $this->dbforge->add_field("email varchar(255) NOT NULL");
        $this->dbforge->add_field("password varchar(255) NOT NULL");
        $this->dbforge->add_field("token varchar(255) NOT NULL");
        $this->dbforge->add_field("status BOOLEAN NOT NULL DEFAULT 0 ");
        $this->dbforge->add_field("image_url varchar(255)");
        $this->dbforge->add_field("phone varchar(255)");
        $this->dbforge->add_field("country varchar(255)");
        $this->dbforge->add_field("city varchar(255)");
        $this->dbforge->add_field("address varchar(255)");

        $this->dbforge->add_field("created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");

        $this->dbforge->add_key('id', TRUE);

        $this->dbforge->create_table($table, TRUE);

        $this->db->query('ALTER TABLE ' . $table . ' ADD UNIQUE INDEX (email)');
    }

    public function down() {
        $table = "users";
        $this->dbforge->drop_table($table);
    }

}
