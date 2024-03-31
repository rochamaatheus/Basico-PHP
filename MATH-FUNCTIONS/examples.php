<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MATH FUNCTIONS</title>
  <style>
    * {
      box-sizing: border-box;
    }
    body {
      display: grid;
      grid-template-columns: 200px 1fr;
      margin: 1rem;
      gap: 1rem;
    }
    h2 {
      margin-top: 0;
    }
    form {
      padding: 1rem;
      height: max-content;
    }
    input {
      width: 100%;
    }
  </style>
</head>
<body>
  <form action="index.php" method="POST">
    <label for="x">X</label>
    <input type="text" name="x" id="x"><br>
    <label for="y">Y</label>
    <input type="text" name="y" id="y"><br>
    <label for="z">Z</label>
    <input type="text" name="z" id="z"><br>
    <input type="submit" value="Total">
  </form>
  <div>
  <?php 
    $x = $_POST['x'] ?? 0;
    $y = $_POST['y'] ?? 0;
    $z = $_POST['z'] ?? 0;

    $absolute_number = abs($x);
    $round_number = round($x);
    $round_number_down = floor($x);
    $round_number_up = ceil($x);
    $pow_number = pow($x, $y);
    $sqrt_number = sqrt($x);
    $highest_number = max($x, $y, $z);
    $minimum_number = min($x, $y, $z);

    $pi = pi(); // Will print the PI
    $random = rand(); // Will give you a random number
                      // You can also put a rand(min, max) value.

    echo"<h2>Using just the \"X\" number:</h2>";
    echo"<p>Absolute number: {$absolute_number}</p>";
    echo"<p>Round number: {$round_number}</p>";
    echo"<p>Round number DOWN: {$round_number_down}</p>";
    echo"<p>Round number UP: {$round_number_up}</p>";
    echo"<p>Square Root number: {$sqrt_number}</p>";

    echo"<h2>Using all numbers:</h2>";
    echo"<p>{$x} to the power of {$y} = {$pow_number}</p>";
    echo"<p>Highest number: {$highest_number}</p>";
    echo"<p>Minimum number: {$minimum_number}</p>";
  ?>
  </div>
</body>
</html>