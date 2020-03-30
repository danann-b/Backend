<?php
include "connectdb.php";

$officeCode = empty($_GET["officeCode"]) ? null : $_GET["officeCode"];
$sql = "SELECT * FROM offices WHERE officeCode = :officeCode";

$params = array(
":officeCode" => $officeCode
);

try {
$sth = $db->prepare($sql);
$sth->execute($params);
$office = $sth->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
echo $e->getMessage();
}
