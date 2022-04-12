<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Menu kaart</title>
  </head>
  <body>
    <?php
      include('../Includes/header.php');
    ?>

    <main>
      <div class="container containerMenu">
          <h2 class="titelStreepje menuTitel">Menu</h2>
          <div class="menuNav">
            <a href="#pizzaMenu">Pizza's</a>
            <a href="#pastaMenu">Pasta's</a>
            <a href="#drankMenu">Drankkaart</a>
          </div>
          <div class="row sectionRow reverseRow">
            <div class="column imageBlock menuImage">
              <img src="../Images/pizza.png" alt="Tomaat foto" />
            </div>
            <div class="column">
              <h2 class="titleLine">Welkom</h2>
              <div class="textLine"></div>
              <p>
                Laat u meevaren met een reis langs de klassiekers en pareltjes uit
                de Italiaanse keuken. Vrij vertaald betekent Osteria ‘herberg’,
                wat Het Witte Huis in de beginjaren was. Pomodoro betekent
                ‘tomaat’, een hoofdingrediënt in de Italiaanse keuken. Wij staan
                voor de hele avond genieten voor een vaste prijs. De gerechten
                zijn medium sized, u kunt per ronde één gerecht kiezen plus een
                contorni (bijgerecht). Wilt u aub voor uw eerste ronde, iets
                kiezen uit de categorie die onder de Antipasti, Zuppa of Primi
                piatti staan. Na elke ronde, komen wij de nieuwe bestelling voor
                de volgende ronde opnemen. De keuken sluit om 22.00u, nagerechten
                kunt u tot 22.30u bestellen. Wij wensen u een fijne en onbezorgde
                tijd bij ons!
              </p>
            </div>
          </div>
        <div id="pizzaMenu">
          <h2 class="menuTitel subTitel">Pizza's</h2>
          <?php 
            $category = "Pizzas";
            include('../Includes/menu/gerechten.php');
          ?>
        </div>
        <div id="pastaMenu">
          <h2 class="menuTitel subTitel">Pasta's</h2>
          <?php 
            $category = "Pastas";
            include('../Includes/menu/gerechten.php');
          ?>
        </div>
        <div id="drankMenu">
          <h2 class="menuTitel subTitel">Drankkaart</h2>
          <div class="drankRow">
            <div class="drankColumn">
              <div class="drankTitel">
                <h2>Frisdranken</h2>
              </div>
              <div class="drankjes">
                <?php 
                  $category = "frisdranken";
                  include('../Includes/menu/drankjes.php');
                ?>
              </div>
            </div>
            <div class="drankColumn">
              <div class="drankTitel">
                <h2>Warme Drankjes</h2>
              </div>
              <div class="drankjes">
                <?php 
                  $category = "Warme Dranken";
                  include('../Includes/menu/drankjes.php');
                ?>
              </div>
            </div>
          </div>
          <div class="drankRow">
            <div class="drankColumn">
              <div class="drankTitel">
                <h2>Wijnkaart</h2>
              </div>
              <div class="drankjes">
                <?php 
                  $category = "Wijnkaart";
                  include('../Includes/menu/drankjes.php');
                ?>
              </div>
            </div>
            <div class="drankColumn">
              <div class="drankTitel">
                <h2>Bierkaart</h2>
              </div>
              <div class="drankjes">
                <?php 
                  $category = "Bierkaart";
                  include('../Includes/menu/drankjes.php');
                ?>
              </div>
            </div>
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
