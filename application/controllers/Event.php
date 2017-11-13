<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	public function index()
	{
		redirect('/Event/create');
	}

	public function create($client_id)
	{
		$data['client'] = $this->client_model->retrieve($client_id);
		// Load view
		$data['main_content'] = 'event/create_event_view';
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
		$event_id = $this->event_model->create($data);

		// Redirect
		redirect('/Event/show/'.$event_id.'/'.$data['client_id']);
	}

	public function list()
	{
		// Get list of events
        $data['events'] = $this->event_model->list();

        // Load views
		$data['main_content'] = 'event/show_event_list_view';
        $this->load->view('template/body_view', $data);
	}

	public function show($event_id, $client_id)
	{
		// Get event info
		$data['event'] = $this->event_model->retrieve($event_id);
		$data['client'] = $this->client_model->retrieve($client_id);

		// Load views
		$data['main_content'] = 'event/show_event_view';
        $this->load->view('template/body_view', $data);
	}

	public function update($event_id, $client_id)
	{
		// Get form values
		foreach($_POST as $key => $val)  
	 	    {  
	 	        $data[$key] = $this->input->post($key);  
	 	    }

	 	// Store changes
		$this->event_model->update($event_id, $data);

		// Redirect
		redirect('/Event/show/'.$event_id.'/'.$client_id);
	}

	public function destroy($event_id)
	{
		// Destroy Event
		$this->event_model->destroy($event_id);

		// Return to home
		redirect('');
	}

}
