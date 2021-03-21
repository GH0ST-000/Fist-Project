<?php
require_once ('dbconfigproduct.php');

$statement=$pdo->prepare('SELECT *FROM rate');
$statement->execute();
$product=$statement->fetchAll($pdo::FETCH_ASSOC);







?>
