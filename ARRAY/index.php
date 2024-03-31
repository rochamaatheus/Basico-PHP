<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ASSOCIATIVE ARRAYS</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label for="country">Enter a Country</label>
    <input type="text" name="country" id="country">
    <input type="submit" value="Submit">
  </form>
  <?php
    $capitals = array('USA'=>'Washington D.C','Japan'=>'Kyoto','South Korean'=>'Seoul','India'=>'New Delhi');

    $capital = $capitals[$_POST['country']];
    echo"The Capital of {$_POST['country']} is {$capital}";
  ?>
</body>
</html>