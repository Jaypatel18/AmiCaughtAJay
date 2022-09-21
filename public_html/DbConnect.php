<?php

$servername = "localhost";
$username = "id17924064_dna2022";
$password = "L<WpbC8X*IXa]w$+";
$db_name = "id17924064_dna";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn, $db_name);