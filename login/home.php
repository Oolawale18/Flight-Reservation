<?php
session_start();

	include("connection.php");
	include("functions.php");
?>


<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome | Data Airlines</title>
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
                <li><a href="login.php">Login | Returning User</a></li>
                <li><a href="signup.php">Register | New User</a></li>
            </ul>
        </div>
        
        <div id="menubar_space">
        
        </div>
        
        
        <div class="quick_book">
        	<h3 id="booking_header"> Welcome | Data Airways...</h3>
        </div>

    <marquee behavior="alternate" direction="left">

      <img src="images/home1.jpg" width="300" height="400" alt="Airlines" />

      <img src="images/home3.jpg" width="300" height="400" alt="Airline" />

    </marquee>
    <div id="login">
            <marquee behavior="alternate"> Prepared for the Air | We are committed to giving you the peace of mind and making your journey easier to navigate. </marquee> 
    </div>

</div>       
<div class="footer">
  <p>Olatunde Olawale | Web Development | Troy Univerity '21</p>
</div>
</body>

</html>