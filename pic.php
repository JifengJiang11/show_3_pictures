<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Upload 3 pics - <?php echo $userRow['user_name']; ?></title>
</head>
<body>
<div id="div0">
	<div id="hello">
		<p>Hello <?php echo $userRow['user_name']; ?></p>
	</div>
	<div id="img">
		<div id="images">
			<div id="image1" class="image">
				<img src="https://s-media-cache-ak0.pinimg.com/originals/eb/d0/2d/ebd02d84bad505410e3f5b7857b17484.jpg" />
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Link:<input type="text" /><p>
				<input type="submit" value="Submit" />
			</div>
			<div id="image2" class="image">
				<img src="https://s-media-cache-ak0.pinimg.com/originals/15/4f/d0/154fd02b864ed2600a79d594c48392b9.jpg"/>
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Link:<input type="text" /><p>
				<input type="submit" value="Submit" />
			</div>
			<div id="image3" class="image">
				<img src="https://s-media-cache-ak0.pinimg.com/originals/91/af/04/91af04dffee4ef15c23e86202be895fc.jpg"/>
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Content:<input type="text" /></p>
				<p>Link:<input type="text" /><p>
				<input type="submit" value="Submit" />
			</div>
		</div>
	</div>
	<div id="signout">
		<a href="logout.php?logout">Sign Out</a>
	</div>
</div>
</body>
</html>