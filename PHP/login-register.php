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
    <title>MiniCRUD</title>
  </head>
  <body>
    <section id="start">
        <div class="loginRegisterContainer">
            <div class="login-register login">
                <h2>Login</h2>
                <form>
                    <h3>Username</h3>
                    <input placeholder="Uw username....." type="text">
                    <h3>Password</h3>
                    <input placeholder="Uw password....." type="Password">
                    <input type="submit" value="Login" class="submitLogin-register">
                </form>
            </div>
            <div class="login-register register">
                <h2>Registreer</h2>
                <form>
                    <h3>Uw email</h3>
                    <input placeholder="Uw e-mail adres....." type="emai">
                    <h3>Kies een username</h3>
                    <input placeholder="Uw gekozen username....." type="text">
                    <h3>Kies een wachtwoord</h3>
                    <input placeholder="Uw gekozen wachtwoord....." type="Password">
                    <h3>Confirm het wachtwoord</h3>
                    <input placeholder="Confirm het wachtwoord....." type="Password">
                    <input type="submit" value="Registreer" class="submitLogin-register">
                </form>
            </div>
            <div class="buttons">
                <button onclick="login()">Login</button>
                <a href="../index.php"><button>Back to home</button></a>
                <button onclick="register()">Registreren</button>
            </div>
        </div>
    </section>
    <script src="../JS/main.js"></script>
  </body>
</html>