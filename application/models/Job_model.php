<?php
class Job_model extends CI_Model {

        function create($data)
        {
            $this->db->insert('admin_job', $data);
            $job_id = $this->db->insert_id();
            return $job_id;
        }

        function retrieve($job_id)
        {
            $query = $this->db->get_where('admin_job', array('job_id' => $job_id));
            return $query->row_array();
        }

        function list_open()
        {
            $query = $this->db->get_where('admin_job', array('end_date' => ''));
            return $query;
        }
        function list_closed()
        {
            $query = $this->db->get_where('admin_job', array('end_date !=' => NULL or ''));
            return $query;
        }

        function update($job_id, $data)
        {
            $this->db->where('job_id', $job_id);
            $this->db->update('admin_job', $data);
            return;
        }

        function destroy($job_id)
        {       
            $this->db->where('job_id', $job_id);
            $this->db->delete('admin_job');
            return;
        }

}