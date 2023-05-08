<?php 

session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from signup where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: home.html");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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

<form method="post"  class="signin">
    <h1>LOGIN</h1>
  
    <input  type="text" placeholder="username " id="username" name="user_name" style="background: rgb(255, 255, 255) ; border-color: rgb(233, 0, 0); border-width: 5px;"><br><br>

    <input type="password" placeholder= "Enter correct Password" id="password" name="password" style="background: rgb(255, 255, 255) ; border-color: rgb(0, 0, 0); border-width: 5px;"><br><br>
    
    <button type="submit "> LOGIN</button>

    <p>Not a user ?<a href="signup.php">SignUp  </a> here.</p>
</form>
<footer>@leo</footer>

            </div>
 </body>

</html>