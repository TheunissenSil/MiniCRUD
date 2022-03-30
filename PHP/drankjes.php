<?php
require_once("../Includes/connector.php");

$_POST['drankjesPrijs'] = str_replace(",",".", $_POST['drankjesPrijs']);

if(isset($_GET['id'])) {
    // Update
    $data = [
        ':id' => $_GET['id'],
        ':drankjesNaam' => $_POST['drankjesNaam'],
        ':drankjesPrijs' => $_POST['drankjesPrijs'],
        ':category' => $_POST['drankjesCategory'],
    ];
    
    $sql = "UPDATE drankjes SET drankNaam = :drankjesNaam, drankPrijs = :drankjesPrijs, category = :category WHERE  id = :id";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    header ("Location: ../AdminPages/changeMenuForm.php?error=Het drankje is veranderd op de menukaart!#drankjesForm");
} else {
    // Create
    $data = [
        ':drankjesNaam' => $_POST['drankjesNaam'],
        ':drankjesPrijs' => $_POST['drankjesPrijs'],
        ':category' => $_POST['drankjesCategory'],
    ];
    
    $sql = "INSERT INTO drankjes(drankNaam, drankPrijs, category) VALUES(:drankjesNaam, :drankjesPrijs, :category)";

    $stmt = $connect->prepare($sql);
    $stmt->execute($data);

    header ("Location: ../AdminPages/changeMenuForm.php?error=Het drankje is toegevoegd aan de menukaart!#drankjesForm");
}