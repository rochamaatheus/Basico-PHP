<?php 

$db_server = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'business_bro_code';
$db_connection = '';

try {
  $db_connection = @mysqli_connect($db_server, $db_user, $db_password, $db_name);
  if (!$db_connection) {
    throw new Exception('Could not connect to MySQL server.');
  }
  echo 'Connected to MySQL server.';
} catch (Exception $e) {
  echo $e->getMessage();
}
?>