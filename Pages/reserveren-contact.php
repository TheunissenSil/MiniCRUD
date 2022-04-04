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
                <?php if(isset($_GET['reserveringError'])) { ?>
                  <h2 style="color: red;" class="titel"><?php echo $_GET['reserveringError']; ?></h2> 
                <?php } else { ?>
                  <h2 class="titel"><?php echo "Reservatie formulier"; ?></h2>
                <?php } ?>
                <form class="reserveren-form formulier" action="../PHP/reservering.php" method="post">
                  <div class="naam-email">
                    <div class="form-element">
                      <input type="text" class="form-input inputForm" placeholder="Volledige naam" name="name"/>
                    </div>

                    <div class="form-element">
                      <input type="email" class="form-input inputForm" placeholder="E-mailadres" name="email"/>
                    </div>
                  </div>

                  <div class="datum-tijd">
                    <div class="personen-tijd form-element ">
                      <input type="Number" max="12" class="form-input inputForm" placeholder="Personen" name="personen"/>
                    </div>

                    <div class="datum form-element ">
                      <input id="datumForm" type="Date" class="form-input inputForm" placeholder="Datum" name="datum"/>
                    </div>

                    <div class="personen-tijd form-element ">
                      <select class="form-input" name="tijd">
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                        <option value="18:30">18:30</option>
                        <option value="19:00">19:00</option>
                        <option value="19:30">19:30</option>
                        <option value="20:00">20:00</option>
                        <option value="20:30">20:30</option>
                        <option value="21:00">21:00</option>
                        <option value="21:30">21:30</option>
                        <option value="22:00">22:00</option>
                        <option value="22:30">22:30</option>
                        <option value="23:00">23:00</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-element">
                    <textarea
                      style="height: 125px"
                      class="form-input"
                      rows="5"
                      placeholder="Bijzonderheden"
                      name="bijzonderheden"
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
                <?php if(isset($_GET['contactError'])) { ?>
                  <h2 style="color: red;" class="titel"><?php echo $_GET['contactError']; ?></h2> 
                <?php } else { ?>
                  <h2 class="titel"><?php echo "Contact formulier"; ?></h2>
                <?php } ?>
                <form class="contact-form formulier2" action="../PHP/contact.php" method="post">
                  <div class="naam-email">
                    <div class="form-element">
                      <input type="text" class="form-input inputForm" placeholder="Volledige naam" name="name"/>
                    </div>

                    <div class="form-element">
                      <input type="email" class="form-input inputForm" placeholder="E-mailadres" name="email"/>
                    </div>
                  </div>

                  <div class="form-element">
                    <input type="text" class="form-input inputForm" placeholder="Onderwerp" name="onderwerp"/>
                  </div>

                  <div class="form-element">
                    <textarea
                      style="height: 154px"
                      class="form-input inputForm"
                      rows="5"
                      placeholder="Bericht"
                      name="bericht"
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
    <script src="../JS/main.js"></script>
  </body>
</html>