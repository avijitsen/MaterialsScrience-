<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: presentation.php');
}

if ($_POST) {
  $about = $_POST['about'];
  $serial = $_POST['serial'];

  if ($about) {
    global $dblink;
    $sql = "UPDATE `presentation` SET `About`='$about' WHERE `Serial` = '$serial'";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
    else {
      header('LOCATION: presentation.php');
    }
    }
  }


include('partials/head.php');
include('partials/header.php');

if (isset($_GET['serial'])) {
  $pi = getPresetationInviteBySerial($_GET['serial']);
}

?>

<form class="" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

<div class="wrapper">
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>Sl No</th>
          <th>About</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php echo $pi['Serial']; ?>
            <input type="hidden" name="serial" value="<?php echo $pi['Serial']; ?>">
          </td>
          <td>
            <input class="addbox"type="text" name="about" value="<?php echo $pi['About']; ?>">
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
