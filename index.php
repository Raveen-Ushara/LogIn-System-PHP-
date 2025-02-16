<!DOCTYPE html>
<html>
<head>
	<title>Life Backup Insurance</title>
	<link rel="stylesheet" type="text/css" href="sty.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Sales Performance Evaluation System</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Agent Code</label>
     	<input type="text" name="uname" ><br>

     	<label>Password</label>
     	<input type="password" name="password" ><br>

     	<button type="submit">Login</button>
     </form>
</body>
</html>