<?php
if(!mysql_connect("localhost","root","123456"))
{
	die('oops connection problem ! —> '.mysql_error());
}
if(!mysql_select_db("mydb"))
{
	die('oops database selection problem ! —> '.mysql_error());
}
?>