<?php include('header.php'); ?>    
<?php include('session.php'); ?>    
    <body>
	<?php include('navbar.php'); ?>
			<div id="masthead">  
				<div class="container">
					    <div class="row">
      <div class="col-md-2">
		<hr>
		<center><img class="pp" src="<?php echo $image; ?>" height="140" width="160"></center>
		<hr>
		<a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
      </div>
		<div class="col-md-10">
			<?php
	$query = $conn->query("select * from members where member_id = '$session_id'");
	$row = $query->fetch();
	$id = $row['member_id'];
	?>
	<hr>
					<form method="post" action="save_edit.php">
	<input type="hidden" name="member_id" value="<?php echo $id; ?>">
	Username:<input type="text" name="username" value="<?php echo $row['username']; ?>">
	<hr>
						Password:<input name="password" type="text" value="<?php echo $row['password']; ?>">
						<hr>
	Firstname:<input type="text" name="firstname" value="<?php echo $row['firstname']; ?>">
	<hr>
	Lastname:<input type="text" name="lastname" value="<?php echo $row['lastname']; ?>">
	<hr>
	Gender:
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="gender">
		<option><?php echo $row['gender']; ?></option>
		<option>Male</option>
		<option>Female</option>
	</select>
	<hr>
	Birthdate:&nbsp;<input name="birthdate" type="text" value="<?php echo $row['birthdate']; ?>">
	<hr>
						Info :&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp<input name="Information" type="text" value="<?php echo $row['Information']; ?>">
	<hr>
						PlaceofBirth:<input name="PlaceOfBirth" type="text" value="<?php echo $row['PlaceOfBirth']; ?>">
	<hr>
						Email:&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp<input name="Email" type="text" value="<?php echo $row['email']; ?>">
	<hr>
						Nationality :&nbsp;&nbsp;<input name="Nationality" type="text" value="<?php echo $row['Nationality']; ?>">
	<hr>

	<br>
			<center>
			<button name="save" class="btn edit">Save</button>
			</center>
	<br>
	<form>
		</div>

    </div> 
				</div><!-- /cont -->
				<div class="container">
					<div class="row">
					<div class="col-md-12">
						<div class="top-spacer"> </div>
					</div>
					</div> 
				</div><!-- /cont -->
			</div>

                                                
                                                                                
<?php include('footer.php'); ?>
        
    </body>
</html>