<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css" />
    <title>MiniCRUD</title>
  </head>
  <body>
    <header></header>
    <main>
      <div>
        <form action="uitkomst.php" method="post">
          <p id="username">Username:</p>
          <input type="text" name="username" placeholder="Username....."><br>
          <p>Wachtwoord:</p>
          <input type="password" name="wachtwoord" placeholder="Wachtwoord....."><br>
          <p>Leeftijd:</p>
          <input type="number" name="leeftijd" placeholder="Leeftijd....."><br>
          <input type="submit" value="doorgaan" name="knop">
        </form>
      </div>
    </main>
    <footer></footer>
    <script src="js/main.js"></script>
  </body>
</html>
