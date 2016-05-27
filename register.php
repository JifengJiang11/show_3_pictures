<?php
session_start();
if(isset($_SESSION['user'])!="")
{
 header("Location: pic.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $userpassword = md5(mysql_real_escape_string($_POST['userpassword']));
 
 if(mysql_query("INSERT INTO users(user_name,user_password) VALUES('$username','$userpassword')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Upload 3 pics - sign up</title>
</head>
<body>
<div id="signupdiv0">
	<div id="signupsign">
		<div id="signup">
			<form method="post">
				<table align="center" width="100%" border="0">
					<tr>
						<td><input type="text" id="signup-username" name="username" placeholder="Your Name" required /></td>
					</tr>
					<tr>
						<td><input type="password" id="signup-password" name="userpassword" placeholder="Your Password" required /></td>
					</tr>
					<tr>
						<td><button type="submit" id="signup-signin" name="btn-signup">Sign Me Up</button></td>
					</tr>
					<tr>
						<td><a href="index.php" id="signup-signup">Sign In Here</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>