<?php
if(isset($_GET['id'])) {
    require_once("../Includes/connector.php");

    $dataTable = $_GET['dataTable'];

    $sql = "DELETE FROM $dataTable WHERE ID =:ID";

    $stmt = $connect->prepare($sql);
    $stmt->bindParam(":ID", $_GET['id']);
    $stmt->execute();

    if ($dataTable === "reserveringen" ||  $dataTable === "contact") {
        header ("Location: ../AdminPages/adminReserveringen-contact.php");
    } else if ($dataTable === "bestellingen") {
        header ("Location: ../AdminPages/bestellingen.php");
    } else {
        header ("Location: ../AdminPages/changeMenu.php");
    }
} else {
    header ("Location: ../AdminPages/changeMenu.php");
}