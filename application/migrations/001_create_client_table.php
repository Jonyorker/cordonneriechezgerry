<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Client_Table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'client_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'first_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'last_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'email' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'phone_1' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'phone_2' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'street_address' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'city' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'province' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'postal' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'emergency_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'emergency_phone_number' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                ));
                $this->dbforge->add_key('client_id', TRUE);
                $this->dbforge->create_table('admin_client');
        }

        public function down()
        {
                $this->dbforge->drop_table('admin_client');
        }
}