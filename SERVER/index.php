<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SERVER</title>
</head>
<body>
  <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username"><br>
    <input type="submit" name="submit" value="Submit">
  </form>

  <?php 
    // $_SERVER = SGB that contains headers, paths, and scripts locations.
    //            The entries in this array are created by the web server.
    //            Shows nearly everything you need to know about the current web page env.

    foreach($_SERVER as $key => $value) {
      echo "$key: $value<br>";
    }

    // You can submit a form without hitting the submit button
    // So a way that you can ensure that the form is submitted is:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      header('Location: ' . $_SERVER['PHP_SELF']);
      exit;
    }
  ?>
</body>
</html>