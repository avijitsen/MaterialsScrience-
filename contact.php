<?php
require_once 'core/init.php';
include('partials/head.php');
include('partials/header.php');

?>
<div class="massage" style="text-align:center">
<div class="contact">
  <?php
  $contact = getcontact();
  foreach ($contact as $avijit) {
    # code...
  }
  ?>
  <h1><?php echo $avijit['Name']; ?></h1>
  <p class="text">  <?php echo $avijit['Dg']; ?><br>
  <?php echo $avijit['Dept']; ?> <br>
  <?php echo $avijit['Versity']; ?> <br>
  <?php echo $avijit['Telephone']; ?><br>
  <?php echo $avijit['Mobile']; ?><br>
  E-mail: <a style="color:black;"href="mohi_cuet@yahoo.com">mohi@cuet.ac.bd</a></p>

</div>
<?php if (isLoggedIn()) : ?>
<div class="logoutbox">

  <button class="addbutton"type="button" name="button">
    <a href="edit_contact.php">EDIT</a></button>
</div>
<?php endif ?>
</div>
<?php  include('partials/footer.php') ?>
