<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/style.css" />
    <title>MiniCRUD</title>
  </head>
  <body>
    <?php
      include('Includes/header.php');
    ?>

    <section id="start">
      <div class="landingPageInfo">
        <div class="pasFoto">
          <img class="pasFotoImg" src="Images/logo.png" alt="Logo Pomodoro" />
        </div>

        <div class="landingPageText">
          <h1>Pomodoro</h1>
          <p>Pastoor van Laakstraat 54 Lent (Nijmegen)</p>

          <div class="socialMediaLinks">
            <a target=”_blank” href="https://www.instagram.com/osteria_pomodoro/" class="fa fa-instagram"></a>

            <a target=”_blank” href="https://www.facebook.com/Osteria-Pomodoro-2184478194950467/" class="fa fa-facebook"></a>

            <a target=”_blank” href="https://www.linkedin.com/company/pomodoro-group/about/" class="fa fa-linkedin"></a>

          </div>
        </div>
      </div>
    </section>
    <main>
      <div id="pageAbout"></div>
      <div class="row reverseRow">
        <div class="column imageBlock">
          <img src="Images/tomato.png" alt="Tomaat foto">
        </div>
        <div class="column">
          <h2 class="titleLine">Een uniek Italiaans restaurant in Lent, nabij Nijmegen</h2>
          <div class="textLine"></div>
          <p>Of u nu op date gaat of met de hele familie komt eten; bij Italiaans restaurant Osteria Pomodoro nabij Nijmegen geniet u altijd van heerlijk eten. Ons restaurant is gevestigd in Lent, vlak bij Nijmegen, en hier kunt u heerlijke Italiaanse tapas eten. Met vermaak voor kinderen en tieners, goede wijn en heerlijk eten heeft iedereen het hier naar zijn of haar zin. Voor een vaste prijs bent u de hele avond onder de pannen. Voor kinderen van vier tot en met elf jaar betaalt u slechts € 1,- per levensjaar. Dat wordt dus kiezen uit Italiaanse klassiekers tot u niet meer kunt. Buon appetito!</p>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <h2 class="titleLine">Een Italiaans restaurant nabij Nijmegen met authentieke tapas voor een vaste prijs</h2>
          <div class="textLine"></div>
          <p>
            Een Italiaans restaurant nabij Nijmegen met authentieke tapas voor een vaste prijs
            Bij ons restaurant in de buurt van Nijmegen, komt u echte Italiaanse tapas eten. Alles is met verse ingrediënten en volgens Italiaans recept bereid. En dat proeft u! Bovendien geniet u bij ons de hele avond onbezorgd, want u betaalt slechts € 31,50 p.p. met ouderwets laaggeprijsde drankjes. Komt u vroeg op de avond Italiaanse tapas eten? Dan profiteert u van onze ‘vroege-vork-actie’. Deze actie start tussen 16.15 uur en 17.00 uur en eindigt om 19.00 uur (uw tafel is tot maximaal 19.00 uur voor u gereserveerd) € 26,50 p.p. Komt u liever wat later eten? Ga dan voor de 'late vork'. Starten om 20.00-20.15 uur tot 22.30 voor maar € 27,50 p.p.
            Geef eens een cadeaucheque, een heerlijk cadeau! Al mogelijk vanaf 15,-.
          </p>
        </div>
        <div class="column imageBlock">
          <img src="Images/groupen.png" alt="">
        </div>
      </div>
    </main>
    
    <?php
      include('Includes/footer.php');
    ?>
    <script
      src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
      integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
      crossorigin="anonymous">
    </script>
    <script src="JS/main.js"></script>
  </body>
</html>
