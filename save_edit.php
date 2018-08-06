<?php
include('dbcon.php');
$member_id = $_POST['member_id'];
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$information = $_POST['Information'];
$birthdate = $_POST['birthdate'];
$PlaceofBirth = $_POST['PlaceOfBirth'];
$Email = $_POST['Email'];
$Nationality = $_POST['Nationality'];
$password = $_POST['password'];

$conn->query("update members set username = '$username',firstname = '$firstname',lastname='$lastname',gender='$gender',Information='$information',
birthdate='$birthdate',PlaceOfBirth='$PlaceofBirth',email='$Email',Nationality='$Nationality',password='$password' where member_id = '$member_id'
");

?>
<script>
	window.location = 'edit_profile.php<?php echo '?id='.$member_id; ?>';
</script>