<?php echo form_open('Job/store', array('class' => 'form-horizontal')); ?>
<fieldset>

<!-- Form Name -->
<h2 class="text-center">Ajoute Job</h2>
<hr>
<div class="row">
<div class="col-md-6">
<h3 class="text-center">Info du client</h3>
<!-- Text input-->
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
  <label class="col-md-4 control-label" for="textinput">Phone 1</label>  
  <div class="col-md-4">
  <?php echo $client['cell'];?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone 2</label>  
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
    echo form_dropdown('job_type', $options, '', 'class="form-control"');
    ?>
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Notes</label>  
  <div class="col-md-10">
  <?php echo form_textarea('notes','', array('placeholder' => 'Notes', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Prix avant taxes</label>  
  <div class='date col-md-10'>
      <?php echo form_input('price',0, array('placeholder' => 'Enter Hours', 'class' => 'form-control input-md', 'id' => 'hours_creative')); ?>
  </div>
</div>

<div class="form-group"> 
  <label class="col-md-2 control-label" for="textinput">Debut de traveau</label>   
  <div class='date col-md-10'> 
      <?php echo form_input('start_date','', array('placeholder' => 'Click to enter start time', 'class' => 'form-control input-md datepicker')); ?> 
  </div> 
</div> 

<div class="form-group"> 
  <label class="col-md-2 control-label" for="textinput">Fin de traveau</label>   
  <div class='date col-md-10'> 
      <?php echo form_input('end_date','', array('placeholder' => 'Click to enter end time', 'class' => 'form-control input-md datepicker')); ?> 
  </div> 
</div> 

</div>
</div>

<!-- Button -->
<?php echo form_hidden('client_id', $client['client_id']);?> 
<div class="form-group">
  <div class="col-md-4 col-md-push-4">
    <?php echo form_submit('', 'Crée Job', array('class' => 'btn btn-success btn-block')); ?>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>
