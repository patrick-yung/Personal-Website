<?php
    session_start();
?>
<?php include_once 'header.php'?>


	<div class="form-box" section class="change">

		<section id="Change" class="Change">
			<h1>Change Password</h1>
			<form action="includes/reset.inc.php" method="post">
            <input type="text" autocomplete="off" name="email" placeholder="Email" />
			<button type="submit" name="resetsubmit" >Change Now</button>
			</form>
		</section>

	</div>
	


<?php include_once 'footer.php'?>