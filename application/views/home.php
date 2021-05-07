<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>CI Starter</title>
</head>

<body>
	<div id="container">
		<h1>CI Starter</h1>
		<div>
			<a href="<?php echo base_url(); ?>insertuser">Insert User</a>
			<a href="<?php echo base_url(); ?>updateuser">Update User</a>
			<a href="<?php echo base_url(); ?>deleteuser">Delete User</a>
		</div>
		<div>
			<?php
			if (isset($message) && !empty($message)) {
				echo "<p>" . $message . "</p>";
			}
			?>
		</div>
		<div>
			<?php
			echo "<h1>Users</h1>";
			if (!empty($users)) {
				foreach ($users as $user) {
					echo "user Id: " . $user->id . " name:-" . $user->name . " phone:-" . $user->phone . "<br>";
				}
			} else {
				echo "No users found.";
			}
			?>
		</div>
	</div>

</body>

</html>