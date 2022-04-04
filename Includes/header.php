<header>
      <section class="navagationbar">
        <?php  
          if (file_exists('index.php')) {
            echo "<a href='index.php#start' id='logo'><h2>Pomodoro</h2></a>";
          } else {
            echo "<a href='../index.php#start' id='logo'><h2>Pomodoro</h2></a>";
          }
        ?>

        <?php  
          if (file_exists('index.php')) {
            echo "<form class='searchFrom' action='Pages/searchPage.php' method='GET'><input class='searchBar' name='searchInput' type='search' placeholder='Zoek een gerecht'></form>";
          } else {
            echo "<form class='searchFrom' action='searchPage.php' method='GET'><input class='searchBar' name='searchInput' type='search' placeholder='Zoek een gerecht'></form>";
          }
        ?>

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
                echo "<li><a href='Pages/menu.php'>Menu</a></li>";
              } else {
                echo "<li><a href='menu.php'>Menu</a></li>";
              }
            ?>
            <?php                
              if (file_exists('index.php')) {
                echo "<li><a href='Pages/reserveren-contact.php#reserveren'>Reserveren</a></li>";
              } else {
                echo "<li><a href='reserveren-contact.php#reserveren'>Reserveren</a></li>";
              }
            ?>
            <?php                
              if (file_exists('index.php')) {
                echo "<li><a href='Pages/reserveren-contact.php#contact'>Contact</a></li>";
              } else {
                echo "<li><a href='reserveren-contact.php#contact'>Contact</a></li>";
              }
            ?>
            <?php                
              if (file_exists('index.php')) {
                echo "<li><a href='Pages/shoppingCart.php' class='fa fa-shopping-cart'></a></li>";
              } else {
                echo "<li><a href='shoppingCart.php' class='fa fa-shopping-cart'></a></li>";
              }
            ?>
          </ul>
        </nav>
    </section>
</header>