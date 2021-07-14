<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: presentation.php');
}

if (isset($_GET['serial'])) {
  $serial = $_GET['serial'];
  global $dblink;
  $sql = "DELETE FROM `presentation3` WHERE `Serial` = '$serial'";
  $result = mysqli_query($dblink, $sql);
  if (! $result) {
    echo "ERROR";
  }
  else {
    header('LOCATION: presentation.php');
  }

}

?>
