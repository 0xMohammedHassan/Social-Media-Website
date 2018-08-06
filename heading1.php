    <div class="row">
      <div class="col-md-2">
		<hr>
		<img class="pp" src="<?php echo $image; ?>" height="140" width="160">
		<hr>
		<a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
      </div>
		<div class="col-md-10">
			<hr>
			<div class="pull-right"><a href="edit_profile.php" class="btn btn-info"><i class="icon-pencil"></i> Edit</a></div>
			<br>			<br>

			<div class="pull-right"><a href="delete_profile.php" class="btn btn-danger"><i class="icon-pencil"></i><b> Delete Profile!</b></a></div>
<fieldset style="border-radius: 10px;">
			<legend>Personal Information</legend>
			
			</p>
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<p>Name : <?php echo "<b>".$row['firstname']." ".$row['lastname']; ?></b><span class="margin-p"> </span>
			</p><hr>
	<p>Gender:<?php echo "<b>".$row['gender']; ?></b></p><hr>
			
			<p>Gender: <?php echo "<b>".$row['gender']; ?></b></p>
						<hr>
			<p>Birthdate: <?php echo "<b>".$row['birthdate']; ?></b></p>
						<hr>
			<p>Information: <?php echo "<b>".$row['Information']; ?></b></p>
						<hr>
			<p>Email: <?php echo "<b>".$row['email']; ?></b></p>
						<hr>
				<p> Place Of Birth : <?php echo "<b>".$row['PlaceOfBirth']; ?></b></p>
			<hr>
				<p>Nationality: <?php echo "<b>".$row['Nationality']; ?></b></p></fieldset>
		</div>

    </div> 
	