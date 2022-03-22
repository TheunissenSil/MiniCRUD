<?php
session_start();
include "../Includes/connector.php";

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username)) {
    header ("Location: ../Pages/loginPage.php?error=Username is qequired");
    exit();
} else if(empty($password)) {
    header ("Location: ../Pages/loginPage.php?error=Password is qequired");
    exit();
}

$sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

if($row['user_name'] === $username && $row['password'] === $password) {
    $_SESSION['user_name'] = $row['user_name'];
    $_SESSION['id'] = $row['id'];
    header("Location: ../Adminpages/home.php");
    exit();
} else {
    header("Location: ../Pages/loginPage.php?error=Password or username is incorrect$passwordHash");
    exit();
}
