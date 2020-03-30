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
        <tr>
        <?php while($lines = $sth->fetch()) { ?>
            <td>
                <br>
            <?php echo $lines["productLine"]; ?>

                <?php echo $lines["productLine"]; ?>
            </td>
        </tr>
        <tr>
        <?php } ?>
        </tr>
    </table>
</body>
</html>










