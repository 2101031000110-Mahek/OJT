<?php
$UserName="root";
$Servername="localhost";
$Password="";
$dbname="myDB";
$conn=mysqli_connect($Servername,$UserName,$Password,$dbname);
if(!$conn)
{
    die("Connection faild".mysqli_connect_error());
}
// $sql="Create database myDB";
// if(mysqli_query($conn,$sql))
// {
//     echo "Database Created";
// }
// else{
//     echo "Error";
// }
// $sql1="CREATE TABLE myTable(Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,UserName VARCHAR(20),Password VARCHAR(6))";
// if($conn->query($sql1)===TRUE)
// {
//     echo "Table Created";
// }
// else{
//     echo "Error";
// }
// $sql1="INSERT INTO myTable(UserName,Password) VALUES('Mahek','M@364')";
// if(mysqli_query($conn,$sql1))
// {
//     echo "Value Insert Successfully <br>";
// }
// else{
//     echo "Error";
// }
// $sql2="INSERT INTO myTable(UserName,Password) VALUES('Nancy','N@123')";
// if(mysqli_query($conn,$sql2))
// {
//     echo "Value Insert Successfully";
// }
// else{
//     echo "Error";
// }
?>