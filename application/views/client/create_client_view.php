
<?php echo form_open('Client/store', array('class' => 'form-horizontal')); ?>
<fieldset>

<!-- Form Name -->
<h2 class="text-center">Ajoute un client</h2>
<hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Premier nom</label>  
  <div class="col-md-4">
  <?php echo form_input('first_name','', array('placeholder' => 'Premier nom', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Dernier nom</label>  
  <div class="col-md-4">
  <?php echo form_input('last_name','', array('placeholder' => 'Dernier nom', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Courriel</label>  
  <div class="col-md-4">
  <?php echo form_input('email','', array('placeholder' => 'Courriel', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Céllulaire</label>  
  <div class="col-md-4">
  <?php echo form_input('cell','', array('placeholder' => 'Céllulaire', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Téléphone</label>  
  <div class="col-md-4">
  <?php echo form_input('phone','', array('placeholder' => 'Téléphone', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Adresse</label>  
  <div class="col-md-4">
  <?php echo form_input('street_address','', array('placeholder' => 'Adresse', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Ville</label>  
  <div class="col-md-4">
  <?php echo form_input('city','', array('placeholder' => 'Ville', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Province</label>  
  <div class="col-md-4">
  <?php echo form_input('province','', array('placeholder' => 'Province', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Code Postale</label>  
  <div class="col-md-4">
  <?php echo form_input('postal','', array('placeholder' => 'Code Postale', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4 col-md-push-4">
    <?php echo form_submit('', 'Créé Client', array('class' => 'btn btn-primary btn-block')); ?>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>
