<?php
include "connectdb.php";

// variabelen worden uit de POST gehaald van create order form
$orderNumber = $_POST["orderNumber"];
$orderDate = Date('Y-m-d');
$requiredDate = strtotime($_POST["requiredDate"]);
$requiredDate = date('Y-m-d H:i:s', $requiredDate);
$status = $_POST["status"];
$comments = $_POST["comments"];
$customerNumber = $_POST["customerNumber"];
$send = $_POST["verzenden"];

    $params = array(
        ":orderNumber" => $orderNumber,
        ":orderDate" => $orderDate,
        ":requiredDate" => $requiredDate,
        ":status" => $status,
        ":comments" => $comments,
        ":customerNumber" => $customerNumber
    );
//INSERT de opgegeven voornaam/achternaam naar de table student die gedisplayed wordt in lijst students
$sql = "UPDATE orders SET orderNumber = :orderNumber, orderDate = :orderDate, requiredDate = :requiredDate, status = :status, comments = :comments, customerNumber = :costumerNumber WHERE orderNumber = :orderNumber";
$sth = $db->prepare($sql);
$sth->execute($params);

if(isset($send))
{
    Header("Location: list-order.php");
}
else{
    echo "Er is iets fout gegaan";
}
