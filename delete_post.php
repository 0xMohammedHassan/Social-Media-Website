<?php
include('dbcon.php');
include ('session.php');
$get_id = $_GET['id'];
$new_id = $_SESSION['id'];
$tet="er";/*
if(isset($_POST['ed1'])){

    $conn->query("Update post set content=$tet where member_id ='$new_id' && post_id='$get_id'");

}*/

$conn->query("delete from post where post_id='$get_id' && member_id ='$new_id'");
header('location:home.php');
?>