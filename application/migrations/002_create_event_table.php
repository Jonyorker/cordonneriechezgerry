<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_Event_Table extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'event_id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'client_id' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_website' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_address' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_phone' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'venue_contact_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'date' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'prep_time' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'start_time' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'end_time' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'delivery_medium' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'hours_creative' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'hours_develop' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'price' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        // Shotlist Checkboxes and notes
                        'bride_before_hair' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_makeup' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_dress' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_accesories' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_fam_assist' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_jewelry' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_mirror' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_boutonniere' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_corsage' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_children' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'bride_before_notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'groom_before_hair' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_shave' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_dress' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_accesories' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_fam_assist' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_jewelry' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_mirror' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_boutonniere' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_corsage' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_children' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_hugging' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'groom_before_notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'ceremony_venue' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_special_places' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_guests_arriving' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_groom_greet' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_honored' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_parents_arrive' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_parents_seated' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_bridesmaids' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_maid_of_honor' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_flower_girl' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_groom_entering' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_crowd' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_officiant' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_altar' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_bride_entrance' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_look' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_long_shot' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_parent_giving' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_unity' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_religious' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_ring_bearer' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_vows' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_vows_closeup' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_kiss' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_applause' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_licence' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_down_aisle' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_confetti' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_congrats' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_steps' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_leaving' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'ceremony_notes' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_bride' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_honor' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_bridesmaids' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_bride_parents' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_bride_groom' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_bride_groom_parents' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_bride_groom_party' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_bride_groom_family' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_bride_groom_flower_ring' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_groom_parents' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_groom_best' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_groom_men' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'portraits_notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'reception_site' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_table' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_centerpieces' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_head' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_music' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_place_card' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_gift' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_arrival' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_greet' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_bride_groom_place' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_cake' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_decor' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_mingle' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_dinner_service' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_first_dance' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_dancing' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_dancing_parents' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_cut_cake' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_feeding' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_toast' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_bride_groom_toast' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        
                        'reception_bouquet' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_garter' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_garter_toss' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_getaway' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_leaving' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_threshold' => array(
                                'type' => 'BOOLEAN',
                                'null' => TRUE,
                        ),
                        'reception_notes' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_first_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_last_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_email' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_phone_1' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_phone_2' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_street_address' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_city' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_province' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_postal' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_emergency_name' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'second_emergency_phone_number' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'signature_1' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'signature_2' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),
                        'signature_3' => array(
                                'type' => 'TEXT',
                                'null' => TRUE,
                        ),



                        
                ));
                $this->dbforge->add_key('event_id', TRUE);
                $this->dbforge->create_table('admin_event');
        }

        public function down()
        {
                $this->dbforge->drop_table('admin_event');
        }
}