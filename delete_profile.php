<?php  ?>

<?php
include('dbcon.php');
include('session.php');

$get_id = $_SESSION['id'];
$conn->query("delete from members where member_id='$get_id'");
$alert_script =  "<script type='text/javascript'>alert('Your account has been deleted ! Now Redirect you to the home page !')</script>";
echo $alert_script;
sleep(3);
header('location:landing/');


?>