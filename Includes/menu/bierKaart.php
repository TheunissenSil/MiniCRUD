<?php
require_once("../Includes/connector.php");
$sql = "SELECT * FROM drankjes";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){

        $roundendPrice = sprintf('%0.2f', $result['drankPrijs']);

        if($result['category'] === "Bierkaart") {
            echo"<div class='drank'>";
            echo    "<h3>" . $result['drankNaam'] ."</h3>";
            echo    "<div class='priceCart priceCartDrank'>";
            echo        "<h3 class='priceTag'>€" . $roundendPrice . "</h3>";
            echo        "<button class='addToCart'>";
            echo            "<i class='fa fa-plus'></i><i class='fa fa-cart-plus'></i>";
            echo        "</button>";
            echo    "</div>";
            echo"</div>";
        } 
    }
?>