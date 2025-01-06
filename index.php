<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="icon" href="ganda.jpg" sizes="16x16 32x32" type="image/jpg" >
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	body {
	background-image: url('grey.jpg');
	}
	</style>
</head>
<body>

     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     <button type="submit">Login</button>
     	<a href="addacc.php">Sign Up</a>
		<a href="mainpage.php">Back to Cover Page</a>
     </form>
</body>
</html>