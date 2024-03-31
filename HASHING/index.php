<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HASHING</title>
</head>
<body>
  <?php 
    // HASHING = Transforming sensitive data (password)
    //            into letters, numbers, and/or symbols
    //            via a mathematical process. (Similar to encryption)
    //            Hides the original data from 3rd parties.

    $password = 'matheus#3721';

    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo $hash . "<br>";
    
    if (password_verify($password, $hash)) {
      echo "Yep, same password";
    } else {
      echo "Nop, not the same password";
    }
  ?>
</body>
</html>