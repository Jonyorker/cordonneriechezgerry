<h2 class="text-center">Select Client</h2>
<hr>
<ul class="list-group">

</ul>

<div class="list-group">
  	<?php 
		foreach ($clients->result() as $row) {
			echo anchor('/Client/show/'.$row->client_id, $row->first_name.' '.$row->last_name.' | '.$row->street_address.', '.$row->city.', '.$row->postal, array('class' => 'list-group-item')); 
		}
	?>
</div>