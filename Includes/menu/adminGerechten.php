<?php
    include('../includes/connector.php');

    $result = mysqli_query($conn,"SELECT * FROM `gerechten` ORDER BY `gerechten`.`category` ASC");

    while($row = mysqli_fetch_array($result)) {

        $roundendPrice = sprintf('%0.2f', $row['gerechtPrijs']);

        echo "<tr>";
        echo    "<td>" . $row['gerechtNaam'] . "</td>";
        echo    "<td>" . $row['gerechtBeschrijving'] . "</td>";
        echo    "<td>" . $roundendPrice . "</td>";
        echo    "<td>" . $row['category'] . "</td>";
        echo    "<td class='changeDelButton'><button>Change</button></td>";
        echo    "<td class='changeDelButton'><button class='delete'>Delete</button></td>";
        echo "</tr>";
    }
?>