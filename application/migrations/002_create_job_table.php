<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Job_Table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'job_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'client_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'null' => TRUE,
                        ),
                        'job_type' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'start_date' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'end_date' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'price' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        
                ));
                $this->dbforge->add_key('job_id', TRUE);
                $this->dbforge->create_table('admin_job');
        }

        public function down()
        {
                $this->dbforge->drop_table('admin_job');
        }
}