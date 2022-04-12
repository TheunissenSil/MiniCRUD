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
      <?php
        // Add to cart 
        if (isset($_POST['add_to_cart'])) {

          if (isset($_SESSION['shoppingCart'])) {
          
            $place = array_search($_GET['id'], array_column($_SESSION['shoppingCart'], 'id'));
          
            $exists = false;

            $amount = $_SESSION['shoppingCart'][$place]['amount'];

            foreach($_SESSION['shoppingCart'] as $current) {
              if ($current['id'] == $_GET['id']) {
                $amount++;
                $exists = TRUE;
              }
            }

            if ($exists == TRUE) {

              $_SESSION['shoppingCart'][$place]['amount'] = $amount;
              header('Location: ../Pages/shoppingCart.php');
              
            } else {

              $count = count($_SESSION['shoppingCart']);
              $_SESSION['shoppingCart'][$count] = array(
                      
                'id' => $_GET['id'],
                'amount' => 1,
                'naam' => $_GET['naam'],
                'prijs' => $_GET['prijs'],
                'category' => $_GET['category'],
    
              );
              header('Location: ../Pages/menu.php');

            }

          } else {

            $_SESSION['shoppingCart'][0] = array(
      
              'id' => $_GET['id'],
              'amount' => 1,
              'naam' => $_GET['naam'],
              'prijs' => $_GET['prijs'],
              'category' => $_GET['category'],
    
            );
            header('Location: ../Pages/menu.php');

          }

        }

        // Remove from cart
        if (isset($_POST['remove_from_cart'])) {

          $place = array_search($_GET['id'], array_column($_SESSION['shoppingCart'], 'id'));

          $amount = $_SESSION['shoppingCart'][$place]['amount'];

          if ($amount > 1) {

            $amount--;
            $_SESSION['shoppingCart'][$place]['amount'] = $amount;
            header('Location: ../Pages/shoppingCart.php');

          } else {

            unset($_SESSION['shoppingCart'][$place]);
            $_SESSION['shoppingCart'] = array_values($_SESSION['shoppingCart']);
            header('Location: ../Pages/shoppingCart.php');

          }
        }

        // Display cart
        if(!empty($_SESSION['shoppingCart'])){
          echo"<div class='shoppingCartContainer'>";
            echo"<div class='shoppingCartItems containerMenu'>";
              foreach($_SESSION['shoppingCart'] as $product) {
                echo"<div class='gerecht'>";
                echo    "<div>";
                echo        "<h3>" . $product['naam'] . "</h3>";
                echo        "<p>" . $product['category'] . "</p>";
                echo    "</div>";
                echo    "<div class='priceCart'>";
                echo        "<h3 class='priceTag'>€" . $product['prijs'] . "</h3>";
                echo        "<form action='../Pages/shoppingCart.php?id=" . $product['id'] . "' method='post'>";   
                echo            "<button type='submit' name='remove_from_cart' class='shoppingCartButton'>";
                echo                "<i class='fa fa-minus'></i>";
                echo            "</button>";
                echo        "</form>";
                echo        "<h3 class='inShoppingCartAmount'>" . $product['amount'] . "x</h3>";
                echo        "<form action='../Pages/shoppingCart.php?id=" . $product['id'] . "' method='post'>";   
                echo            "<button type='submit' name='add_to_cart' class='shoppingCartButton'>";
                echo                "<i class='fa fa-plus'></i>";
                echo            "</button>";
                echo        "</form>";
                echo    "</div>";
                echo"</div>";
              }

            // Afrekenen!
            $aantalItems = 0;
            $prijs = 0.0;

            foreach($_SESSION['shoppingCart'] as $product) {
              $aantalItems = $aantalItems + $product['amount'];

              $prijs = $prijs + ($product['prijs'] * $product['amount']);
            }

            $totaalPrijs = $prijs * 1.21 + 2.50;
            
            $prijsAfgerond = sprintf('%0.2f', $prijs);
            $totaalPrijsAfgerond = sprintf('%0.2f', $totaalPrijs);

            echo"</div>";
            echo"<div class='shoppingCartPrice'>";
              echo"<div class='finishOrder'>";
                echo"<h2>Afrekenen:</h2>";
                echo"<div><p>Aantal items:</p><p>" . $aantalItems . " items</p></div>";
                echo"<div><p>Prijs:</p><p>€" . $prijsAfgerond . "</p></div>";
                echo"<div class='streepje'></div>";
                echo"<div><p>Bezorgkosten:</p><p>2.50 euro</p></div>";
                echo"<div><p>BTW:</p><p>21%</p></div>";
                echo"<div class='streepje'></div>";
                echo"<div><p>Totaalprijs:</p><p>€" . $totaalPrijsAfgerond . "</p></div>";
                echo"<form action='../PHP/checkout.php' method='post'>";
                echo  "<button type='submit' name='checkoutBtn'>Betaal</button>";
                echo"</form>";
              echo"</div>";
            echo"</div>";
          echo"</div>";

        // Winkelmandje is leeg  
        } else {
          echo"<div class='emptyCard'>";
          echo  "<h2>Uw winkelmandje is leeg!</h2>";
          echo"</div>";
        }
      ?>
    </main>

    <?php
      include('../Includes/footer.php');
    ?>
    <script src="../JS/main.js"></script>
  </body>
</html>