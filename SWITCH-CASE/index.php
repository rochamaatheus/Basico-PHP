<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch Case</title>
</head>
<body>
  <?php
    date_default_timezone_set('America/Sao_Paulo');
    $today = date('l');
    echo"<p>{$today}</p>";

    switch($today) {
      case 'Monday':
        echo"<p>I hate Mondays.</p>";
        break;
      case 'Tuesday':
        echo"<p>Taco Tuesday.</p>";
        break;
      case 'Wednesday':
        echo"<p>Half of the week.</p>";
        break;
      case 'Thursday':
        echo"<p>You're almost there.</p>";
        break;
      case 'Friday':
        echo"<p>You got it!</p>";
        break;
      case 'Saturday':
        echo"<p>Go Skate.</p>";
        break;
      case 'Sunday':
        echo"<p>Just relax.</p>";
        break;
      default:
        echo"<p>That is not a valid day.</p>";
    }
  ?>
</body>
</html>