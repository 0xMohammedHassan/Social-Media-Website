

<style>
textarea {
    border: 1px solid;
    border-radius: 4px;
    height: 166px;
    margin-top: 14px;
    width: 98% !important;
}
body {
    font-family: 'TR Century Gothic' !important;
    padding-top: 50px;
    color: #646464;
    background-color: #f7f7f7;</style>
<div class="container-fuil " style="margin-top: 50px;">

        <div class="container">
<div class="row">
 <div class=" hidden-xs col-md-3 col-lg-3">
     <?php
//   		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));


     ?>
                <div class="card card-user" style="">
                    <div class="image">
                        <img src="<?php echo $image;?>" alt="..." style="padding: 5px;
                        border-radius: 10px;" />
                    </div>
                    <a href="#">

                                    <img class="avatar border-gray" src="images/faces/clem-onojeghuo-3.jpg" alt="..."/></a>

                                      <h4 class="title">  <?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>
			<hr>
			<?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>

                </div></div>
            <!--            end tha fiest colm in thew -->
            <div class="col-xs-6 col-sm-6 col-md-6 " style="">
                        			<form method="post" action="post.php">


                <div style="margin-bottom: 5px; float: right; background-color: white;; display: inline-block;">
                                            
                        <?php
			$query = $conn->query("select * from members where member_id = '$session_id'");
			$row = $query->fetch();
			$id = $row['member_id'];
			?>

                    </span>
                </div>

               
                <div id="my-tab-content" class="tab-content text-center">
                    <div class="tab-pane active" id="home">





                        <b><p style="color: red"><?php echo "Welcome ". $row['firstname']." ".$row['lastname']." !"; ?></p></b>
						<textarea name="content" placeholder="Share your Story Here"></textarea>
						<br>
						<hr>
                                        
						<button class="btn btn-large btn-block  btn-danger"> <img src="images/Paper%20Plane_20px.png" alt="">  publish </button>
			</form>
                    </div>
                    </div>
                    
                 
                    
                </div>

              

                    <br>
                    <br>
                </div>
    <div class="container">
        
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

</div>

</div>

</div>
