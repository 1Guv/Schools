<div>
  <div class="row column text-center">
  </div>
</div>
<hr>
<div class="row column">
  <h3>Edit details</h3>
  <div class="row column text-left">
    <form method="post">
      <label>School</label>
      <input type="text" name="school" value="<?php echo $school_list['school'] ?>"/>
      <label>Name</label>
      <input type="text" name="name" value="<?php echo $school_list['name'] ?>"/>
      <label>Email</label>
      <input type="text" name="email" value="<?php echo $school_list['email'] ?>"/>
      <input class="button success" type="submit" value="SAVE">
    </form>
  </div>
</div>
