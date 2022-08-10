<?php
$severname = "localhost";
$username = "root";
$password = "password";
$db_name = "crud_laravel";
$user = 'root';
$pass = 'password';
$dsn = 'mysql:db_name=crud_laravel;host=127.0.0.1;port=3306';

try {
   $dbh = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
   print "Error!: " . $e->getMessage() . "\n";
   phpinfo(); die();
}
?>