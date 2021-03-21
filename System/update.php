<?php
require_once ('Function/function.php');
require_once ('dbconfigproduct.php');
$id=$_GET['id'] ?? null;
if (!$id){
    header("Location:http://localhost/Crud/pages/welcome.php");
    exit();
}
$statement=$pdo->prepare('SELECT *FROM product where id=:id');
$statement->bindValue(':id',$id);
$statement->execute();
//header("Location: http://localhost/Crud/pages/welcome.php");
$productupdate=$statement->fetchAll(PDO::FETCH_ASSOC);

foreach ($productupdate AS $produ){
    $title = $produ['title'];
    $description = $produ['description'];
    $price = $produ['price'];
    $images=$produ['image'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title1 = $_POST['title'];
    $description2 = $_POST['description'];
    $price3 = $_POST['price'];

    $image = $_FILES['image'] ?? null;
    $imagePath1 = '';

    if (!is_dir('images')) {
        mkdir('images');
    }

    if ($image && $image['tmp_name']) {
        if ($produ['image']){
            unlink($produ['image']);
        }
        $imagePath1 = 'images/' . randomString(8) . '/' . $image['name'];
        mkdir(dirname($imagePath1));
        move_uploaded_file($image['tmp_name'], $imagePath1);
    }

    if (!$title) {
        $errors[] = 'Product title is required';
    }

    if (!$price) {
        $errors[] = 'Product price is required';
    }

    if (empty($errors)) {
        $statement = $pdo->prepare("UPDATE  product SET title=:title,image=:image,
                    description=:description,price=:price WHERE id=:id ");
        $statement->bindValue(':title', $title1);
        $statement->bindValue(':image', $imagePath1);
        $statement->bindValue(':description', $description2);
        $statement->bindValue(':price', $price3);
        $statement->bindValue(':id', $id);

        $statement->execute();
        header('Location: http://localhost/Crud/pages/welcome.php');
    }else
        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo '
            <div class="alert alert-danger" style="width: 250px;" role="alert">
  ' . $error . '
</div>
            ';
            }

        }


}
?>
<!doctype html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/0483fb807f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Style/add.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$titl='';
foreach ($productupdate AS $prod){
   $titl=$prod['title'];
}
?>
<form class="new-product" method="post" enctype="multipart/form-data">
    <h3>Update Product:<b><?php echo $titl?>  </b> </h3>
<!--    --><?php //if ($produ['image']): ?>
<!--<img src="--><?php //$produ['image'] ?><!--" style="width: 80px;height: 80px;">-->
<!---->
<!--    --><?php //endif; ?>
    <div class="form-group">
        <label >Product Image</label> <br>
        <input type="file" name="image">

    </div>
    <div class="form-group">
        <label>Product Title</label>
        <input type="text" name="title" class="form-control" value="<?php echo $title; ?>" >

    </div>
    <div class="form-group">
        <label>Product Description</label>
        <textarea name="description" class="form-control"  > <?php echo $description;?></textarea>

    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input name="price" type="number" class="form-control" value="<?php echo $price;?>" >

    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

