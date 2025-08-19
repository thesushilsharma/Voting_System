<?php
session_start();

// Database connection settings
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'uowd');

// Create a database connection
$con = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

mysqli_set_charset($con, 'utf8');