<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ASSOCIATIVE ARRAYS</title>
</head>
<body>
  <?php
    // associative array = An array made of key=>value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array('USA'=> 'Washington D.C',
                      'Japan'=> 'Kyoto',
                      'South Korean'=> 'Seoul',
                      'India'=> 'New Delhi');

    // Change values
    $capitals['USA'] = 'São Paulo';
    
    // Add new values
    $capitals['China'] = 'Beijing';

    // Display just the keys
    $keys = array_keys($capitals);
    foreach ($keys as $key) {
      echo $key. '<br>';
    };
    
    echo"<hr>";

    // Display just the values
    $values = array_values($capitals);
    foreach ($values as $value) {
      echo $value. '<br>';
    };

    echo"<hr>";

    // Switching the keys and values
    $capitals = array_flip($capitals);

    foreach($capitals as $key=>$value) {
      echo "{$key} => {$value} <br>";
    }
  ?>
</body>
</html>