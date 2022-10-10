<?php 
require 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql = "SELECT * FROM users
            WHERE email = '$email' AND password ='$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: user.html");
} else {
    echo "<center><p>Email atau password anda salah. silahkan coba lagi</p>
    <button><strong><a href='signin.php'>Sign In</a></strong></button></center>";
}

?>
