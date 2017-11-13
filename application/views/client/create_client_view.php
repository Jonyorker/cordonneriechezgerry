
<?php echo form_open('Client/store', array('class' => 'form-horizontal')); ?>
<fieldset>

<!-- Form Name -->
<h2 class="text-center">Add a client</h2>
<hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <?php echo form_input('first_name','', array('placeholder' => 'First Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <?php echo form_input('last_name','', array('placeholder' => 'Last Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <?php echo form_input('email','', array('placeholder' => 'Email', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone 1</label>  
  <div class="col-md-4">
  <?php echo form_input('phone_1','', array('placeholder' => 'Phone 1', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone 2</label>  
  <div class="col-md-4">
  <?php echo form_input('phone_2','', array('placeholder' => 'Phone 2', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Street Address</label>  
  <div class="col-md-4">
  <?php echo form_input('street_address','', array('placeholder' => 'Street Address', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <?php echo form_input('city','', array('placeholder' => 'City', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Province</label>  
  <div class="col-md-4">
  <?php echo form_input('province','', array('placeholder' => 'province', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Postal Code</label>  
  <div class="col-md-4">
  <?php echo form_input('postal','', array('placeholder' => 'Postal Code', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact Name</label>  
  <div class="col-md-4">
  <?php echo form_input('emergency_name','', array('placeholder' => 'Emergency Contact Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact Phone</label>  
  <div class="col-md-4">
  <?php echo form_input('emergency_phone_number','', array('placeholder' => 'Emergency Contact Phone', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4 col-md-push-4">
    <?php echo form_submit('', 'Create Client', array('class' => 'btn btn-primary btn-block')); ?>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>
