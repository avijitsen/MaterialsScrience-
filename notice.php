<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: index.php');
}
if ($_POST) {
  $name = $_POST['name'];
  if ($name) {
    global $dblink;
    $sql = "UPDATE `notice` SET `name`='$name' WHERE `serial`='1'";

    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
    else {
      header('LOCATION: index.php');
    }
    }
  }



?>

<?php include("partials/head.php"); ?>

<body>

<?php
 include('partials/header.php');
?>
<div class="massage">
  <?php
  $notice = getnotice();
  foreach ($notice as $not) {
    # code...
  }
  ?>
  <div class="notice_wrapper">

      <form class="" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <label for="">Name:</label>
        <br>
        <textarea name="name" rows="8" cols="80"><?php echo $not['name']; ?></textarea>
        <button  class="logout"type="submit" name="button">Save</button>
      </form>
  </div>

</div>
<?php include('partials/footer.php');
?>
