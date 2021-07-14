<?php

require_once 'core/init.php';

if ($_POST) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username && $password) {
    if(userExists($username)) {
      $user = getUser($username);

      if ($user['password'] == $password) {
        $_SESSION['username'] = $username;
        header('LOCATION: adminindex.php');
      } else {
        echo 'Error Loggin In';
      }
    }
  }

}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="adminstyle.css">
  <title></title>
</head>

<body>
  <div class="login-page">
    <div class="form">
      <form class="login-form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input name='username' type="text" placeholder="username" required/>
        <input name='password' type="password" placeholder="password" required />
        <button type='submit'>login</button>
      </form>
    </div>
  </div>
</body>

</html>
