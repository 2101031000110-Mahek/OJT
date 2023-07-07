<?php
$UserName="root";
$Servername="localhost";
$Password="";
$conn=mysqli_connect($Servername,$UserName,$Password);
if(!$conn)
{
    die("Connection faild".mysqli_connect_error());
}
else{
    echo "Connection Succesfully";
}
?>