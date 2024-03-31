<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>STRING FUNCTIONS</title>
</head>
<body>
  <?php 
    $username = 'Matheus Silveira Rocha';
    $username_array = array('Matheus', 'Silveira', 'Rocha');
    $phone = '123-456-7890';

    echo "<h3>Capitalize the first letter of the string:</h3>";
    $username = ucfirst($username); // Capitalize first letter
    echo "<p>$username</p>";

    echo "<h3>Capitalize the first letter of each word:</h3>";
    $username = ucwords($username); // Capitalize first letter each word
    echo "<p>$username</p>";

    echo "<h3>Remove whitespaces from both ends:</h3>";
    $username = trim($username); // Remove whitespaces
    echo "<p>$username</p>";

    echo "<h3>Remove whitespaces from the left end:</h3>";
    $username = ltrim($username); // Remove whitespaces left
    echo "<p>$username</p>";

    echo "<h3>Remove whitespaces from the right end:</h3>";
    $username = rtrim($username); // Remove whitespaces right
    echo "<p>$username</p>";

    echo "<h3>Convert all characters to lowercase:</h3>";
    $username = strtolower($username); // Lowercase
    echo "<p>$username</p>";

    echo "<h3>Convert all characters to uppercase:</h3>";
    $username = strtoupper($username); // Uppercase
    echo "<p>$username</p>";

    echo "<h3>Replace '-' with '' in phone number:</h3>";
    $phone = str_replace('-', '', $phone); // Replace
    echo "<p>$phone</p>";
    $phone = '123-456-7890';

    echo "<h3>Reverse the string:</h3>";
    $username = strrev($username); // Reverse
    echo "<p>$username</p>";
    $username = 'Matheus Silveira Rocha';

    echo "<h3>Shuffle the string:</h3>";
    $username = str_shuffle($username);
    echo "<p>$username</p>";
    $username = 'Matheus Silveira Rocha';

    echo "<h3>Compare the string with 'Matheus':</h3>";
    $equals = strcmp($username, 'Matheus');
    echo "<p>$equals</p>";

    echo "<h3>Count characters in the string:</h3>";
    $username = strlen($username); // Count characters 
    echo "<p>$username</p>";
    $username = 'Matheus Silveira Rocha';

    echo "<h3>Find the position of '-' in phone number:</h3>";
    $phone = strpos($phone, '-');
    echo "<p>$phone</p>";

    echo "<h3>Get the first name from the string:</h3>";
    $first_name = substr($username, 0, 7);
    echo "<p>$first_name</p>";

    echo "<h3>Get the last name from the string:</h3>";
    $last_name = substr($username, 8);
    echo "<p>$last_name</p>";

    echo "<h3>Split the string into an array:</h3>";
    $fullname = explode(' ', $username);
    foreach ($fullname as $name) {
      echo "<p>$name</p>";
    }

    echo "<h3>Join the array into a string:</h3>";
    $fullname_string = implode(' ', $username_array);
    echo "<p>$fullname_string</p>";
  ?>
</body>
</html>
