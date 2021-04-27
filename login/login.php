<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";

			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{
					$user_data = mysqli_fetch_assoc($result);

					if ($user_data['password'] === $password)
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}

			echo "The Username/Password is not valid! Please enter some valid information! or proceed to signup.";

		}else
		{
			echo "Please enter some valid information!";
		}


	}

?>

<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | Data Airlines</title>
<link rel="icon" href="img/icon.png">
<link href="styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/styles.css">

</head>
<body>

<div id="background_contain">
<div id="menubar-id">
        <div class="menubar-class">
        <a href="index.php"><img id="menu_logo" src="" /></a>  
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </div>

               
        <div id="menubar_space">
        
        </div>
        
        
        
        <div id="login_space">
        
        </div>
        
        <div class="quick_book">
        	<h3 id="booking_header"> Welcome | Login</h3>
			
        	
    		<form method="post" action="login.php">
					<div class="input-group">
						<label>Username</label>
						<input type="text" name="user_name" >
					</div><br>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password">
					</div><br>
					<div class="input-group">
						<button id="search" type="submit" class="btn" name="login_user"> LOGIN </button>
					</div>
					<p>
						Not yet a member? <a href="signup.php">Sign up</a>
					</p>
			</form>
        		
        
        </div>
        
       </div>
        
</div>       
<div class="footer">
  <p>Olatunde Olawale | Web Development | Troy Univerity '21</p>
</div>
</body>

</html>