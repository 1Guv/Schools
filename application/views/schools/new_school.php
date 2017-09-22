<div>
  <div class="row column text-center">
  </div>
</div>
<hr>
<div class="row column">
  <h3>New School details</h3>
  <div class="row column text-left">
    <form method="post" action="<?php echo base_url() ?>schools/new_school">
      <label>School</label>
      <input type="text" name="school" value=""/>
      <span class="alert-box"><?php echo form_error("school"); ?></span>
      <label>Name</label>
      <input type="text" name="name" value=""/>
      <span class="alert-box"><?php echo form_error("name"); ?></span>
      <label>Email</label>
      <input type="text" name="email" value=""/>
      <span class="alert-box"><?php echo form_error("email"); ?></span>
      <input class="button success" type="submit" name="Insert" value="INSERT">
    </form>
  </div>
</div>
