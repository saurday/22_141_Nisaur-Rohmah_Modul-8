<?php 

include 'config.php';

$us = $_POST['username'];
$pass = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$us' AND password = '$pass' ");
$cek = mysqli_num_rows($login);

if($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:home.php");
} else {
    header("location:index.php");
}

?>