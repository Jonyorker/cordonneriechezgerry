    <div class="container">

      <div class="starter-template">
        <h1>Cordonnerie Chez Gerry - Admin</h1>
      </div>
      <div class="row ">
	      <div class="col-md-6 well text-center">
	      <h2 class="">Gestion de client</h2>
	      	<?php echo anchor('Client/create', 'Ajoute un client', array('class' => 'btn btn-primary btn-block')); ?>
	      	<?php echo anchor('Client/list', 'Liste de clients', array('class' => 'btn btn-success btn-block')); ?>
	      </div>
	      <div class="col-md-6 well text-center">
	      <h2 class="">Gestion de taches</h2>
	      	<?php echo anchor('Job/list_open', 'Liste de taches overt', array('class' => 'btn btn-success btn-block')); ?>
	      	<?php echo anchor('Job/list_closed', 'Liste de taches fini', array('class' => 'btn btn-warning btn-block')); ?>
	      </div>
      </div>

    </div>