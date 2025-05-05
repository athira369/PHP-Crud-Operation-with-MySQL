<?php
$conn = mysqli_connect("localhost","root","","crud");
if(mysqli_connect_errno())
{
    echo "connection failed".mysqli_connect_error();
}
?>