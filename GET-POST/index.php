<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <h1>Restaurant D'Creme La Clair</h1>
  <form action="index.php" method="POST">
    <label for="quantity">Quantity</label><br>
    <input type="number" name="quantity" id="quantity"><br>
    <input type="submit" value="Total">
  </form>
  <?php 
    $item = 'pizza';
    $price = 5.99;
    $quantity = $_POST['quantity'] ?? 0;
    $total = $quantity * $price;

    echo"You have order {$quantity} x {$item}s<br>";
    echo"Your total is \${$total}";
  ?>
</body>
</html>
