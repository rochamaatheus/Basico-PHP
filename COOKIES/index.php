<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COOKIES</title>
</head>
<body>
  <?php 
    // Cookie = Information about a user stored in a user's web-browser
    //          targeted advertisements, browsing preferences, and
    //          other non-sensitive data.

    // To delete a cookie we just set the time() - 0
    setcookie('fav_food', 'pizza', time() + (86400 * 2), '/');
    setcookie('fav_drik', 'coffee', time() + (86400 * 3), '/');

    foreach ($_COOKIE as $key => $value) {
      echo "$key = $value<br>";
    }
  ?>
</body>
</html>