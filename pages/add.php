<?php
session_start();
require_once ('../System/addproduct.php');
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

<form class="new-product" method="post" enctype="multipart/form-data">
    <h3>Create New Product</h3>
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
