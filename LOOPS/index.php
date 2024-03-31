<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LOOPs</title>
</head>
<body>
  <h2>For Loop</h2>
  <form action="index.php" method="POST">
    <label for="counter">Counter</label>
    <input type="text" name="counter" id="counter">
    <input type="submit" value="Start">
  </form>
  <?php 
    // for loop = repeat some code a certain # of times

    $counter = $_POST['counter'] ?? 0;

    for($i = 0;$i <= $counter;$i++) {
      echo"{$i}<br>";
    }
  ?>
  <h2>While Loop</h2>
  <form action="index.php" method="POST">
    <input type="submit" value="Start" name="start">
    <input type="submit" value="Stop" name="stop">
  </form>
  <?php 
    // while loop = do some code infinitely while some condition remains true
    $seconds = 0;
    $running = isset($_POST['start']);

    // It'll probably break the page
    while($running) {
      if(isset($_POST['stop'])) { $running = false;}
      $seconds++;
      echo"$seconds<br>";
    }
  ?>
</body>
</html>