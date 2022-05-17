<?php 
include_once "db.php";
$email = $_POST['email'];
$pass = $_POST['pass'];
$check_user_query = "SELECT * FROM log WHERE email='$email' AND pass='$pass'";
$num = ("select * from log where email='$email' AND pass= '$pass' ;");
$row=mysqli_num_rows($num);
$result = mysqli_query($conn, $check_user_query);

if (mysqli_num_rows($result) == 0) {
    header("location: log.php");
} else {

    $get_user_query = "SELECT * FROM log WHERE email='$email' AND pass='$pass'";
    $user_result = mysqli_query($conn, $get_user_query);
    $user = mysqli_fetch_assoc($user_result);
    session_start();
    header("location:home.php");


}
echo 'hi';
?>