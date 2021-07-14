<?php

require_once 'core/init.php';
if (isset($_POST['pub1'])) {
  $about = $_POST['about'];
  $year = $_POST['year'];

  if ($about && $year) {
    global $dblink;
    $sql = "INSERT INTO `publication`(`about`, `year`) VALUES ('$about','$year')";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
  }

}
if (isset($_POST['pub2'])) {
  $about = $_POST['about'];

  if ($about) {
    global $dblink;
    $sql = "INSERT INTO `publication2`(`about`) VALUES ('$about')";
    $result = mysqli_query($dblink, $sql);
    if (! $result) {
      echo "ERROR";
    }
  }

}

?>

<?php include('partials/head.php') ?>
<?php include('partials/header.php') ?>

<?php

$sl = 0;

global $dblink;

$yearSQL = "SELECT DISTINCT year FROM `publication` ORDER BY year DESC";
  $yearResult = mysqli_query($dblink, $yearSQL);
  $years = mysqli_fetch_all($yearResult);
  foreach ($years as $year) {

    $pubSQL = "SELECT * FROM `publication` WHERE year = '$year[0]' ORDER BY time DESC";
    $pubResult = mysqli_query($dblink, $pubSQL);
    if ($pubResult) {
      $pubs = mysqli_fetch_all($pubResult, MYSQLI_ASSOC); ?>
      <div class="wrapper">
        <h3 style="margin-left:30px"><?php echo $year[0]; ?></h3>
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
          <?php foreach($pubs as $key => $pub) : ?>
            <tr>
              <td><?php echo $sl + 1; $sl = $sl + 1; ?></td>
              <td><?php echo $pub['about']; ?></td>
              <?php if (isLoggedIn()) : ?>
              <td>
                <button type="button" class="addbutton">
                  <a href="edit_publication.php?time=<?php echo $pub['time']; ?>">EDIT</button>
                </button>
              </td>
              <td>
                <button type="button" class="addbutton">
                  <a href="delete_publication.php?time=<?php echo $pub['time']; ?>">DELETE</button>
                </button>
              </td>
            <?php endif ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>

          <?php

    }
  }
?>
<?php if (isLoggedIn()) : ?>
  <div class="wrapper">

    <h2>Add New Publication: </h2>
    <div class="add">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <textarea class="addbox"name="about" placeholder=" About"></textarea>
        <input  class="addboxyr"type="text" name="year" placeholder="Year">
        <button name="pub1" class="addbutton"type="submit">ADD</button>
      </form>
    </div>
  </div>

<?php endif; ?>
<h1 style="text-align:center;">Publications (Conference proceeding)</h1>
<?php

$sl2= 0;

global $dblink;

    $pubSQL = "SELECT * FROM `publication2` ORDER BY time DESC";
    $pubResult = mysqli_query($dblink, $pubSQL);
    if ($pubResult) {
      $pubs = mysqli_fetch_all($pubResult, MYSQLI_ASSOC); ?>

      <div class="wrapper">
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
          <?php foreach($pubs as $key => $pub) : ?>
            <tr>
              <td><?php echo $sl + 1; $sl = $sl + 1; ?></td>
              <td><?php echo $pub['about']; ?></td>
              <?php if (isLoggedIn()) : ?>
              <td>
                <button type="button" class="addbutton">
                  <a href="edit_publication2.php?time=<?php echo $pub['time']; ?>">EDIT</button>
                </button>
              </td>
              <td>
                <button type="button" class="addbutton">
                  <a href="delete_publication2.php?time=<?php echo $pub['time']; ?>">DELETE</button>
                </button>
              </td>
            <?php endif ?>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>

          <?php

    }

?>

<?php if (isLoggedIn()) : ?>
  <div class="wrapper">

    <h2>Add New Publication: </h2>
    <div class="add">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <textarea class="addbox"name="about" placeholder=" About"></textarea>
        <button  name="pub2"class="addbutton"type="submit">ADD</button>
      </form>
    </div>
  </div>

<?php endif; ?>
<?php include('partials/footer.php') ?>
