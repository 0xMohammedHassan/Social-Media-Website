    <div class="row">
      <div class="col-md-2">
		<hr>
		<img class="pp" src="<?php echo $image; ?>" height="140" width="160">
		<hr>
		<a class="btn btn-success" href="change_pic.php">Change Profile Picture</a>
      </div>
		<div class="col-md-5">
			<hr>
				<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>


		</div>
      <div class="col-md-5">
			<form  id="upload_image"  method="POST" enctype="multipart/form-data">
				<div class="control-group">
					<label class="control-label" for="input01">Image:</label>
					<div class="controls">
						<input type="file" name="image" class="font" required>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button type="submit" name="submit" class="btn btn-success">Upload</button>
					</div>
				</div>
			</form>
							<?php
	if (isset($_POST['submit'])) {
 
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
		$image_name = addslashes($_FILES['image']['name']);
		$image_size = getimagesize($_FILES['image']['tmp_name']);
 
		move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
		$location = "images/" . $_FILES["image"]["name"];
		$conn->query("update members set image = '$location' where member_id  = '$session_id' ");
	?>
	<script>
		window.location = 'home.php';
	</script>
	<?php
	}
	?>
      </div>
    </div> 