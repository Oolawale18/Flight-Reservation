<?php
session_start();

	include("connection.php");
	include("functions.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$password2 = $_POST['password2'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$city = $_POST['city'];
		$zipcode = $_POST['zipcode'];
		$state = $_POST['state'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{
			//save to database
			$user_id = random_num(25);
			$query = "insert into users (user_id, user_name, password, password2, firstname, lastname, email, address, city, zipcode, state) values ('$user_id', '$user_name', '$password', '$password2', '$firstname', '$lastname', '$email', '$address', '$city', '$zipcode', '$state')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;

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
<title>Registration | Data Airways</title>
<link rel="icon" href="">
<link href="styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div id="background_contain">
<div id="menubar-id">
        <div class="menubar-class">
        <a href="index.php"><img id="menu_logo" src=""/></a>  
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
        	<h3 id="booking_header">Registration</h3>       	
    		<form method="post" action="signup.php">
				<div class="input-group">
				  <label>Username</label>
				  <input type="text" name="user_name">
				</div><br>
				<div class="input-group">
				  <label>Password</label>
				  <input type="text" name="password">
				</div><br>
				<div class="input-group">
				  <label>Confirm Password</label>
				  <input type="text" name="password2">
				</div><br>
				<div class="input-group">
				  <label>First Name</label>
				  <input type="text" name="firstname">
				</div><br>
				<div class="input-group">
				  <label>Last Name</label>
				  <input type="text" name="lastname">
				</div><br>
				<div class="input-group">
				  <label>Email</label>
				  <input type="email" name="email">
				</div><br>
				<div class="input-group">
				  <label>Address</label>
				  <input type="text" name="address">
				</div><br>
				<div class="input-group">
				  <label>City</label>
				  <input type="text" name="city">
				</div><br>
				<div class="input-group">
				  <label>Zip Code</label>
				  <input type="numeric" name="zipcode">
				</div><br>
				<div class="input-group">
				  <label>State</label>
				  <input type="text" name="state">
				</div><br>
				<div class="input-group">
				  <button id="search" type="submit" class="btn">Register</button>
				</div>
				<p>
					Already a member? <a href="login.php">Click here to Login</a>
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