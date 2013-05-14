


</div>


<?php if(!isset($_SESSION['user_id'])){ // subject selected ?>
<div id="footer"><br/><br/><a href="index.php">Home</a>&nbsp|&nbsp<a href="login.php">Login</a>&nbsp|&nbsp <a href="http://neciudan.com">CST Development</a>&nbsp|&nbsp&copy Neciu Dan 2013
</div>
<?php } else { // nothing selected ?>
	<div id="footer"></br></br><a href="index.php">Home</a>&nbsp|&nbsp<a href="new_user.php">Add User</a>&nbsp|&nbsp<a href="add_video.php">Add Video</a>&nbsp|&nbsp<a href="logout.php">Logout</a>&nbsp|&nbsp <a href="http://neciudan.com">CST Development</a>&nbsp|&nbsp&copy Neciu Dan 2013
	</div>
	<?php } ?>
</div>
 </body>
  </html>
<?php
if (isset($connection)){
mysql_close($connection);
}
?>