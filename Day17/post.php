<?php
$UserName1=$_POST['UserName'];
$Password1=$_POST['Password'];
// echo $UserName."<br>";
// echo $Password;
$UserName="root";
$Servername="localhost";
$Password="";
$dbname="myDB";
$conn=mysqli_connect($Servername,$UserName,$Password,$dbname);
if(!$conn)
{
    die("Connection faild".mysqli_connect_error());
}
// $sql3="INSERT INTO myTable(UserName,Password) VALUES('$UserName1','$Password1')";
// if(mysqli_query($conn,$sql3))
// {
//     echo "Value Insert Successfully";
// }
// else{
//     echo "Error";
// }
$sql1="DELETE FROM myTable WHERE Id=16";
if(mysqli_query($conn,$sql1))
{
    echo "Deleted Successfully";
}
else{
    echo "Error";
}
// $sql2="UPDATE myTable SET Password='Na123' WHERE Id=2";
// if(mysqli_query($conn,$sql2))
// {
//     echo "Updated Successfully";
// }
// else{
//     echo "Error";
// }
?>