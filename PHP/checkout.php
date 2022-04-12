<?php
if (isset($_POST['checkoutBtn'])) {
    session_start();
    require_once('../Includes/connector.php');

    $aantalItems = 0;
    $prijs = 0.0;
    $producten = null;

    foreach($_SESSION['shoppingCart'] as $product) {
        $producten = $producten . ($product['naam'] . " " . (string)$product['amount'] . "x, ");

        $aantalItems = $aantalItems + $product['amount'];

        $prijs = $prijs + ($product['prijs'] * $product['amount']);
    }

    $totaalPrijs = $prijs * 1.21 + 2.50;
    $totaalPrijsAfgerond = sprintf('%0.2f', $totaalPrijs);

    $sql = "INSERT INTO bestellingen(producten, prijs, aantal) VALUES(:producten, :prijs, :aantal)";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(':producten', $producten);
    $stmt->bindParam(':prijs', $totaalPrijsAfgerond);
    $stmt->bindParam(':aantal', $aantalItems);
    $stmt->execute();

    unset($_SESSION['shoppingCart']);

    header('Location: ../Pages/shoppingCart.php?error=Bedankt voor uw bestelling!');

} else {
    header('Location: ../Pages/shoppingCart.php');
}