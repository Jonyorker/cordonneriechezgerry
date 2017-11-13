<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job extends CI_Controller {

	public function index()
	{
		redirect('/Job/create');
	}

	public function create($client_id)
	{
		$data['client'] = $this->client_model->retrieve($client_id);
		// Load view
		$data['main_content'] = 'job/create_job_view';
        $this->load->view('template/body_view', $data);
	}

	public function store()
	{
		// Get form values
		foreach($_POST as $key => $val)  
	 	    {  
	 	        $data[$key] = $this->input->post($key);  
	 	    }

		// Save quiz in DB
		$job_id = $this->job_model->create($data);

		// Redirect
		redirect('/Job/show/'.$job_id.'/'.$data['client_id']);
	}

	public function list_open()
	{
		// Get list of jobs
        $data['jobs'] = $this->job_model->list_open();

        // Load views
		$data['main_content'] = 'job/show_job_list_view';
        $this->load->view('template/body_view', $data);
	}

	public function list_closed()
	{
		// Get list of jobs
        $data['jobs'] = $this->job_model->list_closed();

        // Load views
		$data['main_content'] = 'job/show_job_list_view';
        $this->load->view('template/body_view', $data);
	}

	public function show($job_id, $client_id)
	{
		// Get job info
		$data['job'] = $this->job_model->retrieve($job_id);
		$data['client'] = $this->client_model->retrieve($client_id);

		// Load views
		$data['main_content'] = 'job/show_job_view';
        $this->load->view('template/body_view', $data);
	}

	public function update($job_id, $client_id)
	{
		// Get form values
		foreach($_POST as $key => $val)  
	 	    {  
	 	        $data[$key] = $this->input->post($key);  
	 	    }

	 	// Store changes
		$this->job_model->update($job_id, $data);

		// Redirect
		redirect('/Job/show/'.$job_id.'/'.$client_id);
	}

	public function destroy($job_id)
	{
		// Destroy Job
		$this->job_model->destroy($job_id);

		// Return to home
		redirect('');
	}

}
