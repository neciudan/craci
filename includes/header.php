<!DOCTYPE html 
      PUBLIC "-//W3C//DTD HTML 4.01//EN"
      "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en-US">
<head profile="http://www.w3.org/2005/10/profile">

      <head>
  <title>Craci!</title>
 <link rel="icon" type="image/png" href="images/favicon4.ico" />
  <link href='http://fonts.googleapis.com/css?family=Nosifer' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="css/public.css">
 </head>
 <body>
 <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=496885557038690";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="scripts/jquery-1.9.1.min.js"></script> 
  <script type="text/javascript" src="scripts/javascript.js"></script> 
  <div id="container">
  <div id="header">
<?php

$query="SELECT * FROM videow2 ORDER BY id DESC LIMIT 8";
$subject_set=mysql_query($query,$connection);
confirm_query($subject_set);
while($subject=mysql_fetch_array($subject_set)){
	//echo $subject['title'];
	echo "<a href=\"index.php?subj=".urlencode( $subject["id"])."\"><img src=\"http://img.youtube.com/vi/".$subject['video']."/default.jpg\" title=\"".$subject['title']."\" class=\"image\"></a>";
	echo "&nbsp";
	}
?>
  </div>
  <div id="body">