<header class="adminHeader">
      <section class="navagationbar">
        <?php  
          if (file_exists('index.php')) {
            echo "<a href='index.php#start' id='logo'><h2>Pomodoro</h2></a>";
          } else {
            echo "<a href='../index.php#start' id='logo'><h2>Pomodoro</h2></a>";
          }
        ?>

        <label for="toggle-1" class="toggle-menu"
          ><ul>
            <li></li>
            <li></li>
            <li></li></ul>
          </label>

        <input type="checkbox" id="toggle-1" />

        <nav class="adminPage">
          <ul>
            <li><a href='home.php'>Home</a></li>
            <li><a href='changeMenu.php'>Menukaart aanpassen</a></li>
            <li><a href='adminReserveringen-contact.php'>Reserveringen / Contact berichten</a></li>
            <li><a href='bestellingen.php'>Bestellingen</a></li>
            <li><a href='../PHP/logout.php'>Uitloggen</a></li>
          </ul>
        </nav>
    </section>
</header>