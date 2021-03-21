<?php
session_start();
require_once ('../System/products.php');
require_once ('../System/bestsler.php');
?>
<!doctype html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/0483fb807f.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../Style/welcome.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="header">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button type="button" style="color: white;" class="btn" data-toggle="modal" data-target="#exampleModal" >Sale Information</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">On Sale</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                  <img src="<?php echo $prod["image"];?>" style="width: 100px;height: 100px;">
                                </div>
                                <div class="form-group">
                                    <label for="message-text" class="col-form-label"><?php $prod["title"]; ?></label>
                                    <label class="form-control" id="message-text">From January Till Augut</label>
                                    <label class="form-control" id="message-text"> Price 600$</label>
                                </div>
                            </form>
                        </div>
<!--                        <div class="modal-footer">-->
<!--                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
<!--                            <button type="button" class="btn btn-primary">Send message</button>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link navbar-brand" href="rate.php">Rate From Customer <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a  class=" navbar-brand" href="bestsellerproduct.php">Best Seller Product</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: white;" class="navbar-brand nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Control Pannel
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


                            <div class="dropdown-divider"></div>
                            <p>
                                <a href="index.php" type="button" style="width: 200px; margin-top: 2%; " class="btn  btn-outline-success">Log Out From System </a>
                            </p>
                            <p>
                                <a href="add.php" type="button" style="width: 200px; margin-top: 2%; " class="btn  btn-outline-success">Add New Product </a>
                            </p>
                            <p>
                                <a href="rateourservice.php" type="button" style="width: 200px; margin-top: 2%; " class="btn  btn-outline-success">Rate Our Sevice </a>
                            </p>
                        </div>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </header>
</div>
<table class="table">

    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Description</th>
        <th scope="col">Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($product as $i => $products) { ?>
        <tr>
            <th scope="row"><?php echo $i + 1 ?></th>
            <td>
                <?php if ($products['image']): ?>
                    <img src="<?php echo $products['image'] ?>" alt="<?php echo $products['title'] ?>" class="product-img" style="width: 100px;height: 100px;">
                <?php endif; ?>
            </td>
            <td><?php echo $products['title'] ?></td>
            <td><?php echo $products['price'] ?></td>
            <td><?php echo $products['create_date'] ?></td>
            <td><?php echo $products['description'] ?></td>

            <td>
                <a  href="../System/update.php?id=<?php echo $products['id']; ?>"  class="btn btn-sm btn-outline-primary">Edit</a>
                <form method="post" action="../System/Delete.php" style="display: inline-block">
                    <input type="hidden" name="id" value="<?php echo $products['id']?>">
                <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>

                </form>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
<footer class=" footer text-center text-white" style="background-color: black;">
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
<!--        © 2020 Copyright:-->
        <a class="text-dark" href="">Create Wiht <i class="fas fa-heart"></i> By Supper Magazine </a>
    </div>
</footer>
</body>
</html>






































