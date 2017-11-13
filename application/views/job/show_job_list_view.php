<h2 class="text-center">Select Client</h2>
<hr>
<ul class="list-group">

</ul>

<div class="list-group">
  	<?php 
		foreach ($events->result() as $row) {
			$client = $this->client_model->retrieve($row->client_id);
			echo anchor('/Event/show/'.$row->event_id.'/'.$row->client_id, $client['first_name'].' '.$client['last_name'].' | '.$row->venue_name.' '.$row->date.' | '.$row->venue_address, array('class' => 'list-group-item')); 
		}
	?>
</div>