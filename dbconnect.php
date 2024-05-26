<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registration";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // echo "Bazaga muvaffaqiyatli ulandi.";
} catch (PDOException $e) {
    echo "Bazaga ulana olmadi: " . $e->getMessage();
}


?>