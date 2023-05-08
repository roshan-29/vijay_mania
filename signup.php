<?php 
session_start();

	include("connection.php");
	include("function.php");
	


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name=$_POST['username'];
		$email=$_POST['email'];
		$Age=$_POST['Age'];
		$phonenumber=$_POST['phonenumber'];
		$password=$_POST['password'];


		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
					$query = "INSERT INTO signup (user_name, email,Age,phonenumber,password) 
			VALUES ('$user_name', '$email','$Age','$phonenumber', '$password')";


			mysqli_query($con, $query);

			header("Location: signin.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>vijayism_here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="sign.css">
</head>

<body>
    <div class="header">
        <nav>
            <img src="images/logo2.png" class="logo">
    </div>
    </nav>
    <div class="header-content">

        <form  method="post"  class="signup">
            <h1>Sign Up </h1>
 
 

<input type="text" placeholder="Username " id="username" name="username"  style="background: rgb(255, 255, 255) ; border-color: rgb(0, 0, 0); border-width: 5px;"><br><br>
 
<input type="email" placeholder="Email Adrress " id="email" name="email" style="background: rgb(255, 255, 255) ; border-color: rgb(0, 0, 0); border-width: 5px;"><br><br>
 
<input type="number" placeholder="Age" id="age" name="Age" style="background: rgb(255, 255, 255) ; border-color: rgb(0, 0, 0); border-width: 5px;"><br><br>
 
 
 
<input type="tel" placeholder="Phone Number" id="phone" name="phonenumber" style="background: rgb(255, 255, 255) ; border-color: rgb(0, 0, 0); border-width: 5px;"><br><br>
                

<input type="password" placeholder="Password" id="password" name="password" style="background: rgb(255, 255, 255) ; border-color: rgb(0, 0, 0); border-width: 5px;"><br><br>









            <button type="submit "> Sign Up</button>
            <p>Already a user?<a href="signin.php">LOGIN </a> here.</p>
        </form>

<footer>@leo</footer>
    </div>
  
</body>


</html>


























