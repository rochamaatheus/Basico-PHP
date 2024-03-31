<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RADIO BUTTON</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label><input type="radio" name="credit_card" value="Visa">Visa</label> <br>
    <label><input type="radio" name="credit_card" value="MasterCard">MasterCard</label> <br>
    <label><input type="radio" name="credit_card" value="American Express">American Express</label> <br>
    <input type="submit" name="confirm" value="Confirm">
  </form>

  <?php 
    if (isset($_POST['confirm'])) {
      if (isset($_POST['credit_card'])) {
        $credit_card = $_POST['credit_card'];
        echo 'You selected '. $credit_card;
      }
      else {
        echo "No option selected.";
      }
    };
  ?>
</body>
</html>