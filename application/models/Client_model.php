<?php
class Client_model extends CI_Model {

        function create($data)
        {
            $this->db->insert('admin_client', $data);
            $client_id = $this->db->insert_id();
            return $client_id;
        }

        function retrieve($client_id)
        {
            $query = $this->db->get_where('admin_client', array('client_id' => $client_id));
            return $query->row_array();
        }

        function list()
        {
            $query = $this->db->get('admin_client');
            return $query;
        }

        function update($client_id, $data)
        {
            $this->db->where('client_id', $client_id);
            $this->db->update('admin_client', $data);
            return;
        }

        function destroy($client_id)
        {       
            $this->db->where('client_id', $client_id);
            $this->db->delete('admin_client');
            return;
        }

}