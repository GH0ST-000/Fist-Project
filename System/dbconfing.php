<?php
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","root","","crud");
// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>