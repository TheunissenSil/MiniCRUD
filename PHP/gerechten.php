<?php
require_once("../Includes/connector.php");

$_POST['gerechtPrijs'] = str_replace(",",".", $_POST['gerechtPrijs']);

if(isset($_GET['id'])) {
    // Update
    $data = [
        ':id' => $_GET['id'],
        ':gerechtNaam' => $_POST['gerechtNaam'],
        ':gerechtBeschrijving' => $_POST['gerechtBeschrijving'],
        ':gerechtPrijs' => $_POST['gerechtPrijs'],
        ':category' => $_POST['gerechtCategory'],
    ];
    
    $sql = "UPDATE gerechten SET gerechtNaam = :gerechtNaam, gerechtBeschrijving = :gerechtBeschrijving, gerechtPrijs = :gerechtPrijs, category = :category WHERE  id = :id";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    header ("Location: ../AdminPages/changeMenuForm.php?error=Het gerecht is veranderd op de menukaart!#gerechtenForm");
} else {
    // Create
    $data = [
        ':gerechtNaam' => $_POST['gerechtNaam'],
        ':gerechtBeschrijving' => $_POST['gerechtBeschrijving'],
        ':gerechtPrijs' => $_POST['gerechtPrijs'],
        ':category' => $_POST['gerechtCategory'],
    ];
    
    $sql = "INSERT INTO gerechten(gerechtNaam, gerechtBeschrijving, gerechtPrijs, category) VALUES(:gerechtNaam, :gerechtBeschrijving, :gerechtPrijs, :category)";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    header ("Location: ../AdminPages/changeMenuForm.php?error=Het gerecht is toegevoegd aan de menukaart!#gerechtenForm");
}