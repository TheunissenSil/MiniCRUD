<?php
include_once("../Includes/session.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
    href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap"
    rel="stylesheet"
    />
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="../CSS/style.css" />
    <title>Home Page Admin</title>
</head>
<body>
    <section id="start" class="changeMenuFormPage">
    <div class="adminFormContainer">
        <div class="adminForm" id="gerechtenForm">
            <h2>Gerechten toevoegen of aanpassen</h2>
            <form class="formulier" action="../PHP/gerechten.php<?php if(isset($_GET['id'])){echo "?id=" . $_GET['id'];} ?>" method="post">
                <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <h3>Naam van het gerecht</h3>
                <input
                value="<?php if(isset($_GET['gerechtNaam'])){echo $_GET['gerechtNaam'];} ?>"
                class="inputForm"
                placeholder="Naam van het gerecht"
                type="text"
                name="gerechtNaam"
                />
                <h3>Beschrijving van het gerecht</h3>
                <input
                value="<?php if(isset($_GET['gerechtBeschrijving'])){echo $_GET['gerechtBeschrijving'];} ?>"
                class="inputForm"
                placeholder="Gerecht beschrijving....."
                type="text"
                name="gerechtBeschrijving"
                />
                <h3>Prijs van het gerecht</h3>
                <input
                class="inputForm"
                value="<?php if(isset($_GET['gerechtPrijs'])){echo $_GET['gerechtPrijs'];} ?>"
                placeholder="Gerecht prijs....."
                type="number"
                min="0"
                step="0.01"
                name="gerechtPrijs"
                />
                <h3>Kies de categorie van het gerecht</h3>
                <select class="inputForm" name="gerechtCategory">
                    <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "Pizzas"){echo "selected='selected'";}} ?> value="Pizzas">Pizza's</option>
                    <option <?php if(isset($_GET['gerechtCategory'])){if($_GET['gerechtCategory'] === "Pastas"){echo "selected='selected'";}} ?> value="Pastas">Pasta's</option>
                </select>
                <input type="submit" value="Verzend" class="submitadminForm" name="gerechtSubmit"/>
            </form>
        </div>
        <div class="adminForm" id="drankjesForm">
            <h2>Drankjes toevoegen of aanpassen</h2>
            <form class="formulier2" action="../PHP/drankjes.php<?php if(isset($_GET['id'])){echo "?id=" . $_GET['id'];} ?>" method="post">
                <?php if(isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <h3>Naam van het drankje</h3>
                <input
                value="<?php if(isset($_GET['drankjesNaam'])){echo $_GET['drankjesNaam'];} ?>"
                class="inputForm"
                placeholder="Naam van het drankje....."
                type="text"
                name="drankjesNaam"
                />
                <h3>Prijs van het drankje</h3>
                <input
                value="<?php if(isset($_GET['drankjesPrijs'])){echo $_GET['drankjesPrijs'];} ?>"
                class="inputForm"
                placeholder="Prijs van het drankje....."
                type="number"
                min="0"
                step="0.01"
                name="drankjesPrijs"
                />
                <h3>Kies de categorie van het gerecht</h3>
                <select
                class="inputForm"
                name="drankjesCategory"
                >
                    <option <?php if(isset($_GET['drankjesCategory'])){if($_GET['drankjesCategory'] === "Frisdranken"){echo "selected='selected'";}} ?> value="Frisdranken">Frisdranken</option>
                    <option <?php if(isset($_GET['drankjesCategory'])){if($_GET['drankjesCategory'] === "Bierkaart"){echo "selected='selected'";}} ?> value="Bierkaart">Bierkaart</option>
                    <option <?php if(isset($_GET['drankjesCategory'])){if($_GET['drankjesCategory'] === "Warme Dranken"){echo "selected='selected'";}} ?> value="Warme Dranken">Warme Dranken</option>
                    <option <?php if(isset($_GET['drankjesCategory'])){if($_GET['drankjesCategory'] === "Wijnkaart"){echo "selected='selected'";}} ?> value="Wijnkaart">Wijnkaart</option>
                </select>
                <input type="submit" value="Verzend" class="submitadminForm" name="drankjesSubmit"/>
            </form>
        </div>
        <div class="menuFormbuttons">
            <a href="changeMenuForm.php#gerechtenForm"><button id="gerechtenButton">Gerechten</button></a>
            <a href="changeMenu.php"><button>Back to menu</button></a>
            <a href="changeMenuForm.php#drankjesForm"><button id="drankjesButton">Drankjes</button></a>
        </div>
    </div>
    </section>
    <script src="../JS/main.js"></script>
</body>
</html>
