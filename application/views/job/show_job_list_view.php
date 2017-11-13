<h2 class="text-center">Selectioner le travaux</h2>
<hr>

<div class="list-group">
  	<?php 
		foreach ($jobs->result() as $row) {
			$client = $this->client_model->retrieve($row->client_id);
			echo anchor('/Job/show/'.$row->job_id.'/'.$row->client_id, $client['first_name'].' '.$client['last_name'].' | '.$row->job_type.' | '.$row->start_date.' | '.$row->notes, array('class' => 'list-group-item')); 
		}
	?>
</div>