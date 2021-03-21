<?php
require_once ('../System/bestsler.php');
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Style/bestsellerproduct.css">
    <script src="https://kit.fontawesome.com/0483fb807f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud || Service</title>
</head>
<body class="body">
<div class="header">
    <nav class="navbar navbar-light bg-light">
        <a href="welcome.php"> <span style="border-bottom: 2px solid black;border-top: 2px solid black; "  class="navbar-brand mb-0 h1">Home Page</span></a>
    </nav>

</div>
<div class="container">
<div class="row">
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $prod["image"];?>" style="width: 100px; height: 100px;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $prod["title"];?></h5>
                <p class="card-text"><?php echo $prod["description"];?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Date :2020</li>
                <li class="list-group-item">Manufacture: Aplle</li>
                <li class="list-group-item">Town:California</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Add To Card ?</a><br>
                <a href="#" class="card-link">More Information</a>
            </div>
        </div>
    </div>
<!--   ---------------- -->
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $prod["image"];?>" style="width: 100px; height: 100px;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $prod["title"];?></h5>
                <p class="card-text"><?php echo $prod["description"];?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Date :2020</li>
                <li class="list-group-item">Manufacture: Aplle</li>
                <li class="list-group-item">Town:California</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Add To Card ?</a><br>
                <a href="#" class="card-link">More Information</a>
            </div>
        </div>
    </div>
<!--   ------------------ -->
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $prod["image"];?>" style="width: 100px; height: 100px;" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $prod["title"];?></h5>
                <p class="card-text"><?php echo $prod["description"];?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Date :2020</li>
                <li class="list-group-item">Manufacture: Aplle</li>
                <li class="list-group-item">Town:California</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Add To Card ?</a><br>
                <a href="#" class="card-link">More Information</a>
            </div>
        </div>
    </div>
<!--  -------------  -->
</div>
</div>

<!-- ---------------------------   -->
</body>
</html>