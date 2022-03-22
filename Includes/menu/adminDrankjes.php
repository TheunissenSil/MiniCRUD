<?php
    include('../includes/connector.php');

    $result = mysqli_query($conn,"SELECT * FROM `drankjes` ORDER BY `drankjes`.`category` ASC");

    while($row = mysqli_fetch_array($result)) {

        $roundendPrice = sprintf('%0.2f', $row['drankPrijs']);

        echo "<tr>";
        echo    "<td>" . $row['drankNaam'] . "</td>";
        echo    "<td>" . $roundendPrice . "</td>";
        echo    "<td>" . $row['category'] . "</td>";
        echo    "<td class='changeDelButton'><button>Change</button></td>";
        echo    "<td class='changeDelButton'><button class='delete'>Delete</button></td>";
        echo "</tr>";
    }
?>