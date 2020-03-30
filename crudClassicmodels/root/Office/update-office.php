<?php

include "connectdb.php";

/* variabelen worden uit de POST gehaald van update office form */
$officeCodeOphalen = $_POST["officeCode"];
$city = $_POST["city"];
$phone = $_POST["phone"];
$addressLine1 = $_POST["addressLine1"];
$addressLine2 = $_POST["addressLine2"];
$state = $_POST["state"];
$country = $_POST["country"];
$postalCode = $_POST["postalCode"];
$territory = $_POST["territory"];
$submit = $_POST["submit"];

$params = array(
    ":officeCode" => $officeCodeOphalen,
    ":city" => $city,
    ":phone" => $phone,
    ":addressLine1" => $addressLine1,
    ":addressLine2" =>$addressLine2,
    ":state" =>$state,
    ":country" =>$country,
    ":postalCode" =>$postalCode,
    ":territory" =>$territory
);

/*UPDATE de opgegeven voornaam/achternaam naar de table student die gedisplayed wordt in lijst students */
$sql = "UPDATE offices SET city = :city, phone = :phone,addresLine1 = :addresLine1, addressLine2 = :addresLine2, state = :state, country = :country, postalCode = :postalCode, territory = :territory WHERE id =: id";
$sth = $db->prepare($sql);
$sth->execute($params);

if (isset($submit)) {
    Header("Location: office.php");
} else {
    echo "Er is iets fout gegaan";
}
