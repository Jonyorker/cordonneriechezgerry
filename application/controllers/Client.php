<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	public function index()
	{
		redirect('/Client/create');
	}

	public function create()
	{
		// Load view
		$data['main_content'] = 'client/create_client_view';
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
		$client_id = $this->client_model->create($data);

		// Redirect
		redirect('/Client/show/'.$client_id);
	}

	public function list()
	{
		// Get list of clients
        $data['clients'] = $this->client_model->list();

        // Load views
		$data['main_content'] = 'client/show_client_list_view';
        $this->load->view('template/body_view', $data);
	}

	public function show($client_id)
	{
		// Get client info
		$data['query'] = $this->client_model->retrieve($client_id);

		// Load views
		$data['main_content'] = 'client/show_client_view';
        $this->load->view('template/body_view', $data);
	}

	public function update($client_id)
	{
		// Get form values
		foreach($_POST as $key => $val)  
	 	    {  
	 	        $data[$key] = $this->input->post($key);  
	 	    }

	 	// Store changes
		$this->client_model->update($client_id, $data);

		// Redirect
		redirect('/Client/show/'.$client_id);
	}

	public function destroy($client_id)
	{
		// Destroy Client
		$this->client_model->destroy($client_id);

		// Return to home
		redirect('');
	}

}
