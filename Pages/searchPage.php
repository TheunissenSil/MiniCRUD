<?php
if (!isset($_GET['searchInput'])) {
    header("Location: ../index.php");
} 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../CSS/style.css" />
        <title>MiniCRUD</title>
    </head>
    <body>
    <?php
      include('../Includes/header.php');
    ?>
    <main class="searchMain">
        <div class="containerMenu searchMenu">
            <?php
                require_once("../Includes/connector.php");
                $likeInput = '%'.$_GET['searchInput'].'%';

                // Gerechten
                $sql = "SELECT * FROM gerechten WHERE gerechtNaam LIKE :input OR gerechtBeschrijving LIKE :input2 OR category LIKE :input3";
                $stmt = $connect->prepare($sql);
                $stmt->bindParam(":input", $likeInput);
                $stmt->bindParam(":input2", $likeInput);
                $stmt->bindParam(":input3", $likeInput);
                $stmt->execute();
                $results = $stmt->fetchAll();

                $gerechtenSearch = false;
                if ($stmt->rowCount() > 0) {
                    $gerechtenSearch = true;
                }

                foreach ($results as $result){

                    $roundendPrice = sprintf('%0.2f', $result['gerechtPrijs']);

                    echo"<div class='gerecht'>";
                    echo    "<div>";
                    echo        "<h3>" . $result['gerechtNaam'] . " || " . $result['category'] . "</h3>";
                    echo        "<p>" . $result['gerechtBeschrijving'] . "</p>";
                    echo    "</div>";
                    echo    "<div class='priceCart'>";
                    echo        "<h3 class='priceTag'>€" . $roundendPrice . "</h3>";
                    echo        "<form action='../Pages/shoppingCart.php?id=" . $result['id'] . "&naam=" . $result['gerechtNaam'] . "&prijs=" . $roundendPrice . "&category=" . $result['category'] . "' method='post'>";   
                    echo            "<button type='submit' name='add_to_cart' class='addToCart'>";
                    echo                "<i class='fa fa-plus'></i><i class='fa fa-cart-plus'></i>";
                    echo            "</button>";
                    echo        "</form>";
                    echo    "</div>";
                    echo"</div>";
                }

                // Drankjes
                $sql = "SELECT * FROM drankjes WHERE drankNaam LIKE :input OR category LIKE :input2";
                $stmt = $connect->prepare($sql);
                $stmt->bindParam(":input", $likeInput);
                $stmt->bindParam(":input2", $likeInput);
                $stmt->execute();
                $results = $stmt->fetchAll();

                $drankejesSearch = false;
                if ($stmt->rowCount() > 0) {
                    $drankejesSearch = true;
                }

                foreach ($results as $result){

                    $roundendPrice = sprintf('%0.2f', $result['drankPrijs']);

                    echo"<div class='gerecht'>";
                    echo    "<div>";
                    echo        "<h3>" . $result['drankNaam'] . "</h3>";
                    echo        "<p>" . $result['category'] . "</p>";
                    echo    "</div>";
                    echo    "<div class='priceCart'>";
                    echo        "<h3 class='priceTag'>€" . $roundendPrice . "</h3>";
                    echo        "<form action='../Pages/shoppingCart.php?id=" . $result['id'] . "&naam=" . $result['gerechtNaam'] . "&prijs=" . $roundendPrice . "&category=" . $result['category'] . "' method='post'>";   
                    echo            "<button type='submit' name='add_to_cart' class='addToCart'>";
                    echo                "<i class='fa fa-plus'></i><i class='fa fa-cart-plus'></i>";
                    echo            "</button>";
                    echo        "</form>";
                    echo    "</div>";
                    echo"</div>";
                }

                // Niks gevonden
                if ($gerechtenSearch === false and $drankejesSearch === false) {
                    echo"<div class='niksGevonden'>";
                    echo    "<h2>We hebben helaas niks kunnen vinden bij voorgerechten op " . $_GET['searchInput'] . ".</h2>";
                    echo    "<h3>Probeer op een naam beschrijving of catogorie te zoeken.</h3>";
                    echo"</div>";
                }
            ?>
        </div>
    </main>
    <?php
      include('../Includes/footer.php');
    ?>
    <script src="../JS/main.js"></script>
    </body>
</html>