<?php
if (isset($_POST['registerSubmit'])) {

	require_once('../Includes/connector.php');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // checks
    $stmt = $connect->prepare("SELECT * FROM users WHERE user_name=?");
    $stmt->execute([$username]); 
    $user = $stmt->fetch();
    if ($user) {
        header ("Location: ../AdminPages/home.php?error=This username is already taken!");
        exit();
    }
    
    if(strlen($password) < 5) {
        header ("Location: ../AdminPages/home.php?error=Password must be at least 5 characters");
        exit();
    } else if($password != $confirmPassword) {
        header ("Location: ../AdminPages/home.php?error=Your passwords do not match");
        exit();
    }
    
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(email, user_name, password) VALUES(:email, :username, :password)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    header ("Location: ../AdminPages/home.php?error=Your account has been registered");

} else {
    header('Location: ../AdminPages/home.php');
}