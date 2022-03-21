<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Reserveren / Contact</title>
  </head>
  <body>
    <?php
      include('../Includes/header.php');
    ?>

    <main>
      <div class="container">
        <section id="reserveren">
          <h2 class="titelStreepje">Reserveren</h2>
          <div class="row sectionRow reverseRow">
            <div class="column">
              <div class="contact-reserveren">
                <h2 class="titel">Reservatie formulier</h2>
                <form class="reserveren-form">
                  <div class="naam-email">
                    <div class="form-element">
                      <input type="text" class="form-input" placeholder="Volledige naam" />
                    </div>

                    <div class="form-element">
                      <input type="email" class="form-input" placeholder="E-mailadres" />
                    </div>
                  </div>

                  <div class="datum-tijd">
                    <div class="personen-tijd form-element ">
                      <input type="Number" class="form-input" placeholder="Personen" />
                    </div>

                    <div class="datum form-element ">
                      <input type="Date" class="form-input" placeholder="Datum" />
                    </div>

                    <div class="personen-tijd form-element ">
                      <input type="time" class="form-input" placeholder="Tijd" />
                    </div>
                  </div>

                  <div class="form-element">
                    <textarea
                      style="height: 125px"
                      class="form-input"
                      rows="5"
                      placeholder="Bijzonderheden"
                    ></textarea>
                  </div>

                  <div class="form-submit">
                    <input type="submit" class="submit-button" />
                  </div>
                </form>
              </div>
            </div>
            <div class="column">
              <h2 class="titleLine">U bent van harte welkom</h2>
              <div class="textLine"></div>
              <p>
                Telefoonnummer:
                <br>
                024-3224506 <br><br>
                email: <br>
                info@osteriapomodoro.nl <br><br>
                adres: <br>
                Pastoor van Laakstraat 54 <br>
                6663CB Lent
              </p>
            </div>
          </div>
        </section>
        <section id="contact">
          <h2 class="titelStreepje">Contact</h2>
          <div class="row sectionRow reverseRow">
            <div class="column">
              <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Pastoor%20van%20Laakstraat%2054%20Lent&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
            </div>
            <div class="column">
              <div class="contact-reserveren">
                <h2 class="titel">Contact formulier</h2>
                <form class="contact-form">
                  <div class="naam-email">
                    <div class="form-element">
                      <input type="text" class="form-input" placeholder="Volledige naam" />
                    </div>

                    <div class="form-element">
                      <input type="email" class="form-input" placeholder="E-mailadres" />
                    </div>
                  </div>

                  <div class="form-element">
                    <input type="text" class="form-input" placeholder="Onderwerp" />
                  </div>

                  <div class="form-element">
                    <textarea
                      style="height: 154px"
                      class="form-input"
                      rows="5"
                      placeholder="Bericht"
                    ></textarea>
                  </div>

                  <div class="form-submit">
                    <input type="submit" class="submit-button" />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>

    <?php
      include('../Includes/footer.php');
    ?>
    <script src="JS/main.js"></script>
  </body>
</html>