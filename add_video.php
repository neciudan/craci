<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php if(!isset($_SESSION['user_id'])){
	redirect_to("login.php");
}
?>
<html>
<head><title>Submit a video!</title>
<link rel="icon" type="image/png" href="images/favicon4.ico" />
<link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/video.css">
</head>
<body>
<div id="greeting">Welcome <?php echo $_SESSION['username'];?> !  </div>
<div id="mov" style="background-image: url(images/video.jpg); height: 400px; width: 700px;background-repeat:no-repeat;"></div>
<div id="form">
<form action="create_video.php" method="post">
<p>Video Title:
<input type="text" name="title" value="" id="title"/></p>
<p>Video ID:
<input type="text" name="video" value="" id="video"/></p>
<p>Comments:</p>
<textarea name="comments" value="" id="comments"></textarea></br>
<input type="submit" value="Add Video"/>
     </form>



<?php require("includes/footer.php");?>