<?php
require_once("../Includes/connector.php");
$sql = "SELECT * FROM gerechten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){

        $roundendPrice = sprintf('%0.2f', $result['gerechtPrijs']);

        if($result['category'] === "Pasta's") 
        {

            echo "<div class='gerecht'>";
            echo    "<div>";
            echo        "<h3>" . $row['gerechtNaam'] . "</h3>";
            echo        "<p>" . $row['gerechtBeschrijving'] . "</p>";
            echo    "</div>";
            echo    "<div class='priceCart'>";
            echo        "<h3 class='priceTag'>€" . $roundendPrice . "</h3>";
            echo        "<button class='addToCart'>";
            echo            "<i class='fa fa-plus'></i><i class='fa fa-cart-plus'></i>";
            echo        "</button>";
            echo    "</div>";
            echo"</div>";

        }
    }