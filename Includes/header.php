<header>
      <section class="navagationbar">
        <?php  
          if (file_exists('index.php')) {
            echo "<a href='index.php#start' id='logo'><h2>Pomodoro</h2></a>";
          } else {
            echo "<a href='../index.php#start' id='logo'><h2>Pomodoro</h2></a>";
          }
        ?>

        <input class="searchBar" type="search" placeholder="Zoek een gerecht">

        <label for="toggle-1" class="toggle-menu"
          ><ul>
            <li></li>
            <li></li>
            <li></li></ul
        ></label>

        <input type="checkbox" id="toggle-1" />

        <nav>
          <ul>
            <?php  
              if (file_exists('index.php')) {
                echo "<li><a href='index.php#start'>Home</a></li>";
              } else {
                echo "<li><a href='../index.php#start'>Home</a></li>";
              }
            ?>
            <?php  
               if (file_exists('index.php')) {
                echo "<li><a href='index.php#pageAbout'>About</a></li>";
              } else {
                echo "<li><a href='../index.php#pageAbout'>About</a></li>";
              }
            ?>
            <?php  
              if (file_exists('index.php')) {
                echo "<li><a href='PHP/menu.php'>Menu</a></li>";
              } else {
                echo "<li><a href='menu.php'>Menu</a></li>";
              }
            ?>
            <?php                
              if (file_exists('index.php')) {
                echo "<li><a href='PHP/reserveren-contact.php#reserveren'>Reserveren</a></li>";
              } else {
                echo "<li><a href='reserveren-contact.php#reserveren'>Reserveren</a></li>";
              }
            ?>
            <?php                
              if (file_exists('index.php')) {
                echo "<li><a href='PHP/reserveren-contact.php#contact'>Contact</a></li>";
              } else {
                echo "<li><a href='reserveren-contact.php#contact'>Contact</a></li>";
              }
            ?>
            <?php                
              if (file_exists('index.php')) {
                echo "<li><a href='PHP/shoppingCart.php' class='fa fa-shopping-cart'></a></li>";
              } else {
                echo "<li><a href='shoppingCart.php' class='fa fa-shopping-cart'></a></li>";
              }
            ?>
          </ul>
        </nav>
    </section>
</header>