<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: contact.php');
}

if ($_POST) {
  $name = $_POST['name'];
  $dg = $_POST['dg'];
  $dept = $_POST['dept'];
  $versity = $_POST['versity'];
  $tele = $_POST['tele'];
  $mobile = $_POST['mobile'];
  if ($name && $dg && $dept && $versity && $tele && $mobile) {
    global $dblink;
    $sql = "UPDATE `users` SET `Name`='$name',`Dg`='$dg',`Dept`='$dept',`Versity`='$versity',`Telephone`='$tele',`Mobile`='$mobile' WHERE `id`='1'";

    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
    else {
      header('LOCATION: contact.php');
    }
    }
  }


include('partials/head.php');
include('partials/header.php');
$contact = getcontact();
foreach ($contact as $avijit) {
  # code...
}
?>

<form class="" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

<div class="wrapper">
  <div class="table_wrapper">
    <div class="con_edit">

      <label for="">Name</label>
      <input  class="addboxyr"type="text"name="name" value="<?php echo $avijit['Name']; ?>">
      <br>
      <label>Designation</label>
      <input class="addboxyr"type="text" name="dg" value="<?php echo $avijit['Dg']; ?>">
      <br>
      <label>Department</label>
      <input class="addboxyr" type="text" name="dept" value="<?php echo $avijit['Dept']; ?>">
      <br>
      <label>Versity</label>
      <input class="addboxyr" type="text" name="versity" value="<?php echo $avijit['Versity']; ?>">
      <br>
      <label>Telephone No:</label>
      <input class="addboxyr" type="text" name="tele" value="<?php echo $avijit['Telephone']; ?>">
      <br>
      <label>Mobile No</label>

      <input class="addboxyr" type="text" name="mobile" value="<?php echo $avijit['Mobile']; ?>">

      <button  class="addbutton"type="submit">Saves</button>
    </div>

  </div>
</div>

</form>
