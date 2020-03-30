<?php

include "./include/connectdb.php";

$sql = "SELECT * FROM productlines";
$sth = $db->prepare($sql);
$sth->execute();
?>

<!DOCTYPE html>
<html>
<head>
 <h1>Welkom</h1>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>Beschrijving</th>
        </tr>
        </thead>
        <tr>
        <?php while($lines = $sth->fetch()) { ?>
            <?php echo $lines["productLine"]; ?>
        </tr>
        <tr>
            <?php echo $lines["textDescription"]; ?>
        <?php } ?>
        </tr>
    </table>
</body>
</html>










