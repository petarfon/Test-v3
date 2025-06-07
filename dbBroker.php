<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "kolokvijumi";


$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    echo "Connection failed: $conn->connect_errno";
} else {
    echo "<script>console.log('Connection successful')</script>";
}
