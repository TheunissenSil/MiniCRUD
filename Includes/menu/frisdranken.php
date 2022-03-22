<?php
    include('../includes/connector.php');

    $result = mysqli_query($conn,"SELECT * FROM `drankjes`");

    while($row = mysqli_fetch_array($result)) {

        $roundendPrice = sprintf('%0.2f', $row['drankPrijs']);

        if($row['category'] === "Frisdranken") {
            echo"<div class='drank'>";
            echo    "<h3>" . $row['drankNaam'] ."</h3>";
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