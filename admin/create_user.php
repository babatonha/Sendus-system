<?php include('../functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title> Create user</title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<style>
		.header {
			background: orange;
		}
		button[name=register_btn] {
			background: orange;
		}
	</style>
</head>
<body>
       
     <!--navigation bar-->
       <ul class="nav">
          <li class="navli"><a class="active" href="landing.php">Home</a></li>
          <li class="navli"><a href="booking.php">Student</a></li>
          <li class="navli"><a href="driver.php">Driver</a></li>
          <li class="navli"><a href="admin/home.php">Admin</a></li>
          <li class="navli"><a href="fee.php">Check fee</a></li>
          <li class="navli"><a href="login.php">Login</a></li>
      </ul>
<hr> 



	<div class="header">
		<h2>Admin - create user</h2>
	</div>
	
	<form method="post" action="create_user.php">

		<?php echo display_error(); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label>User type</label>
			<select name="user_type" id="user_type" >
				<option value=""></option>
				<option value="student">Student</option>
				<option value="driver">Driver</option>
				<option value="admin">Admin</option>
			</select>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<label>Phone Number</label>
			<input type="text" name="phone" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="register_btn"> + Create user</button>
		</div>
	</form>
</body>
</html>