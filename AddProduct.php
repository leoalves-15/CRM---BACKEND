<?php 
include("./Connection.php");
$Qtd = (int)$_POST["Qtd"];
$IdCart = (int)$_POST["IdCart"];
$IdProduct = (int)$_POST["IdProduct"];
//rules select price
$price;
$Total = $price * $qtd ;
    $select = $connection ->prepare("SELECT * from cart WHERE ;");
    $insert -> execute();
?>