<?php
include "connectdb.php";

$id = empty($_GET["orderNumber"]) ? null : $_GET["orderNumber"];
$sql = "SELECT * FROM orders WHERE orderNumber = :orderNumber";

$params = array(
    ":orderNumber" => $id
);

try {
    $sth = $db->prepare($sql);
    $sth->execute($params);
    $order = $sth->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo $e->getMessage();
}

