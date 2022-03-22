<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>

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
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Home Page Admin</title>
    </head>
    <body>
    <?php
      include('../Includes/adminHeader.php');
    ?>
        
    <main class="adminMain tableMain">
        <div class="adminRow tableRow">
            <div>
                <h2>Verander de menukaart</h2>
                <button>Gerecht toevoegen</button>
            </div>
            <table>
                <tr>
                    <th class="gerechtNaam">Gerecht naam</th>
                    <th class="gerechtBeschrijving">Gerecht beschrijving</th>
                    <th class="gerechtPrijs">Gerecht Prijs</th>
                    <th class="gerechtCatagorie">Gerecht Catogorie</th>
                    <th class="gerechtChange">Aanpassen</th>
                    <th class="gerechtDelete">Verwijderen</th>
                </tr>
                <?php
                    include('../Includes/menu/adminGerechten.php')
                ?>
            </table>
        </div>
        <div class="adminRow tableRow">
            <div>
                <h2>Verander het drankmenu</h2>
                <button>Drankje toevoegen</button>
            </div>
            <table>
                <tr>
                    <th class="drankNaam">Drank naam</th>
                    <th class="drankPrijs">Drank Prijs</th>
                    <th class="drankCatagorie">Drank Catogorie</th>
                    <th class="gerechtChange">Aanpassen</th>
                    <th class="gerechtDelete">Verwijderen</th>
                </tr>
                <?php
                    include('../Includes/menu/adminDrankjes.php')
                ?>
            </table>
        </div>
    </main>

    <?php
      include('../Includes/adminFooter.php');
    ?>
    </body>
    </html>

    <?php
} else {
    header("Location: ../Pages/loginPage.php");
    exit();
}?>