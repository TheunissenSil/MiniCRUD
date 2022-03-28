<?php
$dataTable = "contact";

require_once("../Includes/connector.php");

$sql = "SELECT * FROM contact";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach ($result as $result){
        echo "<tr>";
        echo    "<td>" . $result['naam'] . "</td>";
        echo    "<td>" . $result['email'] . "</td>";
        echo    "<td>" . $result['bericht'] . "</td>";
        echo    "<td class='changeDelButton'><a href='../PHP/delete.php?id=" . $result['id'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
        echo "</tr>";
    }
?>