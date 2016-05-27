<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
 header("Location: pic.php");
}
if(isset($_POST['btn-login']))
{
 $username = mysql_real_escape_string($_POST['username']);
 $userpassword = mysql_real_escape_string($_POST['userpassword']);
 $res=mysql_query("SELECT * FROM users WHERE user_name='$username'");
 $row=mysql_fetch_array($res);
 if($row['user_password']==md5($userpassword))
 {
  $_SESSION['user'] = $row['user_id'];
  header("Location: pic.php");
 }
 else
 {
  ?>
        <script>alert('wrong details');</script>
        <?php
 }
 
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Upload 3 pics - sign in</title>
</head>
<body>
<div id="div0">
	<div id="sign">
		<div id="signin">
			<form method="post">
				<table align="center" width="100%" border="0">
					<tr>
						<td><input type="text" id="signin-username" name="username" placeholder="User Name" required /></td>
					</tr>
					<tr>
						<td><input type="password" id="signin-password" name="userpassword" placeholder="Password" required /></td>
					</tr>
					<tr>
						<td><button type="submit" id="signin-signin" name="btn-login">Sign In</button></td>
					</tr>
					<tr>
						<td><a href="register.php" id="signin-signup">Sign Up Here</a></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>