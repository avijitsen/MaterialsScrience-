<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: project.php');
}

if (isset($_GET['serial'])) {
  $serial = $_GET['serial'];
  global $dblink;
  $sql = "DELETE FROM `project` WHERE `Serial` = '$serial'";
  $result = mysqli_query($dblink, $sql);
  if (! $result) {
    echo "ERROR";
  }
  else {
    header('LOCATION: project.php');
  }

}

?>
