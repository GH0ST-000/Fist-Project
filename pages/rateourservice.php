<?php
require_once ('../System/rateourservice.php');

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Style/rateourservice.css">
    <script src="https://kit.fontawesome.com/0483fb807f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Rate Our Service</title>
</head>
<body>
<form method="post" class="Form">
    <div class="form-group">
        <label >Firtname</label>
        <input type="text" name="firstname" class="form-control" placeholder="Fisrname">
    </div>
    <div class="form-group">
        <label>Lastname</label>
        <input type="text" name="lastname" class="form-control" placeholder="Lastname">
    </div>
    <div class="form-group">
        <label>Criterium</label>
        <input type="number" name="criterium" class="form-control" placeholder="Criterium 1-10">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
