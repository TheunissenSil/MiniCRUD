<?php
session_start();
require_once("../Includes/connector.php");

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username)) {
    header ("Location: ../Pages/loginPage.php?error=Username is qequired");
    exit();
} else if(empty($password)) {
    header ("Location: ../Pages/loginPage.php?error=Password is qequired");
    exit();
}

$sql = "SELECT id, password FROM users WHERE user_name =:username";
$stmt = $connect->prepare($sql);
$stmt->bindParam(":username", $username);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $result) {
    if(password_verify($password, $result['password'])) {
        $_SESSION['user_name'] = $username;
        $_SESSION['id'] = $result['id'];
        header("Location: ../Adminpages/home.php");
        exit();
    } else {
        header("Location: ../pages/loginPage.php?error=Password or username is incorrect");
        exit();
    }
}

header("Location: ../pages/loginPage.php?error=Password or username is incorrect");