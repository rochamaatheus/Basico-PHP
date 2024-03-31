<?php
  // In this PHP I'm Ok and I know it's safe, because I'm putting the variables
  /** @var mysqli $db_connection */
  /*
  global $db_connection;
  include('./database.php');

  $username = 'Matheus';
  $password = 'matheus#2023';
  $hash = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

  try {
    $query = @mysqli_query($db_connection, $sql);
    if (!$query) {
      throw new Exception("Error: ". mysqli_error($db_connection));
    }
    echo "New record created successfully";
  } catch (Exception $e) {
    echo $e->getMessage();
  }


  mysqli_close($db_connection);
  */
?>
<?php
// But, if it was a form submission, we should handle it properly.
// Like this:
/** @var mysqli $db_connection */

include('./database.php');

$username = 'Matheus'; // Form
$password = 'matheus#2023'; // Form

$hash = password_hash($password, PASSWORD_DEFAULT);

$stmt = $db_connection->prepare("INSERT INTO users (user, password) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hash);

try {
  if(!$stmt->execute()) {
    throw new Exception("Error: ". $stmt->error);
  }
  echo "New record created successfully";
} catch (Exception $e) {
  echo $e->getMessage();
}

$stmt->close();
mysqli_close($db_connection);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONNECT TO MYSQL DATABASE</title>
</head>
<body>
  <h1>Hello!</h1>
  <?php 
    // 1. MySQLi Extension
    // 2. PDO (PHP Data Objects)
  ?>
</body>
</html>