<div>
  <div class="row column text-center">
    <h2>Welcome, <?php echo $user_name; ?></h2>
      <form class="" method="post" action="<?php echo base_url() ?>schools/filter">
        <select name="chosen_school">
            <option>ALL</option>
            <?php foreach($schools_group as $school){ ?>
              <option><?php echo $school['school']; ?></option>
              <?php } ?>
        </select>
      </form>
  </div>
</div>
<hr>

<!-- <h3><?php foreach ($schools_list as $school) {
  echo "<pre>";
  var_dump($school);
} ?></h3> -->

<div class="row column">
  <h3>All Schools</h3>
  <div class="">
    <a href="<?php echo site_url('schools/new_school/')?>" class="button alert">ADD NEW</a>
  </div>
  <table border="0">
    <tr>
      <!-- <td>IMAGE</td> -->
      <td>SCHOOL</td>
      <td>NAME</td>
      <td>EMAIL ADDRESS</td>
      <td></td>
      <!-- <td>STATUS</td>
      <td>ACTION</td> -->
    </tr>

    <?php foreach($schools_list as $school){ ?>
    <tr>
      <!-- <td><img src="<?php echo base_url('assets/images/ThinkstockPhotos-145054512.jpg'); ?>" width="150" /></td> -->
      <td><?php echo $school['school'] ?></td>
      <td><?php echo $school['name'] ?></td>
      <td><?php echo $school['email'] ?></td>
      <td>
        <a href="<?php echo site_url('schools/show/' . $school['id']); ?>" class="button success">View Details</a>
        <a href="<?php echo site_url('schools/edit/' . $school['id']); ?>" class="button">Edit Details</a>
      </td>
    </tr>
    <?php } ?>
  </table>
  <div class="">
    <a href="<?php echo site_url('schools/new_school/')?>" class="button alert">ADD NEW</a>
  </div>
  <br/>
</div>
