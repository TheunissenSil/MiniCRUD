<?php

	require_once('../Includes/connector.php');

    $email = $_POST['email'];

    // checks
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header ("Location: ../Pages/reserveren-contact.php?reserveringError=Email must be an valid email adres");
        exit();
    }

    $data = [
        'name' => $_POST['name'],
        'email' => $email,
        'personen' => $_POST['personen'],
        'datum' => $_POST['datum'],
        'tijd' => $_POST['tijd'],
        'bijzonderheden' => $_POST['bijzonderheden'],
    ];
    
    $sql = "INSERT INTO reserveringen(naam, email, personen, datum, tijd, bijzonderheden) VALUES(:name, :email, :personen, :datum, :tijd, :bijzonderheden)";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    header ("Location: ../Pages/reserveren-contact.php?reserveringError=Bedankt voor uw reservering");