<?php 
    include_once 'db.php'; 
    

if(isset($_POST['submit1'])){

$text=$_POST['add_post'];
$query1 = "INSERT INTO `post` VALUES (DEFAULT , 68 , '$text', current_timestamp())";
mysqli_query($conn, $query1);
$result = mysqli_query($conn, $query1);
header('location:home.php');
}
mysqli_close($conn);
?>

