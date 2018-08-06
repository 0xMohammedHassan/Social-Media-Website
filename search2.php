<html>
<?php
include "header.php";
$search = $_POST['search'];
?>
<body>



<div class="container">
</div><!-- /cont -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="top-spacer"> </div>
        </div>
    </div>
</div><!-- /cont -->
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel">
                <div class="panel-body">
                    <!--/stories-->
                    <div class="row">
                        <br>
<?php

$query = $conn->query("select  * from members where firstname LIKE '%$search%' or lastname  LIKE '%$search%'");
$count = $query->rowcount();
if ($count > 0){


while($row = $query->fetch()){
?>
                        <fieldset style="color: #0e90d2">
                            <legend>Results</legend>

                                               <?php
    $posted_by = $row['firstname']." ".$row['lastname'];
    echo "Found 1 Result!";
    echo "<br><br>";
    echo "Name: ".$posted_by;
    echo"<br><br>";
    echo "To view more info <a href=\"index2.php\">Login Here</a>";
    echo"<br><br>";
    echo "Back to Home <a href=\"index.php\">Click Here</a>";
    
}}else{
    echo "No Result Found!";
    echo"<br><br>";
    echo "Back to Home <a href=\"index.php\">Click Here</a>";
}
?>
                        </fieldset>

</body>



</html>