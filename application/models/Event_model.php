<?php
class Event_model extends CI_Model {

        function create($data)
        {
            $this->db->insert('admin_event', $data);
            $event_id = $this->db->insert_id();
            return $event_id;
        }

        function retrieve($event_id)
        {
            $query = $this->db->get_where('admin_event', array('event_id' => $event_id));
            return $query->row_array();
        }

        function list()
        {
            $query = $this->db->get('admin_event');
            return $query;
        }

        function update($event_id, $data)
        {
            $this->db->where('event_id', $event_id);
            $this->db->update('admin_event', $data);
            return;
        }

        function destroy($event_id)
        {       
            $this->db->where('event_id', $event_id);
            $this->db->delete('admin_event');
            return;
        }

}