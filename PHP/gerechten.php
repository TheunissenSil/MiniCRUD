<?php
if(isset($_POST['gerechtSubmit'])) {
    require_once("../Includes/connector.php");

    $_POST['gerechtPrijs'] = str_replace(",",".", $_POST['gerechtPrijs']);

    if(isset($_GET['id'])) {
        // Update
        $sql = "UPDATE gerechten SET gerechtNaam = :gerechtNaam, gerechtBeschrijving = :gerechtBeschrijving, gerechtPrijs = :gerechtPrijs, category = :category WHERE  id = :id";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':id', $_GET['id']);
        $stmt->bindParam(':gerechtNaam', $_POST['gerechtNaam']);
        $stmt->bindParam(':gerechtBeschrijving', $_POST['gerechtBeschrijving']);
        $stmt->bindParam(':gerechtPrijs', $_POST['gerechtPrijs']);
        $stmt->bindParam(':category', $_POST['gerechtCategory']);
        $stmt->execute($data);

        header ("Location: ../AdminPages/changeMenuForm.php?error=Het gerecht is veranderd op de menukaart!#gerechtenForm");
    } else {
        // Create
        $sql = "INSERT INTO gerechten(gerechtNaam, gerechtBeschrijving, gerechtPrijs, category) VALUES(:gerechtNaam, :gerechtBeschrijving, :gerechtPrijs, :category)";

        $stmt = $connect->prepare($sql);
        $stmt->bindParam(':gerechtNaam', $_POST['gerechtNaam']);
        $stmt->bindParam(':gerechtBeschrijving', $_POST['gerechtBeschrijving']);
        $stmt->bindParam(':gerechtPrijs', $_POST['gerechtPrijs']);
        $stmt->bindParam(':category', $_POST['gerechtCategory']);
        $stmt->execute();

        header ("Location: ../AdminPages/changeMenuForm.php?error=Het gerecht is toegevoegd aan de menukaart!#gerechtenForm");
    }
} else {
    header ("Location: ../AdminPages/changeMenuForm.php");
}