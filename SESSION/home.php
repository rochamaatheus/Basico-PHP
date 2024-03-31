<?php session_start();?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
</head>
<body>
  <h1>You're logged in</h1>
  <form action="home.php" method="POST">
    <input type="submit" name="logout" value="Logout">
  </form>
  <?php 
    echo $_SESSION['username']."<br>";
    echo $_SESSION['password'];

    if (isset($_POST['logout'])) {
      session_destroy();
      header('Location: index.php');
    }
  ?>
</body>
</html>