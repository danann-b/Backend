<?php

include "connectdb.php";


$sql = "SELECT * FROM offices";
$sth = $db->prepare($sql);
$sth->execute();
?>
<body>
    <table class="table">
        <thead>
        <tr>
            <th>city</th>
            <th>phone</th>
            <th>addressLine1</th>
            <th>addressLine2</th>
            <th>state</th>
            <th>country</th>
            <th>postalCode</th>
            <th>territory</th>
            <th>Acties</th>
        </tr>
        </thead>
        <tbody>
        <?php while($row = $sth->fetch()) { ?>

            <tr>
                <td><?php echo $row["city"]; ?></td>
                <td><?php echo $row["phone"]; ?></td>
                <td><?php echo $row["addressLine1"]; ?></td>
                <td><?php echo $row["addressLine2"]; ?></td>
                <td><?php echo $row["state"]; ?></td>
                <td><?php echo $row["country"]; ?></td>
                <td><?php echo $row["postalCode"]; ?></td>
                <td><?php echo $row["territory"]; ?></td>
                <td><a href="update-office-form.php?officeCode=">Wijzigen</a></td>
                <td><a href="update-office-form.php?officeCode=">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</body>

