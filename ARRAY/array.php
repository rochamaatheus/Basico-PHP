<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ARRAY</title>
</head>
<body>
  <h2>ARRAY</h2>
  <?php 
  // array = "variable" which can hold mora than one value at a time

  // This way is possible, but it's not the most efficient
  /*
    $food1 = "apple";
    $food2 = "banana";
    $food3 = "orange";
    $food4 = "mango";
  */

  // This way is the most efficient
  $foods = array('apple', 'banana', 'orange', 'mango');
  // echo $foods; // Array can't be converted to string

  // Echoing the "foods" in an inefficient way...
  /*
    echo"<p>First Element: <strong>{$foods[0]}</strong></p>";
    echo"<p>Second Element: <strong>{$foods[1]}</strong></p>";
    echo"<p>Third Element: <strong>{$foods[2]}</strong></p>";
    echo"<p>Fourth Element: <strong>{$foods[3]}</strong></p>";
  */

  // Change the first element
  // $foods[0] = 'pineapple';

  // Putting elements in the end of the array
  array_push($foods, 'pineapple', 'kiwi'); // ['apple', 'banana', 'orange', 'mango', 'pineapple', 'kiwi']

  // Removing the last element in the array
  array_pop($foods); // ['apple', 'banana', 'orange', 'mango', 'pineapple']

  // Removing the first element in the array
  array_shift($foods); // ['banana', 'orange', 'mango', 'pineapple']

  // Creating a array with the values reversed
  $reversed_foods = array_reverse($foods);
  echo"<p>Reversed Array:</p>";
  foreach ($reversed_foods as $food) {
    echo"<p>{$food}</p>";
  };

  echo"<hr>";

  // Easier way to display the foods array
  echo"<p>Array:</p>";
  foreach($foods as $food) {
    echo"<p>{$food}</p>";
  };

  // Counting the number of items in the array
  echo"<hr>";
  echo count($foods);
  ?>
</body>
</html>