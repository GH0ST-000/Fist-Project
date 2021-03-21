<?php
require_once ('dbconfing.php');

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form
    $_SESSION['submit'] =$_POST['email'] ;
    $_SESSION['submit'] =$_POST['password'] ;
    $myusername = mysqli_real_escape_string($con, $_POST['email']);
    $mypassword = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT id FROM registration WHERE email = '$myusername' and pasword = '$mypassword'";
    $result = mysqli_query($con, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($con));
        exit();
    }
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $active = $row['Email'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {

        $_SESSION['submit'] = $myusername;

        header("location:welcome.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}



?>
