<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/connection.php");?>
<?php require_once("includes/functions.php");?>
<?php find_selected_page();?>
<?php include("includes/header.php");?>
<?php if (!is_null($sel_subject)) { // subject selected ?>
			<?php echo "<div id=\"video\"><iframe width=\"620\" height=\"415\" src=\"http://www.youtube.com/embed/".$sel_subject['video']."\" frameborder=\"0\" allowfullscreen></iframe></div>" ?>
			<div class="fb-like" data-href="https://www.facebook.com/pages/Craci-Movement/162091120496360?fref=ts" data-send="false" data-width="700" data-show-faces="true" data-font="trebuchet ms"></div>
			<div id="beer" style="background-image: url(images/beer.png); height: 360px; width: 700px;background-repeat:no-repeat;"></br></br><div id="comments" style="width:190px;"><?php echo $sel_subject['comments'];?></div></div></div>
			<?php } else { // nothing selected ?>
			<div id="craci" style="background-image: url(images/craci.jpg); height: 400px; width: 700px;background-repeat:no-repeat;"></div>
			<div class="fb-like" data-href="https://www.facebook.com/pages/Craci-Movement/162091120496360?fref=ts" data-send="false" data-width="700" data-show-faces="true" data-font="trebuchet ms"></div>
		    <div id="beer" style="background-image: url(images/beer.png); height: 360px; width: 700px;background-repeat:no-repeat;"></br></br><div id="comments">Craci Movement!</div></div>
			<?php } ?>

<?php require("includes/footer.php");?>