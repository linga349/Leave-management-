<?php

define('DB_HOST','localhost:3306');
define('DB_USER','root');
define('DB_PASS','Linga@349349');
define('DB_NAME','leave_staff');

$conn = mysqli_connect('localhost:3306','root','Linga@349349','leave_staff') or die(mysqli_error());

// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

?>
