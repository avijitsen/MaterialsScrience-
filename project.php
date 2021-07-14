<?php

require_once 'core/init.php';

if ($_POST) {
  $serial = $_POST['serial'];
  $position = $_POST['position'];
  $title = $_POST['title'];
  $fo = $_POST['fo'];
  $duration = $_POST['duration'];
  $status = $_POST['status'];

    if ($serial && $position && $title && $fo && $duration && $status) {
      global $dblink;
    $sql = "INSERT INTO `project`(`Serial`, `Position`, `Title`, `Funded organization`, `Duration`, `Status`) VALUES ('$serial','$position','$title','$fo','$duration','$status')";
    $result = mysqli_query($dblink, $sql);

    if (! $result) {
      echo "ERROR";
    }
  }
}

 include('partials/head.php');
 include('partials/header.php');
?>
<div class="wrapper">
  <h2>PROJECT</h2>
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
          <?php if (isLoggedIn()) : ?>
          <th>Edit</th>
          <th>Delete</th>
        <?php endif ?>
        </tr>
      </thead>
      <tbody>
        <?php
          $students = getproject();
          foreach($students as $stud) : ?>
          <tr>
            <td><?php echo $stud['Serial']; ?></td>
            <td><?php echo $stud['Position']; ?></td>
            <td><?php echo $stud['Title']; ?></td>
            <td><?php echo $stud['Funded organization']; ?></td>
            <td><?php echo $stud['Duration']; ?></td>
            <td><?php echo $stud['Status']; ?></td>

            <?php if (isLoggedIn()) : ?>
            <td>
              <button type="button" class="addbutton">
                <a href="edit_project.php?serial=<?php echo $stud['Serial']; ?>">EDIT</button>
              </button>
            </td>
            <td>
              <button type="button" class="addbutton">
                <a href="delete_project.php?serial=<?php echo $stud['Serial']; ?>">DELETE</button>
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
    <h2>Add New Project</h2>
    <div class="add">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input  class="addboxyr"type="text" name="serial" placeholder="1">
        <input class="addboxyr"type="text" name="position" value="" placeholder="position">
        <textarea class="addbox"name="title" placeholder="Title"></textarea>
        <input class="addboxyr" type="text" name="fo" value="" placeholder="Funded organization">
        <input class="addboxyr" type="text" name="duration" value="" placeholder="Duration">
        <input class="addboxyr" type="text" name="status" value="" placeholder="Status">

        <button  class="addbutton"type="submit">ADD</button>
      </form>
    </div>
  </div>
  <?php endif; ?>
  <?php include('partials/footer.php'); ?>
