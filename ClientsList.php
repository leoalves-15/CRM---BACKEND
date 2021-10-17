<?php
include './Connection.php';
$connection ->prepare($sql = "SELECT * FROM cliente");
$AllClients = array();
foreach ($connection->query($sql) as $row)
 {
    $AllClients[] = array('Id_Client' => $row['Id_Client'], 'Name_Client' => $row['Name_Client'],
    'CPF_Client' => $row['CPF_Client'], 'Birth_Client' => $row['Birth_Client'], 'Sex_Client' => $row['Sex_Client'],
    'Tel_Client' => $row['Tel_Client'], 'Email_Client' => $row['Email_Client'], 'City_Client' => $row['City_Client'],
    'State_Client' => $row['State_Client'], 'Address_Client' => $row['Address_Client']
    );
 }
echo json_encode($AllClients);
?>