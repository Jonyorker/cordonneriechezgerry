
<?php echo form_open('Client/update/'.$query['client_id'], array('class' => 'form-horizontal')); ?>
<fieldset>
<!-- Form Name -->
<h2 class="text-center">Client ID # <?php echo $query['client_id'] ?> </h2>
<hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <?php echo form_input('first_name',$query['first_name'], array('placeholder' => 'First Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <?php echo form_input('last_name',$query['last_name'], array('placeholder' => 'Last Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <?php echo form_input('email',$query['email'], array('placeholder' => 'Email', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone 1</label>  
  <div class="col-md-4">
  <?php echo form_input('phone_1',$query['phone_1'], array('placeholder' => 'Phone 1', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone 2</label>  
  <div class="col-md-4">
  <?php echo form_input('phone_2',$query['phone_2'], array('placeholder' => 'Phone 2', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Street Address</label>  
  <div class="col-md-4">
  <?php echo form_input('street_address',$query['street_address'], array('placeholder' => 'Street Address', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <?php echo form_input('city',$query['city'], array('placeholder' => 'City', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Province</label>  
  <div class="col-md-4">
  <?php echo form_input('province',$query['province'], array('placeholder' => 'province', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Postal Code</label>  
  <div class="col-md-4">
  <?php echo form_input('postal',$query['postal'], array('placeholder' => 'Postal Code', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact Name</label>  
  <div class="col-md-4">
  <?php echo form_input('emergency_name',$query['emergency_name'], array('placeholder' => 'Emergency Contact Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact Phone</label>  
  <div class="col-md-4">
  <?php echo form_input('emergency_phone_number',$query['emergency_phone_number'], array('placeholder' => 'Emergency Contact Phone', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4 col-md-push-4">
    <?php echo form_submit('', 'Update Information', array('class' => 'btn btn-primary btn-block')); ?>
  </div>
</div>

</fieldset>

<?php echo form_close(); ?>
<hr>
<h2 class="text-center">Other options</h2>
<hr>
  <div class="col-md-4 col-md-push-4">
    <?php echo anchor('Event/create/'.$query['client_id'], 'Add Event', array('class' => 'btn btn-success btn-block')); ?>
    <hr>
    <?php echo anchor('Client/destroy/'.$query['client_id'], 'Delete Client', array('class' => 'btn btn-danger btn-block')); ?>
  </div>
