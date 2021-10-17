<?php
include './Connection.php';

$connection ->prepare($sql = "SELECT * FROM product");
$AllProducts = array();
foreach ($connection->query($sql) as $row)
 {
    $AllProducts[] = array('Id_Product' => $row['Id_Product'], 'Title_Product' => $row['Title_Product'],
    'Price_Product' => $row['Price_Product'], 'Inventory_Product' => $row['Inventory_Product'], 'Desc_Product' => $row['Desc_Product']
    );
 }
echo json_encode($AllProducts);
?>