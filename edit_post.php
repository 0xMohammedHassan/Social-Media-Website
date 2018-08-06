<?php
include ('header.php');
include "dbcon.php";
include ('session.php');
$get_id = $_GET['id'];
$member_id = $_SESSION['id'];
error_reporting(0)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Post</title>
</head>
<body>
<div id="masthead">

<?php
include ('navbar.php');
?>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">

    <label>Change Post</label>

<textarea name="new1">

    <?php
    $query = $conn->query("select * from post LEFT JOIN members on members.member_id = post.member_id order by post_id DESC ");
    $row =$query->fetch();


    $content= $row['content'];
    $myid= $row['post_id'];
    echo $content;

    ?>

</textarea>
    <br>
<input type="submit" name="b1" value="Edit" />
    <?php
    //$conn->query("insert into post (content,date_posted,member_id) values('$content',NOW(),'$session_id')");

    if(isset($_POST['b1'])){
        $text = $_POST['new1'];

        $sql = "UPDATE post SET content ='$text' where member_id = $member_id && post_id=$myid ";

        //mysqli_query($conn,$sql);
    $conn->query($sql);
   echo "Edit Done !";
    }else{

    }

?>
    </form>
</body>
</html>