<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: publication.php');
}

if ($_POST) {
  $about = $_POST['about'];
  $time = $_GET['time'];

  if ($about) {
    global $dblink;
    $sql = "UPDATE `publication2` SET `about`='$about' WHERE `time` = '$time'";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
    else {
      header('LOCATION: publication.php');
    }
  }
}


include('partials/head.php');
include('partials/header.php');

$time = $_GET['time'];
$pubs2 = getpublicationnew($time);

?>

<form class="" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

<div class="wrapper">
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>About</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <textarea class="addbox"  name="about" rows="8" cols="80"><?php echo $pubs2['about']; ?></textarea>
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
