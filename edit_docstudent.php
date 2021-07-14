<?php

require_once 'core/init.php';

if (isNotLoggedIn()) {
  header('LOCATION: member.php');
}

if (isset($_GET['serial'])) {
  $phd = getDocStudentBySerial($_GET['serial']);
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
    $sql = "UPDATE `phdstudent` SET `id`='$id',`Name`='$name',`Tentative Title`='$tt',`Degree`='$degree',`Da`= '$da' WHERE `Serial` = '$serial'";
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
            <?php echo $phd['Serial']; ?>
            <input type="hidden" name="serial" value="<?php echo $phd['Serial']; ?>">
          </td>
          <td>
            <input type="text" name="id" value="<?php echo $phd['id']; ?>">
          </td>
          <td>
            <input type="text" name="name" value="<?php echo $phd['Name']; ?>">
          </td>
          <td>
            <textarea  class="addbox"name="tt" rows="8" cols="80"><?php echo $phd['Tentative Title']; ?></textarea>
          </td>
          <td>
            <input type="text" name="degree" value="<?php echo $phd['Degree']; ?>">
          </td>
          <td>
            <input type="text" name="da" value="<?php echo $phd['Da']; ?>">
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
