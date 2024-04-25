<?php
$conn = new mysqli("localhost", "root","","examination");
    
$name = $_POST['username'];
$email = $_POST['useremail'];
$password = $_POST['userpass'];

$sql = "INSERT INTO register VALUES (3,'$name','$email','$password')";
if($conn->query($sql)===TRUE){
    header('location:login.php');
}
else{
    echo  "Error".$sql.'<br>'.$conn->error;
}
?>