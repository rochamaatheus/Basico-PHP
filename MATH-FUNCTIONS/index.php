<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radius Calculation</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label for="radius">Radius</label>
    <input type="text" name="radius" id="radius">
    <input type="submit" value="Calculate">
  </form>
  <?php
    // The radius of a circle given by the user
    $radius = $_POST['radius'] ?? 0;

    $circumference = round(2*pi()*$radius, 2);
    $area = round(pi()*pow($radius, 2), 2);
    $volume = round(4/3*pi()*pow($radius, 3), 2);

    echo"<p>Circumference = {$circumference}cm</p>";
    echo"<p>Area = {$area}cm²</p>";
    echo"<p>Volume = {$volume}cm³</p>";
  ?>
</body>
</html>