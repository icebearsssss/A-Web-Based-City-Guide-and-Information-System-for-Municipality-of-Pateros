<?php

$host="localhost";
$user="root";
$password="";
$db="user_db";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$username=$_POST["username"];
	$password=$_POST["password"];


	$sql="select * from users where username='".$username."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["admin_type"]=="admin")
	{	

		$_SESSION["username"]=$username;

		header("location:admin_page.php");
	}
    else
	{
		echo "username or password incorrect";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/login_style.css">
</head>
<body>
	<div class="center">
    <div class="d-flex justify-content-center align-items-center">
	
    	
    	<form class="shadow w-450 p-3" 
    	      action="#" 
    	      method="post">

    		<h4 class="display-4  fs-1" style="text-align: center">ADMIN LOGIN</h4><br>

		  <div class="mb-3">
		    <label class="form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="username">
			</div>

		  <div class="mb-3">
		    <label class="form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="password">
		  </div>
		  <input type="submit" value="Login">
		</form>
    </div>
	</div>
</body>
</html>
