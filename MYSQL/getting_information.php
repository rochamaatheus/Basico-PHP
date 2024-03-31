<?php 
  /** @var mysqli $db_connection */
  include('./database.php');

  // Prepare statement
  $stmt = $db_connection->prepare("SELECT id, user FROM users");
  
  // Execute statement
  $stmt->execute();

  // Get the result
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo 'id: ' . htmlspecialchars($row["id"]) . "<br>";
      echo 'user: '. htmlspecialchars($row["user"]). "<br>";
    }
  } else {
    echo "0 results";
  }

  // Close statement
  $stmt->close();

  // Close connection
  $db_connection->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DATABASE</title>
</head>
<body>
  <h1>Hi!</h1>
</body>
</html>