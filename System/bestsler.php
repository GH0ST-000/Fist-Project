<?php
require_once ('dbconfigproduct.php');

$statement=$pdo->prepare('SELECT *FROM product');
$statement->execute();
$product=$statement->fetchAll($pdo::FETCH_ASSOC);
foreach ($product as $prod){

    $array=array($prod["image"]);

}
?>