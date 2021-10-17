<?php
include './Connection.php';
$date = date("y/m/d");
$total = 0;
$idClient = (int)$_POST["idClient"];
    $insert = $connection ->prepare("INSERT INTO cart (Data_Cart, Total_Cart, Id_Client) 
    VALUES (:Date_, :Total_, :Client_);");
    $insert -> bindValue(":Date_",$date);
    $insert -> bindValue(":Total_",$total);
    $insert -> bindValue(":Client_",$idClient);
    $insert -> execute();
?>