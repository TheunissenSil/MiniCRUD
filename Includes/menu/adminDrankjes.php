<?php
$dataTable = "drankjes";

require_once("../Includes/connector.php");

$sql = "SELECT * FROM $dataTable ORDER BY category";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();

foreach ($result as $result){

    $roundendPrice = sprintf('%0.2f', $result['drankPrijs']);

    echo "<tr>";
    echo    "<td>" . $result['drankNaam'] . "</td>";
    echo    "<td>" . $roundendPrice . "</td>";
    echo    "<td>" . $result['category'] . "</td>";
    echo    "<td class='changeDelButton'><a href='changeMenuForm.php?id=" . $result['id'] . "&drankjesNaam=" . $result['drankNaam'] . "&drankjesPrijs=" . $roundendPrice . "&drankjesCategory=" . $result['category'] . "#drankjesForm'><button class='change'>Change</button></a></td>";
    echo    "<td class='changeDelButton'><a href='../PHP/delete.php?id=" . $result['id'] . "&dataTable=" . $dataTable . "'><button class='delete'>Delete</button></a></td>";
    echo "</tr>";
}