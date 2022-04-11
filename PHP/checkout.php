<?php
if (isset($_POST['checkoutBtn'])) {

    session_start();
    require_once('../Includes/connector.php');

} else {
    header('Location: ../Pages/checkoutBtn.php');
}