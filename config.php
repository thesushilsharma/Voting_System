<?php
$host = "127.0.01"; /* Host name */
$user = "mariadb"; /* User */
$password = "mariadb"; /* Password */
$dbname = "mariadb"; /* Database name */

$con = new mysqli_connect($host, $user, $password, $dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}