<?php
$dataTable = "reserveringen";

require_once("../Includes/connector.php");

$sql = "SELECT * FROM reserveringen";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        echo "<tr>";
        echo    "<td>" . $result['naam'] . "</td>";
        echo    "<td>" . $result['email'] . "</td>";
        echo    "<td>" . $result['personen'] . "</td>";
        echo    "<td>" . $result['datum'] . "</td>";
        echo    "<td>" . $result['tijd'] . "</td>";
        echo    "<td>" . $result['bijzonderheden'] . "</td>";
        echo    "<td class='changeDelButton'><a href='../PHP/delete.php?id=" . $result['id'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
        echo "</tr>";
    }
?>