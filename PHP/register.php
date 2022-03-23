<?php

	require_once('../Includes/connector.php');

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    // checks
    if(empty($username)) {
        header ("Location: ../AdminPages/home.php?error=Username is required");
        exit();
    }

    if(empty($email)){
        header ("Location: ../AdminPages/home.php?error=Email is required");
        exit();
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: ../AdminPages/home.php?error=Email must be an valid email adres");
        exit();
    }
    
    if(empty($password)) {
        header ("Location: ../AdminPages/home.php?error=Password is required");
        exit();
    } else if(strlen($password) < 5) {
        header ("Location: ../AdminPages/home.php?error=Password must be at least 5 characters");
        exit();
    }

    if(empty($confirmPassword)) {
        header ("Location: ../AdminPages/home.php?error=Confirm your Password");
        exit();
    } else if($password != $confirmPassword) {
        header ("Location: ../AdminPages/home.php?error=Your passwords do not match");
        exit();
    }
    
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(email,user_name,password) VALUES('$email','$username','$password')";

    if(mysqli_query($connect, $sql)){
	    header('Location: ../Pages/loginPage.php');
    } else {
	    echo 'query error: '. mysqli_error($connect);
    }