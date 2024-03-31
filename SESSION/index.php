<?php
    // SESSION = SGB used to store information on a user
    //          to be used across multiple pages.
    //          A User is assigned a session-id
    //          ex. Login credentials 
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SESSION</title>
</head>
<body>
  <h1>This is the login page.</h1>
  <form action="index.php" method="POST">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" name="login" value="Login">
  </form>
</body>
</html>
<?php 
  if (isset($_POST['login'])) {
    // Taking the login form
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)) {
      // Assign the values to the session
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;

      header('Location: home.php');
    } else {
      echo "Please fill in all the fields";
    }
  }
?>