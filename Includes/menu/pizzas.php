<?php
    include('../includes/connector.php');

    $result = mysqli_query($conn,"SELECT * FROM `gerechten`");

    while($row = mysqli_fetch_array($result)) {

        $roundendPrice = sprintf('%0.2f', $row['gerechtPrijs']);

        if($row['category'] === "Pizza's") {
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
?>