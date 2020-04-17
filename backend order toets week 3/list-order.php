<?php

include "connectdb.php";
$sql = "SELECT * FROM orders";
$sth = $db->prepare($sql);
$sth->execute();
?>

<?php include "header.php"; ?>
<table class="table">
    <thead>
    <tr>
        <th>Order Number</th>
        <th>Bezorgdatum</th>
        <th>Verplichte datum</th>
        <th>Verzonden datum</th>
        <th>Status</th>
        <th>Comments</th>
        <th>Klantnummer</th>
        <th>Acties</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = $sth->fetch()) { ?>
        <tr>
            <td><?php echo $row["orderNumber"]; ?></td>
            <td><?php echo $row["orderDate"]; ?></td>
            <td><?php echo $row["requiredDate"]; ?></td>
            <td><?php echo $row["shippedDate"]; ?></td>
            <td><?php echo $row["status"]; ?></td>
            <td><?php echo $row["comments"]; ?></td>
            <td><?php echo $row["customerNumber"]; ?></td>
            <td><a class="btn btn-primary" href="update-order-form.php?orderNumber=<?php echo $row["orderNumber"]?>">Wijzig</a></td>
            <td><a class="btn btn-danger" href="deleteOrder.php?orderNumber=<?php echo $row["orderNumber"]?>">Delete</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<?php include "footer.php" ?>

