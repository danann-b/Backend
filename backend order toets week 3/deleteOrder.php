<?php
include "connectdb.php";

$GetArray = $_GET['orderNumber'];

$params = array(
    ":orderNumber" => $GetArray
);

$sql = "DELETE FROM orders WHERE orderNumber = :orderNumber";
$sth = $db->prepare($sql);
$sth->execute($params);

if ($sth == true)
{
    header("location: list-order.php");
}
else
{
    echo ("er is wat fout gegaan");
}