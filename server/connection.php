<?php

// Turn off error reporting (remove this line in a development environment)
error_reporting(1);

// Start output buffering
ob_start();

// Start the session
session_start();

// Set the content type to HTML with UTF-8 encoding
header("Content-Type: text/html;charset=UTF-8");

// Check if the server is localhost or a specific IP address


// Live server configuration
$DB_USER = 'sumit';
$DB_PASSWORD = '12345';
$DB_HOST = 'localhost';
$DB_NAME = 'comebyte';


$msg = "";
// Connect to the MySQL database
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);

// Check for database connection errors
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
  $msg = "connection successful!";
}
// Set character set for proper UTF-8 encoding
//mysqli_query($mysqli, "SET NAMES 'utf8'");
