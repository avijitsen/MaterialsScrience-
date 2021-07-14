<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: project.php');
}

if (isset($_GET['serial'])) {
  $msc = getMscStudentBySerial($_GET['serial']);
}

if ($_POST) {
  $serial = $_POST['serial'];
 $id = $_POST['id'];
 $name = $_POST['name'];
 $tt = $_POST['tt'];
 $degree = $_POST['degree'];
 $da = $_POST['da'];

  if ($id && $name && $tt && $degree && $da) {
    global $dblink;
    $sql = "UPDATE `Mphillmember` SET `id`='$id',`Name`='$name',`Tentative Title`='$tt',`Degree`='$degree',`Da`= '$da' WHERE `Serial` = '$serial'";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
    else {
      header('LOCATION:\member.php');
    }
    }
  }


include('partials/head.php');
include('partials/header.php');

?>

<form class="" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">

<div class="wrapper">
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>Sl No</th>
          <th>ID</th>
          <th>Name</th>
          <th>Tentative Title</th>
          <th>Degree</th>
          <th>Degree Awarded</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <?php echo $msc['Serial']; ?>
            <input type="hidden" name="serial" value="<?php echo $msc['Serial']; ?>">
          </td>
          <td>
            <input type="text" name="id" value="<?php echo $msc['id']; ?>">
          </td>
          <td>
            <input type="text" name="name" value="<?php echo $msc['Name']; ?>">
          </td>
          <td>
            <input type="text" name="tt" value="<?php echo $msc['Tentative Title']; ?>">
          </td>
          <td>
            <input type="text" name="degree" value="<?php echo $msc['Degree']; ?>">
          </td>
          <td>
            <input type="text" name="da" value="<?php echo $msc['Da']; ?>">
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
