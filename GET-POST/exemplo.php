<?php 
  // $_GET, $_POST = special variables used to collect data from an HTML form
  //                 data is send to the file in the action attribute of <form>
  //                 <form action="some_file.php" method="get">

  // $_GET = Data is appended to the URL
  //         NOT SECURE
  //         char limit
  //         Bookmark is possible w/ values
  //         GET requests can be cached
  //         better for a search page

  // $_POST = Data is packaged inside the body of the HTTP request
  //         MORE SECURE
  //         No data limits
  //         Cannot bookmark
  //         GET request are not cached
  //         Better for submiting credentials
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label for="username">Username</label><br>
    <input type="text" id="username" name="username"><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password"><br>
    <input type="submit" value="Log in">
  </form>
  <?php 
    // Get method
    echo !empty($_GET['username']) ? "{$_GET['username']}<br>" : '';
    echo !empty($_GET['password']) ? "{$_GET['password']}<br>" : '';
    // Post method
    echo !empty($_POST['username']) ? "{$_POST['username']}<br>" : '';
    echo !empty($_POST['password']) ? "{$_POST['password']}<br>" : '';
  ?>
</body>
</html>
