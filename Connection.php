<?php 
try {
    $connection = new PDO("mysql:dbname=crm;host=localhost","root","");
} catch (PDOException $e) {
    echo "erro no banco".$e->getMessage();
}
catch(Exception $e)
{
    echo "erro generico".$e->getMessage();
}
?>