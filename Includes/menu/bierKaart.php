<?php
require_once("../Includes/connector.php");
$sql = "SELECT * FROM drankjes WHERE category = 'Bierkaart'";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $result){

    $roundendPrice = sprintf('%0.2f', $result['drankPrijs']);

    echo"<div class='drank'>";
    echo    "<h3>" . $result['drankNaam'] ."</h3>";
    echo    "<div class='priceCart priceCartDrank'>";
    echo        "<h3 class='priceTag'>€" . $roundendPrice . "</h3>";
    echo        "<form action='../Pages/shoppingCart.php?id=" . $result['id'] . "&naam=" . $result['drankNaam'] . "&prijs=" . $roundendPrice . "&category=" . $result['category'] . "' method='post'>";   
    echo            "<button type='submit' name='add_to_cart' class='addToCart'>";
    echo                "<i class='fa fa-plus'></i><i class='fa fa-cart-plus'></i>";
    echo            "</button>";
    echo        "</form>";
    echo    "</div>";
    echo"</div>";
}
