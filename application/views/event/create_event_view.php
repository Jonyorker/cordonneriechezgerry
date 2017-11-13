<!--   <div class="row">
  <div class="col-xs-6 pull-right">
  <img src="<?php echo base_url();?>/public/images/logo.png" class="img-responsive">
  <div class="col-xs-6">
  <p>Jonathan York<br>
  <i class="fa fa-envelope" aria-hidden="true"></i> jon@jonscottphotography.com<br>
  <i class="fa fa-phone" aria-hidden="true"></i> 819-743-8138
  </p>
  </div>
  <div class="col-xs-6">
  <p>Scott Posselwhite<br>
  <i class="fa fa-envelope" aria-hidden="true"></i> scott@jonscottphotography.com<br>
  <i class="fa fa-phone" aria-hidden="true"></i> 613-413-2978
  </p>
  </div>
  </div>
  </div> -->
<?php echo form_open('Event/store', array('class' => 'form-horizontal')); ?>
<fieldset>

<!-- Form Name -->
<h2 class="text-center">Add Event</h2>
<hr>
<div class="row">
<div class="col-md-6">
<h3 class="text-center">Venue Information</h3>
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Name of Venue</label>  
  <div class="col-md-10">
  <?php echo form_input('venue_name','', array('placeholder' => 'Venue Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Website</label>  
  <div class="col-md-10">
  <?php echo form_input('venue_website','', array('placeholder' => 'Website', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Address</label>  
  <div class="col-md-10">
  <?php echo form_input('venue_address','', array('placeholder' => 'Address', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Phone Number</label>  
  <div class="col-md-10">
  <?php echo form_input('venue_phone','', array('placeholder' => 'Phone Number', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Contact Name</label>  
  <div class="col-md-10">
  <?php echo form_input('venue_contact_name','', array('placeholder' => 'Contact Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Date</label>  
  <div class='date col-md-10'>
      <?php echo form_input('date','', array('placeholder' => 'Click to enter start time', 'class' => 'form-control input-md datepicker')); ?>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Prep Time</label>  
  <div class='date col-md-10'>
      <?php echo form_input('prep_time','', array('placeholder' => 'Click to enter start time', 'class' => 'form-control input-md timepicker')); ?>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Start Time</label>  
  <div class='date col-md-10'>
      <?php echo form_input('start_time','', array('placeholder' => 'Click to enter start time', 'class' => 'form-control input-md timepicker')); ?>
  </div>
</div>
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">End Time</label>  
  <div class='date col-md-10'>
      <?php echo form_input('end_time','', array('placeholder' => 'Click to enter end time', 'class' => 'form-control input-md timepicker')); ?>
  </div>
</div>
</div>

<div class="col-md-6">
<h3 class="text-center">Notes</h3>
<div class="form-group">
  <label class="col-md-2 control-label" for="textinput">Delivery Medium</label>  
  <div class="col-md-10">
  <?php 
    $options = array(
      'CLOUD' => 'CLOUD',
      'USB' => 'USB (Subject to additional fees)',
      );
    echo form_dropdown('delivery_medium', $options, '', 'class="form-control"');
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
</div>

<div class="col-md-6 pull-right">
<h3 class="text-center">Pricing</h3>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Total Hours Creative</label>  
  <div class='date col-md-4'>
      <?php echo form_input('hours_creative',0, array('placeholder' => 'Enter Hours', 'class' => 'form-control input-md', 'id' => 'hours_creative')); ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Total Hours Develop</label>  
  <div class='date col-md-4'>
      <?php echo form_input('hours_develop',0, array('placeholder' => 'Enter Hours', 'class' => 'form-control input-md', 'id' => 'hours_develop')); ?>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Total Price before taxes</label>  
  <div class='date col-md-4'>
      <?php echo form_input('price',0, array('placeholder' => 'Price will show after hours are added', 'class' => 'form-control input-md', 'id' => 'price')); ?>
  </div>
</div>
</div>

</div>



<hr>

<h3 class="text-center">Client Information</h3>
<div class="row">
  <div class="col-md-6">
    <h4 class="text-center">Primary client</h4>
<hr>

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
  <?php echo $client['phone_1'];?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone 2</label>  
  <div class="col-md-4">
  <?php echo $client['phone_2'];?>
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

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact Name</label>  
  <div class="col-md-4">
  <?php echo $client['emergency_name']; ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact Phone</label>  
  <div class="col-md-4">
  <?php echo $client['emergency_phone_number']; ?>
  </div>
</div>

  </div>
  
  <div class="col-md-6">
    <h4 class="text-center">Secondary client</h4>
<hr>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">First Name</label>  
  <div class="col-md-4">
  <?php echo form_input('second_first_name','', array('placeholder' => 'First Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Last Name</label>  
  <div class="col-md-4">
  <?php echo form_input('second_last_name','', array('placeholder' => 'Last Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <?php echo form_input('second_email','', array('placeholder' => 'Email', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone 1</label>  
  <div class="col-md-4">
  <?php echo form_input('second_phone_1','', array('placeholder' => 'Phone 1', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Phone 2</label>  
  <div class="col-md-4">
  <?php echo form_input('second_phone_2','', array('placeholder' => 'Phone 2', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Street Address</label>  
  <div class="col-md-4">
  <?php echo form_input('second_street_address','', array('placeholder' => 'Street Address', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">City</label>  
  <div class="col-md-4">
  <?php echo form_input('second_city','', array('placeholder' => 'City', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Province</label>  
  <div class="col-md-4">
  <?php echo form_input('second_province','', array('placeholder' => 'province', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Postal Code</label>  
  <div class="col-md-4">
  <?php echo form_input('second_postal','', array('placeholder' => 'Postal Code', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact Name</label>  
  <div class="col-md-4">
  <?php echo form_input('second_emergency_name','', array('placeholder' => 'Emergency Contact Name', 'class' => 'form-control input-md')); ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Emergency Contact Phone</label>  
  <div class="col-md-4">
  <?php echo form_input('second_emergency_phone_number','', array('placeholder' => 'Emergency Contact Phone', 'class' => 'form-control input-md')); ?>
  </div>
</div>

  </div>
</div>

<hr>
<h3 class="text-center">Shotlist</h3>

<div class="row">
  <h4 class="text-center">Before the Ceremony</h4>
  <div class="col-md-6">
    <h5 class="text-center">Bride</h5>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Hair Styling</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_hair', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Make up application</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_makeup', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">The dress (on a hanger, draped over a chair, etc)</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_dress', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bridal Accesories (Shoes, veil, Garter, Rings, Etc)</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_accesories', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Family/Friends assisting bride</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_fam_assist', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Putting on jewelry</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_jewelry', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Looking into mirror</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_mirror', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Pinning boutonniere on father</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_boutonniere', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Pinning corsage on mother</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_corsage', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Children with Bride</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_children', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Hugging family and friends</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('bride_before_hugging', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Other</label>
      <div class='date col-md-6'>
        <?php echo form_textarea('bride_before_notes','', array('placeholder' => 'Notes', 'class' => 'form-control input-md')); ?>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <h5 class="text-center">Groom</h5>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Hair Styling</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_hair', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Shaving / Beard Trimming</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_shave', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">The suit (on a hanger, draped over a chair, etc)</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_dress', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Groom Accesories (Tie, Flask, Suspenders, Etc)</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_accesories', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Family/Friends assisting groom</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_fam_assist', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Putting on jewelry</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_jewelry', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Looking into mirror</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_mirror', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Pinning boutonniere on father</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_boutonniere', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Pinning corsage on mother</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_corsage', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Children with groom</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_children', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Hugging family and friends</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('groom_before_hugging', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Other</label>
      <div class='date col-md-6'>
        <?php echo form_textarea('groom_before_notes','', array('placeholder' => 'Notes', 'class' => 'form-control input-md')); ?>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <h4 class="text-center">At the Ceremony</h4>
  <div class="col-md-6">
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Outside the wedding venue</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_venue', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Special places at the wedding venue</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_special_places', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Guest arriving</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_guests_arriving', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Groom greeting guest</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_groom_greet', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Honored family members being seated</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_honored', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Parents arriving</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_parents_arrive', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Parents being seated</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_parents_seated', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bridesmaids entering</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_bridesmaids', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Maid of honor entering</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_maid_of_honor', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Flower girl entering</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_flower_girl', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Groom and his men entering</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_groom_entering', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Crowd shot of guests</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('ceremony_crowd', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Officiant</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('ceremony_officiant', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Altar</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('ceremony_altar', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride making her entrance</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('ceremony_bride_entrance', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">The look</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_look', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Long shot from back of bride to parent</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('ceremony_long_shot', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Parent giving away bride</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('ceremony_parent_giving', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Unity ceremonies or memorials</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('ceremony_unity', TRUE, FALSE); ?>
      </div>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Religious or cultural ceremony</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_religious', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Ring bearer</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_ring_bearer', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Exchanging vows</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_vows', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Exchanging vows close-up</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_vows_closeup', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">The kiss</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_kiss', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Crowd Applause</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_applause', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Marriage Licence</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('ceremony_licence', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom walking up the aisle</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_down_aisle', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom on steps outside</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_steps', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Throwing of confetti or birdseed</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_confetti', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom being congratulated</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_congrats', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom leaving the ceremony</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('ceremony_leaving', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Notes</label>
      <div class='date col-md-6'>
        <?php echo form_textarea('ceremony_notes','', array('placeholder' => 'Notes', 'class' => 'form-control input-md')); ?>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <h4 class="text-center">Portraits</h4>
  <div class="col-md-6">
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride, Full length</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_bride', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and Maid of honor</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_honor', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and Bridesmaids</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_bridesmaids', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and parents</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_bride_parents', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_bride_groom', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom with parents</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_bride_groom_parents', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom with wedding party</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_bride_groom_party', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom with family</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_bride_groom_family', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Bride and groom with flower girl and ring bearer</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_bride_groom_flower_ring', TRUE, FALSE); ?>
      </div>
    </div>
    

  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Groom with parents</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_groom_parents', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Groom with best man</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('portraits_groom_best', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Groom with groomsmen</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('portraits_groom_men', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-6 control-label" for="textinput">Notes</label>
      <div class='date col-md-6'>
        <?php echo form_textarea('portraits_notes','', array('placeholder' => 'Notes', 'class' => 'form-control input-md')); ?>
      </div>
    </div>
    
  </div>
</div>

<div class="row">
  <h4 class="text-center">Reception</h4>
  <div class="col-md-6">
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Reception site</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_site', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Table setting</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_table', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Centerpieces</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_centerpieces', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Head table</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_head', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">DJ / Musicians</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_music', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Place card table</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_place_card', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Gift Table</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_gift', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Bride and groom arrival</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_arrival', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Bride and groom greet guests</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_greet', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Bride and groom place cards</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_bride_groom_place', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Wedding Cake</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_cake', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Decor</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_decor', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Mingling</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_mingle', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Dinner service</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_dinner_service', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Dancing, First dance</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_first_dance', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Dancing, General</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_dancing', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Dancing, with parents</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_dancing_parents', TRUE, FALSE); ?>
      </div>
    </div>
   

  </div>

  <div class="col-md-6">
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Cutting the cake</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_cut_cake', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Feeding each other the cake</label>
      <div class='date col-md-2'>
        <?php echo form_checkbox('reception_feeding', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Toasts</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('reception_toast', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Bride and groom toasting each other</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('reception_bride_groom_toast', TRUE, FALSE); ?>
      </div>
    </div>
    
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Bride throwing bouquet</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('reception_bouquet', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Groom getting garter</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('reception_garter', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Garter Toss</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('reception_garter_toss', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Getway car</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('reception_getaway', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Bride and groom leaving</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('reception_leaving', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Crossing Threshold</label>
      <div class='date col-md-6'>
        <?php echo form_checkbox('reception_threshold', TRUE, FALSE); ?>
      </div>
    </div>
    <div class="form-group">
       <label class="col-md-6 control-label" for="textinput">Notes</label>
      <div class='date col-md-6'>
        <?php echo form_textarea('reception_notes','', array('placeholder' => 'Notes', 'class' => 'form-control input-md')); ?>
      </div>
    </div>
    
  </div>
</div>



<h3 class="text-center">Legal</h3>
<div class="well">

      <div>
        
        <ol>
        <li>A deposit of 10% of the total price before taxes is required as a retainer fee.
        </li>
        <li>All retainer fees are non-refundable in the event of a date change or wedding cancellation for any reason.
        </li>
        <li>All permits required will be obtained/paid for by the client, including parking.</li>
        <li>It is understood that <em>Jon Scott Photography</em> are the exclusive & official photographers for the purpose of photographing this wedding. Family and friends of the client shall be permitted to photograph the wedding as long as they do not interfere with the photographers’ duties. (I.E. competing for the attention of the couple during posed shots) <em>Jon Scott Photography</em> is not responsible for photos or poses missed as a result of other photographers or videographers.</li>
        <li>Every reasonable effort will be made to take requested pictures, but no specific pose or photograph can be promised.</li>
        <li>Services beyond the terms of this contract including overtime caused by delays not within the control of <em>Jon Scott Photography</em> will be charged at $150/ hour.</li>
        <li><em>Jon Scott Photography</em> reserves the right to use the photos and/or reproductions for purposes of display, exhibitions, contests, advertising, promotion on the internet, publication and other purposes. Photographs remain the exclusive property of <em>Jon Scott Photography</em>. The client has the right to print for personal use only. Certain photos can be excluded from this upon written request from the client. The client further agrees not to supply images to any third parties (including vendors associated with the wedding or album designers).</li>
        <li><em>Jon Scott Photography</em> can not be held responsible for the quality of photographs printed from the files delivered, as the quality varies greatly depending on the quality of printing/developing process and paper. We would encourage you to use <em>Jon Scott Photography</em> for any prints larger than 8"x10" or alternative mediums such as canvas, Plexiglas, aluminum or others.</li>
        <li>Jon Scott Photography will provide basic editing (contrast, toning, cropping, exposure) and delivery of high resolution digital files, in JPEG format, within 30 days of the wedding day, on USB or Cloud storage.</li>
        <li>The client agrees to confirm the schedule one-week prior to the event(s). Notification of any changes in schedule or location must be made in a timely manner.</li>
        <li>During a wedding shoot in excess of 5 hours, meals will be provided for the photographers, otherwise an hour paid break will be required to make other meal arrangements. Should a meal be provided it is best to be served at the same time as the bridal party and guests, so that the Photographers won't miss important coverage.</li>
        <li><em>Jon Scott Photography</em> is not responsible for compromised coverage due to causes beyond the control of <em>Jon Scott Photography</em> including but not limited to obtrusive guests, lateness of the client or guests, weather conditions, schedule complications, incorrect addresses provided, or restrictions of the locations. <em>Jon Scott Photography</em> is not held liable for missed coverage of any part of the event(s).</li>
        <li>Balance, including remaining taxes, is payable by cheque or cash the day of the wedding unless a financing plan has been agreed upon.</li>
        <li>In the unlikely event that <em>Jon Scott Photography</em> is unable to perform to the guidelines of this contract due to an injury, illness, act of God, act of terrorism, or other cause beyond the control of <em>Jon Scott Photography</em>, they will make every effort to secure a replacement. If the situation should occur and a suitable replacement is not found, responsibility and liability is limited to the return of all payments received for the event(s). This limitation of liability will also apply in the event that any images are lost though camera, hard drive or equipment malfunction, damaged in processing, lost in the mail, or otherwise damaged or lost without the fault of <em>Jon Scott Photography</em>.</li>
        <li>Jon Scott Photography is not liable to deliver every image taken at the event. The determination of images delivered to the client is left to the discretion of <em>Jon Scott Photography</em>.</li>
        </ol>
      </div>

    </div>
<hr>

<h3 class="text-center">Signatures</h3>
<div class="row">
<h4 class="text-center">Groom Signature</h4>
<hr>

<div id="signature-pad_1" class="signature-pad col-md-8 col-md-push-2">
    <div class="signature-pad--body">
      <canvas class="col-md-12"></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description text-center">Sign above</div>

      <div class="signature-pad--actions text-center">
        <div>
          <button type="button" class="btn btn-primary" data-action="clear">Clear</button>
          <button type="button" class="btn btn-success" data-action="save-png">Save Signature</button>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
<h4 class="text-center">Bride Signature</h4>
<hr>
<div id="signature-pad_2" class="signature-pad col-md-8 col-md-push-2">
    <div class="signature-pad--body">
      <canvas class="col-md-12"></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description text-center">Sign above</div>

      <div class="signature-pad--actions text-center">
        <div>
          <button type="button" class="btn btn-primary" data-action="clear">Clear</button>
          <button type="button" class="btn btn-success" data-action="save-png">Save Signature</button>

        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
<h4 class="text-center">Jon Scott Photography Rep. Signature</h4>
<hr>
<div id="signature-pad_3" class="signature-pad col-md-8 col-md-push-2">
    <div class="signature-pad--body">
      <canvas class="col-md-12"></canvas>
    </div>
    <div class="signature-pad--footer">
      <div class="description text-center">Sign above</div>

      <div class="signature-pad--actions text-center">
        <div>
          <button type="button" class="btn btn-primary" data-action="clear">Clear</button>
          <button type="button" class="btn btn-success" data-action="save-png">Save Signature</button>

        </div>
      </div>
    </div>
  </div>
</div>
<?php echo form_hidden('signature_1', '');?>
<?php echo form_hidden('signature_2', '');?>
<?php echo form_hidden('signature_3', '');?>
<?php echo form_hidden('client_id', $client['client_id']);?>

<!-- Button -->
<div class="form-group">
  <div class="col-md-4 col-md-push-4">
    <?php echo form_submit('', 'Book Event', array('class' => 'btn btn-success btn-block')); ?>
  </div>
</div>

</fieldset>
<?php echo form_close(); ?>
