<?php 
  /** @var mysqli $db_connection */
  include('./database.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATABASE</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <h2>Welcome to Facebook!</h2>
    <label for="username">Username:</label><br>
    <input type="text" name="username" id="username"><br>
    <label for="password">Password:</label><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" name="submit" value="Register"><br>
  </form>
</body>
</html>
<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>$username</p>";
    echo "<p>$password</p>";

    if (empty($username)) {
      echo 'Username is required';
    } elseif (strlen($username) < 3 || strlen($username) > 15) {
      echo 'Username must be between 3 and 15 characters';
    } elseif (!preg_match('/^[a-zA-Z0-9_-]+$/', $username)) {
      echo 'Username contains invalid characters';
    } elseif (empty($password)) {
      echo 'Password is required';
    } elseif (strlen($password) < 8) {
      echo 'Password must be at least 8 characters';
    } elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[0-9]/', $password)) {
      echo 'Password must contain at least one uppercase letter, one lowercase letter, and one number';
    } else {
      // Prepare statement
      $stmt = $db_connection->prepare("SELECT 1 FROM users WHERE user = ?");
      if ($stmt === false) {
          die('prepare() failed: ' . htmlspecialchars($db_connection->error));
      }
      $stmt->bind_param("s", $username);

      // Execute statement
      $stmt->execute();

      // Get the result
      $result = $stmt->get_result();

      if ($result->num_rows > 0) {
          echo "Username already exists";
      } else {
          // Proceed with the insert operation
          $hash = password_hash($password, PASSWORD_DEFAULT);
          $stmt = $db_connection->prepare("INSERT INTO users (user, password) VALUES (?, ?)");
          $stmt->bind_param("ss", $username, $hash);
          $stmt->execute();
          echo "New record created successfully";
      }

      $stmt->close();
      mysqli_close($db_connection);
    }
  }
?>
