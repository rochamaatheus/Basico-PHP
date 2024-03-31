<?php 
    // isset = Returns TRUE if a variable is declared and not null
    // empty = Returns TRUE if a variable is not declared, false, null or "";

    $username = 'Matheus';

    if (isset($username)) {
      echo "<p>Username is set</p>";
    } else {
      echo "<p>Username is not set</p>";
    }

    $food = 'Pizza';

    if (empty($food)) {
      echo "<p>Food is empty</p>";
    } else {
      echo "<p>Food is not empty</p>";
    }
  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ISSET & EMPTY</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label for="username">Enter a Username</label>
    <input type="text" name="username" id="username"><br>
    <label for="password">Enter a Password</label>
    <input type="password" name="password" id="password">
    <input type="submit" name="login" value="Submit"><br>
  </form>

  <?php 
    foreach($_POST as $key => $value) {
      echo "{$key} => {$value} <br>";
    }

    /*
    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      if (empty($username)) {
        echo '<p>"Username" is missing</p>';
      } elseif (empty($password)) {
        echo '<p>"Password" is missing</p>';
      } else {
        echo "<p>Hello {$username}</p>";
        echo "<p>Your password is {$password}</p>";
      }
    }
    */
  ?>
</body>
</html>