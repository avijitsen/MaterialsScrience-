<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: publication.php');
}

if (isset($_GET['time'])) {
  $time = $_GET['time'];

  global $dblink;
  $sql = "DELETE FROM `publication` WHERE `time` = '$time'";
  $result = mysqli_query($dblink, $sql);
  if (! $result) {
    echo "ERROR";
  }
  else {
    header('LOCATION: publication.php');
  }

}

?>
