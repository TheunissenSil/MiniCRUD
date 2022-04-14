<?php
$dataTable = "bestellingen";

require_once("../Includes/connector.php");

$sql = "SELECT * FROM bestellingen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        echo "<tr>";
        echo    "<td>" . $result['producten'] . "</td>";
        echo    "<td>" . $result['prijs'] . "</td>";
        echo    "<td>" . $result['aantal'] . "</td>";
        echo    "<td class='changeDelButton'><a href='../PHP/delete.php?id=" . $result['id'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
        echo "</tr>";
    }
?>