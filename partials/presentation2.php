
<?php

if (isset($_POST['button2'])) {
  $about2 = $_POST['about2'];
  $serial2 = $_POST['serial2'];

  if ($about2 && $serial2) {
    global $dblink;
    $sql = "INSERT INTO `presentation2`(`About`, `Serial`) VALUES ('$about2','$serial2')";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
  }
}

?>

<div class="wrapper">
<h2>Presentation</h2>
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
        $students = getpresentation2();
        foreach($students as $stud) : ?>
        <tr>
          <td><?php echo $stud['Serial']; ?></td>
          <td><?php echo $stud['About']; ?></td>
          <?php if (isLoggedIn()) : ?>
          <td>
            <button type="button" class="addbutton">
              <a href="edit_presentation.php?serial=<?php echo $stud['Serial']; ?>">EDIT</button>
            </button>
          </td>
          <td>
            <button type="button" class="addbutton">
              <a href="\delete_presentation.php?serial=<?php echo $stud['Serial']; ?>">DELETE</button>
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

  <h2>Add New Presentation </h2>
  <div class="add">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <textarea class="addbox"name="about2"></textarea>
      <input  class="addboxyr"type="text" name="serial2" placeholder="1">
      <button  class="addbutton"type="submit" name="button2">ADD</button>
    </form>
  </div>
</div>
<?php endif; ?>
