<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'employees');
$DB_SERVER='localhost';

$DB_SERVER='localhost';
$DB_USER='root';
$DB_PASSWORD='';
$DB_NAME='employees';

// Create connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>