<?php

	require_once('../Includes/connector.php');

    $email = $_POST['email'];

    // checks
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: ../Pages/reserveren-contact.php?contactError=Email must be an valid email adres");
        exit();
    }

    $data = [
        'name' => $_POST['name'],
        'email' => $email,
        'onderwerp' => $_POST['onderwerp'],
        'bericht' => $_POST['bericht'],
    ];
    
    $sql = "INSERT INTO contact(naam, email, onderwerp, bericht) VALUES(:name, :email, :onderwerp, :bericht)";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    header ("Location: ../Pages/reserveren-contact.php?contactError=Bedankt voor uw bericht");