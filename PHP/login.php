<?php
session_start();
require_once("../Includes/connector.php");

if(empty($_POST['username'])) {
    header ("Location: ../Pages/loginPage.php?error=Username is qequired");
    exit();
} else if(empty($_POST['password'])) {
    header ("Location: ../Pages/loginPage.php?error=Password is qequired");
    exit();
}

$sql = "SELECT id, password FROM users WHERE user_name = :username";

$stmt = $connect->prepare($sql);
$stmt->bindParam(':username', $_POST['username']);
$stmt->execute();
$result = $stmt->fetchAll();

if ($stmt->rowCount() > 0) {
    foreach ($result as $result) {
        if (password_verify($_POST['password'], $result['password'])) {
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $_POST['username'];
            header("Location: ../Adminpages/home.php");
            exit();
        } else {
            // Incorrect password
            header("Location: ../pages/loginPage.php?error=Password or username is incorrect");
            exit();
        }
    }
} else {
    // Incorrect username
    header("Location: ../pages/loginPage.php?error=Password or username is incorrect");
    exit();
}


//$sql = "SELECT id, password FROM users WHERE user_name =:username";
//$stmt = $connect->prepare($sql);
//$stmt->bindParam(":username", $username);
//$stmt->execute();
//$result = $stmt->fetchAll();

//foreach ($result as $result) {
//    if(password_verify($password, $result['password'])) {
//        $_SESSION['user_name'] = $username;
//        $_SESSION['id'] = $result['id'];
//        header("Location: ../Adminpages/home.php");
//        exit();
//    } else {
//        header("Location: ../pages/loginPage.php?error=Password or username is incorrect");
//        exit();
//    }
//}

//header("Location: ../pages/loginPage.php?error=Password or username is incorrect");