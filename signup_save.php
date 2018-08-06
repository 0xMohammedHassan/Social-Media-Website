<?php include('index_header.php'); ?>
<body>
<?php
include('dbcon.php');
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$DOB =$_POST['birthdate'];
$info =$_POST['information'];

$place =$_POST['placeofbirth'];

$nat =$_POST['nationality'];
$email=$_POST['email'];


$conn->query("insert into members (username,password,firstname,lastname,gender,image,birthdate,Information,PlaceOfBirth,Nationality,email) values ('$username','$password','$firstname','$lastname','$gender','images/pppp.jpg','$DOB','$info','$place','$nat','$email')");
?>
<script>
	alert('Sign UP Success Please Login Your Account');
	window.location = 'index2.php';
</script>
</body>
</html>