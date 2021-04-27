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
                <li><a href="home.php"> Home </a></li>
                <li><a href="login.php"> Login | Returning User </a></li>
                <li><a href="logout.php"> Logout </a></li>
            </ul>
        </div>
        
        <div id="login">
          Flights Available
        </div>
        
        
        
        <div id="login_space">
        
        </div>
        
        <div class="quick_book">
            <h3 id="booking_header">Trip Search Results</h3>
        </div>
        
    </div>
    
<?php
    session_start();
    include("functions.php");
    include("connection.php");

    $_SESSION;

    $user_data = check_login($con);


function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $from = test_input($_POST['from']);
    $to = test_input($_POST['to']);
    $depart = $_POST['depart'];

     $query = "select * from bookings where (departure = '$from') AND (destination = '$to') AND (date = '$depart')";
     $result = mysqli_query($con, $query);
     $rowcount = mysqli_num_rows($result);

    $rowtotal = $rowcount;

    if($rowtotal == 0){
        echo "<div class='alert alert-info'><strong>Search Result: </strong>".$rowtotal." result</div>";
    }
    else{
    echo "<div class='alert alert-info'><strong>Search Result: </strong>".$rowtotal."result(s)</div>";

    echo "<table class='table table-bordered table-striped table-hover'>        
          <thead>
          <tr>
           <th>Flight</th>
           <th>Date</th>
           <th>Departure</th>
           <th>Arrival</th>
           <th>Price</th>
           <th>Reserve</th>
          </tr>
          <thead>";


    while($row = mysqli_fetch_array($result)){
        echo "<tbody";
        echo "<tr>";
        echo "<td>".$row['flight_name']."</td>";
        echo "<td>".$depart."</td>";
        echo "<td>".$row['departure']."</td>";
        echo "<td>".$row['destination']."</td>";
        echo "<td>".$row['price']."</td>";


        echo '<td>
            <form method = "post" action = "reserve.php">
            <input type = "hidden" name = "user_id" value = "'.$user_data['user_id'].'">
            <input type = "hidden" name = "flight1_id" value = "'.$row['reserve_id'].'">
            <button type = "submit" class = "btn btn-primary"> Book Flight </button>
            </form>
            </td>';

        echo "</tr>";

    }

    echo "</tbody></table>";
    }
}

?>
        
</div>       
<div class="footer">
  <p>Olatunde Olawale | Web Development | Troy Univerity '21</p>
</div>
</body>

</html>



