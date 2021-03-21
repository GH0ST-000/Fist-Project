<?php
require_once ('dbconfigproduct.php');
$id=$_POST['id'] ?? null;
if (!$id){
    header("Location:http://localhost/Crud/pages/welcome.php");
    exit();
}
$statement=$pdo->prepare('DELETE FROM product where id=:id');
$statement->bindValue(':id',$id);
$statement->execute();
header("Location: http://localhost/Crud/pages/welcome.php");
?>