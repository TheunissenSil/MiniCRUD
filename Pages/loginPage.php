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
          <form id="loginPage" action="../PHP/login.php" method="post">
            <?php if(isset($_GET['error'])) { ?>
              <p class="error"> <?php echo $_GET['error']; ?></p>
             <?php } ?>
            <h3>Username</h3>
            <input id="username" placeholder="Uw username....." type="text" name="username">
            <h3>Password</h3>
            <input placeholder="Uw password....." type="Password" name="password">
            <input type="submit" value="Login" class="submitLogin-register">
          </form>
        </div>
        <div class="buttons">
          <a href="../index.php"><button>Back to home</button></a>
        </div>
      </div>
    </section>
    <script src="../JS/main.js"></script>
  </body>
</html>