<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SANITIZE & VALIDATE</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username"><br>
    <label for="age">Age</label><br>
    <input type="text" name="age" id="age"><br>
    <label for="email">Email</label><br>
    <input type="text" name="email" id="email"><br>
    <input type="submit" name="login" value="Login">
  </form>
  <?php
    // We want to avoid anyone trying to put something malicious
    // on our server, so we'll need to sanitize the username

    echo "<h3>Sanitize</h3>";
    if(isset($_POST['login'])) {
      $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
      $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_NUMBER_INT);
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
      echo "<p>$username</p>";
      echo "<p>$age</p>";
      echo "<p>$email</p>";
    }

    echo "<h3>Validate</h3>";
    if(isset($_POST['login'])) {
      $age = filter_input(INPUT_POST, 'age', FILTER_VALIDATE_INT);
      $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

      if (empty($age)) {
        echo "That number isn't valid <br>";
      } else {
        echo "$age <br>";
      }

      if (empty($email)) {
        echo "That email isn't valid";
      } else {
        echo "$email";
      }
    }
  ?>
</body>
</html>