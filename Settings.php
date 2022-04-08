<?php include_once 'header.php'?>
<?php include_once 'includes/admins.php'?>


	<div class="form-box" section class="change">

		<section id="Change" class="Change">
			<h1>Change Password</h1>
			<form action="includes/change.inc.php" method="post">
			<input type="text" autocomplete="off" name="oldpassword" placeholder="Old Password" />
			<input type="password" autocomplete="off" name="Newpassword" placeholder="New Password" />
			<button type="submit" name="submit" >Change Now</button>
			</form>
		</section>

	</div>
	


<?php include_once 'footer.php'?>