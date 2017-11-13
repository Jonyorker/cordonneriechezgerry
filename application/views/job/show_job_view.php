<?php echo form_open('Job/update/'.$job['job_id'].'/'.$client['client_id'], array('class' => 'form-horizontal')); ?>
<fieldset>

<!-- Form Name -->
<h2 class="text-center">Add Job</h2>
<hr>
<div class="row">
<div class="col-md-6">
<h3 class="text-center">Info du client</h3>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <?php echo $client['first_name']; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <?php echo $client['last_name'];?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <?php echo $client['email'];?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Cell</label>  
  <div class="col-md-4">
  <?php echo $client['cell'];?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Téléphone</label>  
  <div class="col-md-4">
  <?php echo $client['phone'];?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Street Address</label>  
  <div class="col-md-4">
  <?php echo $client['street_address']; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <?php echo $client['city']; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Province</label>  
  <div class="col-md-4">
  <?php echo $client['province']; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Postal Code</label>  
  <div class="col-md-4">
  <?php echo $client['postal']; ?>
  </div>
</div>
</div>

<div class="col-md-6">
<h3 class="text-center">Info de Traveaux</h3>
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Type de travail</label>  
  <div class="col-md-10">
  <?php 
    $options = array(
      'semelle' => 'Semelle',
      'couture' => 'Couture',
      'escalade' => 'Escalade',
      'autre' => 'Autre'
      );
    echo form_dropdown('job_type', $options, $job['job_type'], 'class="form-control"');
    ?>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Notes</label>  
  <div class="col-md-10">
  <?php echo form_textarea('notes',$job['notes'], array('placeholder' => 'Notes', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-2 control-label" for="textinput">Debut de traveau</label>   
  <div class='date col-md-10'> 
      <?php echo form_input('start_date',$job['start_date'], array('placeholder' => 'Click to enter start time', 'class' => 'form-control input-md datepicker')); ?> 
  </div> 
</div> 

<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Prix avant taxes</label>  
  <div class='date col-md-10'>
      <?php echo form_input('price',$job['price'], array('placeholder' => 'Enter Hours', 'class' => 'form-control input-md', 'id' => 'hours_creative')); ?>
  </div>
</div>
<div class="form-group"> 
  <label class="col-md-2 control-label" for="textinput">Fin de traveau</label>   
  <div class='date col-md-10'> 
      <?php echo form_input('end_date',$job['end_date'], array('placeholder' => 'Click to enter end time', 'class' => 'form-control input-md datepicker')); ?> 
  </div> 
</div> 

</div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4 col-md-push-4">
    <?php echo form_submit('', 'Update Information', array('class' => 'btn btn-primary btn-block')); ?>
  </div>
</div>

<div class="form-group">
  <div class="col-md-4 col-md-push-4">
    <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#myModal">Contact le client</button>
  </div>
</div>

<div class="form-group">
  <div class="col-md-4 col-md-push-4">
    <button type="button" class="btn btn-success btn-block" onclick="window.print();">Imprime billet</button>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>
<hr>
<h2 class="text-center">Autre options</h2>
<hr>
  <div class="col-md-4 col-md-push-4">
    <?php echo anchor('Job/destroy/'.$job['job_id'], 'Supprimier le traveau', array('class' => 'btn btn-danger btn-block')); ?>
  </div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Contact le client</h4>
        </div>
        <?php if (strlen($client['cell']) >= 1): ?>
          <div class="modal-body">
          Cell : <?php echo $client['cell']; ?> <a class="btn btn-default" href="<?php echo "tel:".$client['cell']; ?>">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </a>
        </div>
        <?php endif ?>
        <?php if (strlen($client['phone']) >= 1): ?>
          <div class="modal-body">
          Tél : <?php echo $client['phone']; ?> <a class="btn btn-default" href="<?php echo "tel:".$client['phone']; ?>">
            <i class="fa fa-phone" aria-hidden="true"></i>
          </a>
        </div>
        <?php endif ?>
        <?php if (strlen($client['email']) >= 1): ?>
          <div class="modal-body">
          Courriel : <?php echo $client['email']; ?> <a class="btn btn-default" href="<?php echo "mailto:".$client['email']; ?>">
            <i class="fa fa-envelope" aria-hidden="true"></i>
          </a>
        </div>
        <?php endif ?>
        
        
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- printable section -->
  <div class="print">
    <div class="row">
      <div class="col-md-12">
        <?php echo $client['first_name']; ?>, <?php echo $client['last_name']; ?>
        <br>
        <?php echo $job['job_type'];?>
        <br>
        <?php echo $job['notes'];?>
      </div>
    </div>
  </div>