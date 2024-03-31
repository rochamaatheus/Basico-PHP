<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CHECKBOXES</title>
</head>
<body>
  <form action="index.php" method="POST">
    <label><input type="checkbox" name="cars[]" value="Volvo">Volvo</label> <br>
    <label><input type="checkbox" name="cars[]" value="BMW">BMW</label> <br>
    <label><input type="checkbox" name="cars[]" value="Audi">Audi</label> <br>
    <input type="submit" name="confirm" value="Confirm">
  </form>
  <?php 
    if (isset($_POST['confirm'])) {
      $allCars = array('Volvo', 'BMW', 'Audi');
      if (isset($_POST['cars'])) {
        $selectedCars = $_POST['cars'];
        foreach ($selectedCars as $car) {
          echo "You've selected {$car}! <br>";
        }
        $notSelectedCars = array_diff($allCars, $selectedCars);
        foreach ($notSelectedCars as $car) {
          echo "You've not selected {$car}! <br>";
        }
      } else {
        echo "No option selected.";
      }
    }
  ?>
</body>
</html>