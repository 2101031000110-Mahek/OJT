<?php
$Name1=$_POST['Name'];
$Address1=$_POST['Address'];
$Email1=$_POST['Email'];
$Phone1=$_POST['Phone'];
$Gender1=$_POST['Gender'];
$DOB1=$_POST['DOB'];
$msg1=$_POST['msg'];

$UserName="root";
$Servername="localhost";
$Password="";
$dbname="feedBack";
$conn=mysqli_connect($Servername,$UserName,$Password,$dbname);
if(!$conn)
{
    die("Connection faild".mysqli_connect_error());
}
// $sql="Create database feedBack";
// if(mysqli_query($conn,$sql))
// {
//     echo "Database Created";
// }
// else{
//     echo "Error";
// }
// $sql1="CREATE TABLE feedbackTABLE(Id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, Name VARCHAR(20),Address VARCHAR(100),Email VARCHAR(20),Phone INT(10),Gender VARCHAR(10),DOB INT(10),msg VARCHAR(50))";
// if($conn->query($sql1)===TRUE)
// {
//     echo "Table Created";
// }
// else{
//     die("Connection faild".mysqli_connect_error());
// }
// $sql2="INSERT INTO feedbackTABLE(Name,Address,Email,Phone,Gender,DOB,msg) VALUES('Mahek','Surat','mahek@gmail.com',9874560123,'Female',6-3-2004,'Nice')";
// if(mysqli_query($conn,$sql2))
// {
//     echo "Value Insert Successfully";
// }
// else{
//     echo "Error";
// }
// $sql3="INSERT INTO feedbackTABLE(Name,Address,Email,Phone,Gender,DOB,msg) VALUES('$Name1','$Address1','$Email1','$Phone1','$Gender1','$DOB1','$msg1')";
// if(mysqli_query($conn,$sql3))
// {
//     echo "Value Insert Successfully";
// }
// else{
//     echo "Error";
// }
// $sql4="DELETE FROM feedbackTABLE WHERE Id=1";
// if(mysqli_query($conn,$sql4))
// {
//     echo "Deleted Successfully";
// }
// else{
//     echo "Error";
// }
// $sql5="DELETE FROM feedbackTABLE WHERE Id=4";
// if(mysqli_query($conn,$sql5))
// {
//     echo "Deleted Successfully";
// }
// else{
//     echo "Error";
// }
$sql6="UPDATE feedbackTABLE SET Address='surat', Email='tirth@gmail.com', Gender='Male' WHERE Id=3";
if(mysqli_query($conn,$sql6))
{
    echo "Updated Successfully";
}
else{
    echo "Error";
}
?>