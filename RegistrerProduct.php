<?php
include './Connection.php';
$Title = $_POST['Title'];
$Price = $_POST['Price'];
$Qtd = $_POST['Qtd'];
$Desc = $_POST['Desc'];
        $insert = $connection ->prepare("INSERT INTO product (Title_Product, Price_Product, Inventory_Product, Desc_Product ) 
        VALUES (:title_, :price_, :qtd_, :desc_);");
        $insert -> bindValue(":title_",$Title);
        $insert -> bindValue(":price_",$Price);
        $insert -> bindValue(":qtd_",$Qtd);
        $insert -> bindValue(":desc_",$Desc);
        $insert -> execute();
?>