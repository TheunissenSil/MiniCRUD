<?php
$dataTable = "gerechten";

require_once("../Includes/connector.php");

$sql = "SELECT * FROM gerechten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){

        $roundendPrice = sprintf('%0.2f', $result['gerechtPrijs']);

        echo "<tr>";
        echo    "<td>" . $result['gerechtNaam'] . "</td>";
        echo    "<td>" . $result['gerechtBeschrijving'] . "</td>";
        echo    "<td>" . $roundendPrice . "</td>";
        echo    "<td>" . $result['category'] . "</td>";
        echo    "<td class='changeDelButton'><button>Change</button></td>";
        echo    "<td class='changeDelButton'><a href='../PHP/delete.php?id=" . $result['id'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
        echo "</tr>";
    }
?>