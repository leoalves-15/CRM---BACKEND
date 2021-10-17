<?php
include './Connection.php';
$name = $_POST["name"];
$cpf = $_POST["cpf"];
$tel = $_POST["tel"];
$birth = $_POST["birth"];
$sex = $_POST["sex"];
$email = $_POST["email"];
$city = $_POST["city"];
$address = $_POST["address"];
$state = $_POST["state"];
        $insert = $connection ->prepare("INSERT INTO cliente (Name_Client, CPF_Client, Tel_Client, Birth_Client, Sex_Client, Email_Client, City_Client, State_Client, Address_Client ) 
        VALUES (:name_, :cpf_, :tel_, :birth_, :sex_, :email_, :city_, :state_, :address_);");
        $insert -> bindValue(":name_",$name);
        $insert -> bindValue(":cpf_",$cpf);
        $insert -> bindValue(":tel_",$tel);
        $insert -> bindValue(":birth_",$birth);
        $insert -> bindValue(":sex_",$sex);
        $insert -> bindValue(":email_",$email);
        $insert -> bindValue(":city_",$city);
        $insert -> bindValue(":state_",$state);
        $insert -> bindValue(":address_",$address);
        $insert -> execute();
?>