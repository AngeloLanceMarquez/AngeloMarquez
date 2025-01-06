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
<?php include 'templates/loading_screen.php' ?>
     <form action="insertacc.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<label>Name</label>
     	<input type="password" name="name" placeholder="Password"><br>

     	<button type="submit">Save</button><BR><BR><BR>
     	<a href="index.php">Back to Login</a>
     </form>
</body>
</html>