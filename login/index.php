<?php
session_start();

	include("connection.php");
	include("functions.php");

    $_SESSION;

	$user_data = check_login($con);
	
?>

<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home | Data Airways...</title>
<link rel="icon" href="">
<link href="styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

</script>
</head>

<body>
<div id="background_contain">
<div id="menubar-id">
        <div class="menubar-class">
        <a href="index.php"><img id="menu_logo" src=""/></a>  
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="reservation.php">Reservations</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="logout.php">Logout</a><br></li>
            </ul>
        </div>       
</div> <div id="menubar-id">
        <div class="menubar-class">
        <a href="index.php"><img id="menu_logo" src="" /></a>  
        </div>
        
        <div id="login">
        <h1><b> Search Flights </b></h1>        
        </div>
            
        <div id="login_space">
        </div>
        
        <div class="quick_book">
        <h3 id="booking_header"> Welcome | Data Airways...</h3>


        <p> Choose flight option</p>
        <div class="btn-group btn-group-justified">
            <div class="btn-group">
            <button id="button1" type="button" class="btn btn-primary" onclick="ShowOneWay()"> Flights </button>
            </div>
            <div class="btn-group">    
        </div>
    </div>
    <hr />
        
        <div id="oneway">
            <form role="form" action="oneway.php" method="post">
                <div class="row">
                <div class="col-sm-6">
                 <label for="from">From:</label>
                 <input type="text" class="form-control" id="from" name="from" placeholder="City" required/>
                </div>
                <br>

                <label for="to">To:</label>
                 <input type="text" class="form-control" id="to" name="to" placeholder="City" required/>
            
                </div>

                <hr>
                <div class="row">
                    <div class="col-sm-6">
                        <label for="depart">Depart:</label>
                        <input type="date" class="form-control" id="depart" name="depart" required>
                    </div>   
                </div>
                <br>
                <div class="btn-group btn-group-justified">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success"> Submit </button>  
                    </div>
                    <div class="btn-group">
                        <button type="reset" class="btn btn-info" value="reset"> Reset </button>
                    </div>         
                </div>
            </form>
        </div>
    </br>

        <button id="button3" type="button" href="#all" class="btn btn-primary" onclick="ShowAll()"> Search all Available Flights</button> 

        <div id="all" >
            <form role="form" action="all.php" method="post">
                <div class="row">
                    <div class="col-sm-6">
                    <label for="selectdate"> Select preferable date:</label>
                    <input type="date" class="form-control" id="selectdate" name="selectdate" required>                        
                    </div>
                </div>
                <br>
                <div class="row">
                    <dir class="col-sm-6">
                        <button type="submit" class="btn btn-primary">Show All</button>
                    </dir>
                </div>
            </form>
        </div>
    </div>

<div class="footer">
  <p>Olatunde Olawale | Web Development | Troy Univerity '21</p>
</div>


</body>
</html>