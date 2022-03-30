<?php

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

    $data = [
        'email' => $email,
        'username' => $username,
        'password' => $password,
    ];
    
    $sql = "INSERT INTO users(email, user_name, password) VALUES(:email, :username, :password)";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    header ("Location: ../AdminPages/home.php?error=Your account has been registered");