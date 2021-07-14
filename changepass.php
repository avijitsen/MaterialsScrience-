<?php
require_once 'core/init.php';
if($_POST) {
	$curr_pass = $_POST['curr_pass'];
	$new_pass = $_POST['new_pass'];
	$confirm_pass = $_POST['confirm_pass'];

	if($curr_pass == "") :
		echo "Current Password field is required <br />";
	endif;

	if($new_pass == "") :
		echo "New Password field is required <br />";
	endif;

	if($confirm_pass == "") :
		echo "Confirm Password field is required <br />";
	endif;

	if($curr_pass && $new_pass && $confirm_pass) :
		if(passwordMatch(loggedID(), $curr_pass)) :

			if($new_pass != $confirm_pass) :
				echo "New Password & Confirm Password are not same! <br />";
			else :
				if(changePassword(loggedID(), $new_pass)) :
					echo "Successfully updated";
				else :
					echo "Error while updating the Password! <br />";
				endif;
			endif;

		else :
			echo "Current Password is incorrect <br />";
		endif;
	endif;
}

 include('partials/head.php');
 include('partials/header.php');
?>
<div class="wrapper">
	<h2>Change Password</h2>
	<div class="cp_box">
		<form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
		  <div>
		    <label for="curr_pass">Current Password: </label>
		    <input class="cp"type="password" name="curr_pass" id="curr_pass" autocomplete="off" placeholder="Current Password" required />
		  </div>
		  <div>
		    <label for="new_pass">New Password: </label>
		    <input  class="cp2" type="password" name="new_pass" id="new_pass" autocomplete="off" placeholder="New Password" required />
		  </div>
		  <div>
		    <label for="confirm_pass">Confirm Password: </label>
		    <input class="cp" type="password" name="confirm_pass" id="confirm_pass" autocomplete="off" placeholder="Confirm Password" required />
		  </div>
		 <div >
		    <button class="logout" type="submit">Change Password</button>
		  </div>
		</form>

	</div>
</div>
