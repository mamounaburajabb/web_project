<?php
include_once("db.php");
if(isset($_POST['submit'])){

$fn=$_POST['fname'];
$ln=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$addres=$_POST['addres'];
$gender=$_POST['gender'];
$sql= "SELECT * from log where email = '$email'";
$notemail=mysqli_query($conn,$sql);
if(mysqli_num_rows($notemail)==1){
    echo '<script> alert("Use another Email");</script>';
    
    // header('location:regster.php');
    }
else{
$query = "INSERT INTO `log`  VALUES (DEFAULT, '$fn' , '$ln' , '$email', '$pass' , '$addres' , '$phone' , '$gender' )";
mysqli_query($conn,$query);
$result = mysqli_query($conn, $query);
mysqli_close($conn);
header('location:log.php');
}}
// if ($result) {
//     $get_user_query = "SELECT * FROM log WHERE email='$email' AND pass='$pass'";
//     $user_result = mysqli_query($conn, $get_user_query);
//     $user = mysqli_fetch_assoc($user_result);
//     $id = $user['user_id'];
//     }
?>