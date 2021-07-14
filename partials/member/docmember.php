<?php
require_once 'core/init.php';

 if (isset($_POST['button1'])) {
  $serial = $_POST['serial'];
  $id = $_POST['id'];
  $name = $_POST['name'];
  $tt = $_POST['tt'];
  $degree = $_POST['degree'];
  $da = $_POST['da'];


  if ($serial && $id && $name && $tt && $degree && $da) {
    global $dblink;
    $sql = "INSERT INTO `phdstudent`(`Serial`, `id`, `Name`, `Tentative Title`, `Degree`, `Da`) VALUES ('$serial','$id','$name','$tt','$degree','$da')";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
  }
}
 ?>


<div class="wrapper">
  <h2>Doctoral Students</h2>
  <div class="table_wrapper">
    <table>
      <thead>
        <tr>
          <th>Sl No</th>
          <th>ID No</th>
          <th>Name</th>
          <th>Tentative Title </th>
          <th>Degree</th>
          <th>Degree awarded</th>
          <?php if (isLoggedIn()) : ?>
          <th>Edit</th>
          <th>Delete</th>
        <?php endif ?>
        </tr>
      </thead>
      <tbody>
        <?php
          $students = getPhdStudents();
          foreach($students as $stud) : ?>
          <tr>
            <td><?php echo $stud['Serial']; ?></td>
            <td><?php echo $stud['id']; ?></td>
            <td><?php echo $stud['Name']; ?></td>
            <td><?php echo $stud['Tentative Title']; ?></td>
            <td><?php echo $stud['Degree']; ?></td>
            <td><?php echo $stud['Da']; ?></td>
            <?php if (isLoggedIn()) : ?>
            <td>
              <button type="button" class="addbutton">
                <a href="edit_docstudent.php?serial=<?php echo $stud['Serial']; ?>">EDIT</button>
              </button>
            </td>
            <td>
              <button type="button" class="addbutton">
                <a href="delete_docmember.php?serial=<?php echo $stud['Serial']; ?>">DELETE</button>
              </button>
            </td>
          <?php endif ?>
          </tr>
          <?php endforeach;
        ?>
      </tbody>
    </table>
  </div

</div>
<?php if (isLoggedIn()) : ?>
  <div class="wrapper">
    <h2>Add New Doctoral Student </h2>
    <div class="add">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input  class="addboxyr"type="text" name="serial" placeholder="Serial">
        <input class="addboxyr"type="text" name="id" value="" placeholder="Id">
        <input class="addboxyr" type="text" name="name" value="" placeholder="Name">
        <textarea class="addbox"name="tt" placeholder="Tentative Title"></textarea>
        <input class="addboxyr" type="text" name="degree" value="" placeholder="Degree">
        <input class="addboxyr" type="text" name="da" value="" placeholder="Degree awarded">

        <button  name="button1" class="addbutton"type="submit">ADD</button>
      </form>
    </div>
  </div>
  <?php endif; ?>
