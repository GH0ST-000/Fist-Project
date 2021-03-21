<?php
require_once ('dbconfing.php');
if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email = stripslashes($_REQUEST['mail']);
    $email = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $repassword = stripslashes($_REQUEST['confirm_password']);
    $password = mysqli_real_escape_string($con, $password);
    $repassword = mysqli_real_escape_string($con, $repassword);

    $query = "INSERT into registration (name, email, pasword, repasword)
VALUES ('$username', '$email', '$password','$repassword')";

    if (empty($username) or empty($email) or empty($password) or empty($repassword)) {
        echo '
        <div class="alert alert-danger"style="margin-left: 78%; width: 300px; " role="alert">
  Please Fill All Blank!
</div>';
        return false;
    } else
        if ($password != $repassword) {
            echo '
        <div class="alert alert-danger"style="margin-left: 78%; width: 300px; " role="alert">
  Password Dont Match Passwod Repeated!
</div>';
        } else
            if(strlen($password)<8){
                echo '
        <div class="alert alert-danger"style="margin-left: 78%; width: 300px; " role="alert">
  Password Is Weak!
</div>';

            }
        else {


            $result = mysqli_query($con, $query);
            if ($result) {
                echo '
        <div class="alert alert-success" style="margin-left: 78%; width: 300px; " role="alert">
        Sucsess! <a href="../pages/index.php" style="border: 5px;">Login</a>
</div>

';


            } else
                echo '
        <div class="alert alert-danger" role="alert" style="margin-top: 3%;margin-left: 80%; width: 300px;">
  Try Again
</div>
        ';
        }
}
?>