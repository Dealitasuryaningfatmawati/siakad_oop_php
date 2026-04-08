<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

// login sederhana (tanpa database)
if ($username == "dealita" && $password == "12345") {
    $_SESSION['login'] = true;
    header("Location: index.php");
} else {
    echo "Login gagal!";
}
?>