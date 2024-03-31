<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FUNCTION</title>
</head>
<body>
  <?php 
    // function = write some code, reuse when you need it
    //            type () after function name to invoke
    //            ex, add() subtract() multiply() divide()

    function happy_birthday($first_name, $age) {
      echo "<p>Happy birthday dear {$first_name}!</p>";
      echo "<p>Happy birthday to you!</p>";
      echo "<p>Happy birthday dear {$first_name}!</p>";
      echo "<p>You are {$age} years old!</p>";
    };

    happy_birthday('Matheus', 17);

    function odd_or_even($number) {
      if ($number % 2 == 0) {
        echo "<p>{$number} is Even</p>";
      } else {
        echo "<p>{$number} is Odd</p>";
      }
    };

    odd_or_even(10);
    odd_or_even(11);
    odd_or_even(12);

    function hypotenuse(float $a, float $b) {
      $c = sqrt($a ** 2 + $b ** 2);
      echo "<p>The hypotenuse of {$a} & {$b} is {$c}</p>";
    };

    hypotenuse(10, 20);
  ?>
</body>
</html>