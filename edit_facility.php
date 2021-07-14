<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: facilities.php');
}

if ($_POST) {
  $serial = $_POST['serial'];
  $name = $_POST['name'];
  $sp = $_POST['sp'];

  if ($name && $sp) {
    global $dblink;
    $sql = "UPDATE `facilities` SET `Name`='$name',`Specification`='$sp' WHERE `Serial` = '$serial'";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
    else {
      header('LOCATION: facilities.php');
    }
    }
  }


include('partials/head.php');
include('partials/header.php');

if (isset($_GET['serial'])) {
  $facility = getfacilityBySerial($_GET['serial']);
}

?>

<form class="" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

<div class="wrapper">
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>Sl No</th>
          <th>Name</th>
          <th>Specification</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php echo $facility['Serial']; ?>
            <input type="hidden" name="serial" value="<?php echo $facility['Serial']; ?>">
          </td>
          <td>
            <textarea name="name" rows="8" cols="80" class="addbox"><?php echo $facility['Name']; ?></textarea>
          </td>
          <td>
            <textarea name="sp" rows="8" cols="80" class="addbox"><?php echo $facility['Specification']; ?></textarea>
            </td>
          <td>
            <button  class="addbutton"type="submit">Saves</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</form>
