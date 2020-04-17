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

//random order nummer wordt gemaakt
$randomNumber = rand(1,999999);
$orderNumber = $randomNumber;
$checkOrderNumber = "SELECT EXISTS (SELECT * FROM customers WHERE customerNumber = :NUM)";


if ($randomNumber == $checkOrderNumber)
{
    $randomNumber;
} elseif ($orderNumber != $checkOrderNumber)
{




$params = array(
    ":orderNumber" => $orderNumber,
    ":orderDate" => $orderDate,
    ":requiredDate" => $requiredDate,
    ":status" => $status,
    ":comments" => $comments,
    ":customerNumber" => $customerNumber
);}
//INSERT de opgegeven voornaam/achternaam naar de table student die gedisplayed wordt in lijst students
$sql = "INSERT INTO orders (orderNumber, orderDate, requiredDate, status, comments, customerNumber) VALUES (:orderNumber, :orderDate, :requiredDate, :status, :comments, :customerNumber)";
$sth = $db->prepare($sql);
$sth->execute($params);

if(isset($send))
{
    Header("Location: bedankt.php");
}
else{
    echo "Er is iets fout gegaan";
}