<?php 
require 'koneksi.php';
$name = $_POST["name"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$password = $_POST["password"];

$query_sql = "INSERT INTO users (name, email, phone_number, password) 
            VALUES ('$name', '$email', '$phone_number', '$password')";


if (mysqli_query($conn, $query_sql)) {
    header("Location: signin.php");
} else {
    echo "Sign Up failed : " . mysqli_error($conn);
}

?>
