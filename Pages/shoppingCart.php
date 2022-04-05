<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Winkelmandje</title>
  </head>
  <body>
    <?php
      include('../Includes/header.php');
    ?>

    <main class="shoppingCartMain">
      <div class="shoppingCartContainer">
        <div class="shoppingCartItems containerMenu">
        <?php
          require_once("../Includes/connector.php");

          $sql = "SELECT * FROM gerechten";
          $stmt = $connect->prepare($sql);
          $stmt->execute();
          $result = $stmt->fetchAll();

          foreach ($result as $result){

              $roundendPrice = sprintf('%0.2f', $result['gerechtPrijs']);

              echo"<div class='gerecht'>";
              echo    "<div>";
              echo        "<h3>" . $result['gerechtNaam'] . "</h3>";
              echo        "<p>" . $result['gerechtBeschrijving'] . "</p>";
              echo    "</div>";
              echo    "<div class='priceCart'>";
              echo        "<h3 class='priceTag'>€" . $roundendPrice . "</h3>";
              echo        "<button class='addToCart'>";
              echo            "<i class='fa fa-plus'></i><i class='fa fa-cart-plus'></i>";
              echo        "</button>";
              echo    "</div>";
              echo"</div>";
          }
        ?>
        </div>
        <div class="shoppingCartPrice">
          <div class="finishOrder">
            <h2>Afrekenen:</h2>
            <div><p>Aantal items:</p><p>3 items</p></div>
            <div><p>Prijs:</p><p>5 euro</p></div>
            <div class="streepje"></div>
            <div><p>Bezorgkosten:</p><p>2.50 euro</p></div>
            <div><p>BTW:</p><p>21%</p></div>
            <div class="streepje"></div>
            <div><p>Totaalprijs:</p><p>10 euro</p></div>
            <button>Betaal</button>
          </div>
        </div>
      </div>
    </main>

    <?php
      include('../Includes/footer.php');
    ?>
    <script src="../JS/main.js"></script>
  </body>
</html>