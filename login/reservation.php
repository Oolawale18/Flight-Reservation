<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Home | Data Airways </title>
<link rel="icon" href="">
<link href="styles.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="css/styles.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>

<body>
<div id="background_contain">
<div id="menubar-id">
        <div class="menubar-class">
        <a href="index.php"><img id="menu_logo" src=""/></a>  
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="logout.php">Logout</a><br></li>
            </ul>
        </div>       
</div> <div id="menubar-id">
        <div class="menubar-class">
        <a href="index.php"><img id="menu_logo" src="" /></a>  
        </div>
        
        <div id="login">
        <h1><b> Found Reservations </b></h1> 
        </div>
        
        
        
        <div id="login_space" >
        </div>
        
        <div class="quick_book">
            <h3 id="booking_header"> Reservations | Data Airways </h3>

<?php
session_start();

    include("connection.php");
    include("functions.php");

    $_SESSION;

    $user_data = check_login($con);
    $user_id = $user_data['user_id'];

    $query = "select * from bookings b inner join reservation r on b.reserve_id = r.reserve_id where r.user_id = '$user_id'";

    $result = mysqli_query($con,$query);
    $rowtotal = mysqli_num_rows($result);

    echo "<h4> Welcome ".$user_data['user_name']."</h4>";
        if($rowtotal == 0){
            echo "<div class = 'alert alert-info'><strong> Bookings Found: </strong>".$rowtotal." booking</div>";
        }
        else{
        echo "<div class='alert alert-info'><strong> Bookings Found: </strong>".$rowtotal." booking(s)</div>";
        echo "<table class= 'table table-bordered table-striped table-hover'>
              <thead>
              <tr>
                <th> Flight </th>
                <th> Date </th>
                <th> Departure </th>
                <th> Arrival </th>
                <th> Price </th>
              </tr>
              </thead>";

        while($row = mysqli_fetch_array($result)){
            echo "<tbody>";

            echo "<tr>";
            echo "<td>".$row['flight_name']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['departure']."</td>";
            echo "<td>".$row['destination']."</td>";
            echo "<td>".$row['price']."</td>";
            echo "</tr>";
        }

        echo "</tr>";

    echo "</tbody></table>";
    }
?>


<div class="footer">
  <p>Olatunde Olawale | Web Development | Troy Univerity '21</p>
</div>


</body>
</html>