<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: project.php');
}

if ($_POST) {
  $position = $_POST['position'];
  $title = $_POST['title'];
  $fo = $_POST['fo'];
  $duration = $_POST['duration'];
  $status = $_POST['status'];
  $serial = $_POST['serial'];

  if ($position && $title && $fo && $duration && $status) {
    global $dblink;
    $sql = "UPDATE `project` SET `Position`='$position',`Title`='$title',`Funded organization`='$fo',`Duration`='$duration',`Status`= '$status' WHERE `Serial` = '$serial'";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
    else {
      header('LOCATION: project.php');
    }
    }
  }


include('partials/head.php');
include('partials/header.php');

if (isset($_GET['serial'])) {
  $project = getProjectBySerial($_GET['serial']);
}

?>

<form class="" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

<div class="wrapper">
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>Sl No</th>
          <th>Position</th>
          <th>Title</th>
          <th>Funded organization</th>
          <th>Duration</th>
          <th>Status</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php echo $project['Serial']; ?>
            <input type="hidden" name="serial" value="<?php echo $project['Serial']; ?>">
          </td>
          <td>
            <input type="text" name="position" value="<?php echo $project['Position']; ?>">
          </td>
          <td>
            <input type="text" name="title" value="<?php echo $project['Title']; ?>">
          </td>
          <td>
            <input type="text" name="fo" value="<?php echo $project['Funded organization']; ?>">
          </td>
          <td>
            <input type="text" name="duration" value="<?php echo $project['Duration']; ?>">
          </td>
          <td>
            <input type="text" name="status" value="<?php echo $project['Status']; ?>">
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
