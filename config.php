<?php
$host = "127.0.0.1"; /* Host name */
$user = "mariadb"; /* User */
$password = "mariadb"; /* Password */
$dbname = "mariadb"; /* Database name */

$con = new mysqli($host, $user, $password, $dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

$queries = file_get_contents('UOWD.sql'); 
mysqli_multi_query($con, $queries);