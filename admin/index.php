<?php
include('localhost/cteller.com/jamb-upload/admin/login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login</title>
	<link rel="stylesheet" a href="styles\login.css">
	<link rel="stylesheet" a href="syles\font-awesome.min.css">
	<link href="../styles/styles.css" rel="stylesheet" type="text/css" />
	<link href="../styles/login.css" rel="stylesheet" type="text/css" />
</head>
<body bgcolor="#F0F0F0" background="../images/bg.jpg">
<div class="container">
<img src="../images/login.png">
		<form method="post" action="#">
		<div class="form-input">
		  <input type="text" name="text" placeholder="Enter the User Name"/>
		</div>
		<div class="form-input">
		<input type="password" name="password" placeholder="password"/>
		</div>
		<input type="submit" name="submit" value="LOGIN" class="btn-login"/>
  </form>
</div>
</body>
</html>