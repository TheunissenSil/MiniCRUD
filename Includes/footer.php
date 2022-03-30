<footer>
    <button onclick="topFunction()" class="backToTop" id="backToTop"><div class="fa fa-chevron-up"></div></button>


    <div class="socialMediaLinks">
        <a target=”_blank” href="https://www.instagram.com/osteria_pomodoro/" class="fa fa-instagram footerSocials"></a>

        <a target=”_blank” href="https://www.facebook.com/Osteria-Pomodoro-2184478194950467/" class="fa fa-facebook footerSocials"></a>

        <a target=”_blank” href="https://www.linkedin.com/company/pomodoro-group/about/" class="fa fa-linkedin footerSocials"></a>
    </div>

    <div class="copyRight">
        © Copyright <strong><span>siltheu</span></strong
        >. All Rights Reserved
    </div>

    <?php                
        if (file_exists('index.php')) {
            echo "<a href='AdminPages/home.php'><button class='inlogpageButton'>Personeels paneel</button></a>";
        } else {
            echo "<a href='../AdminPages/home.php'><button class='inlogpageButton'>Personeels paneel</button></a>";
        }
    ?>
    
</footer>