<?php
require_once 'core/init.php';

if (isset($_POST['button1'])) {
  $about = $_POST['about'];
  $serial = $_POST['serial'];

  if ($about && $serial) {
    global $dblink;
    $sql = "INSERT INTO `presentation`(`About`, `Serial`) VALUES ('$about','$serial')";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
  }

}
if (isset($_POST['button3'])) {
  $about = $_POST['about'];
  $serial = $_POST['serial'];

  if ($about && $serial) {
    global $dblink;
    $sql = "INSERT INTO `presentation3`(`About`, `Serial`) VALUES ('$about','$serial')";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
  }

}
?>
<?php
include('partials/head.php');
include('partials/header.php');

?>
<div class="wrapper">
  <h2>Presentation(Invited)</h2>
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>Sl No</th>
          <th>Title</th>
          <?php if (isLoggedIn()) : ?>
          <th>Edit</th>
          <th>Delete</th>
        <?php endif ?>
        </tr>
      </thead>
      <tbody>
        <?php
          $students = getpresentation1();
          foreach($students as $stud) : ?>
          <tr>
            <td><?php echo $stud['Serial']; ?></td>
            <td><?php echo $stud['About']; ?></td>
            <?php if (isLoggedIn()) : ?>
            <td>
              <button type="button" class="addbutton">
                <a href="edit_presentation_invite.php?serial=<?php echo $stud['Serial']; ?>">EDIT</button>
              </button>
            </td>
            <td>
              <button type="button" class="addbutton">
                <a href="delete_presentation_invite.php?serial=<?php echo $stud['Serial']; ?>">DELETE</button>
              </button>
            </td>
          <?php endif ?>
          </tr>
          <?php endforeach;
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php if (isLoggedIn()) : ?>
  <div class="wrapper">

    <h2>Add New Presentation(Invited) </h2>
    <div class="add">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <textarea class="addbox"name="about" placeholder="Title"></textarea>
        <input  class="addboxyr"type="text" name="serial" placeholder="Serial">
        <button  class="addbutton"type="submit" name="button1">ADD</button>
      </form>
    </div>
  </div>
  <?php endif; ?>
<?php include('partials/presentation2.php');?>
<div class="wrapper">
  <h2>Research works presented in conferences by my students</h2>
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>Sl No</th>
          <th>Title</th>
          <?php if (isLoggedIn()) : ?>
          <th>Edit</th>
          <th>Delete</th>
        <?php endif ?>
        </tr>
      </thead>
      <tbody>
        <?php
          $students = getpresentation3();
          foreach($students as $stud) : ?>
          <tr>
            <td><?php echo $stud['Serial']; ?></td>
            <td><?php echo $stud['About']; ?></td>
            <?php if (isLoggedIn()) : ?>
            <td>
              <button type="button" class="addbutton">
                <a href="edit_presentation_3.php?serial=<?php echo $stud['Serial']; ?>">EDIT</button>
              </button>
            </td>
            <td>
              <button type="button" class="addbutton">
                <a href="delete_presentation_3.php?serial=<?php echo $stud['Serial']; ?>">DELETE</button>
              </button>
            </td>
          <?php endif ?>

          </tr>
          <?php endforeach;
        ?>
      </tbody>
    </table>
  </div>

</div>
<?php if (isLoggedIn()) : ?>
  <div class="wrapper">

    <h2>Add New </h2>
    <div class="add">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <textarea class="addbox"name="about" placeholder="Title"></textarea>
        <input  class="addboxyr"type="text" name="serial" placeholder="Serial">
        <button  class="addbutton"type="submit" name="button3">ADD</button>
      </form>
    </div>
  </div>
  <?php endif; ?>

<?php include('partials/footer.php'); ?>
