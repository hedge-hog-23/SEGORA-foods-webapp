<?php

$conn = new mysqli('localhost', 'root', '(WC0zSyecb.Z@uFi', 'foodsys');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>