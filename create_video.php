<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>


<?php

 $title=mysql_prep($_POST['title']);
 $video=mysql_prep($_POST['video']);
 $comments=mysql_prep($_POST['comments']);
?>
<?php 

$query="INSERT INTO videow2 (title, video, comments) VALUES ('{$title}','{$video}','{$comments}')";
if(mysql_query($query,$connection)){
	header("Location:index.php");
	exit;
	//YAY!
}else{
	echo "<p>Subject failed</p>";
	echo "<p>" .mysql_error()."</p>";
}
?>

<?php mysql_close($connection);?>
