<?php
    session_start();

    include("connection.php");
    include("functions.php");

    $_SESSION;

    $user_data = check_login($con);

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user_id = $user_data['user_id'];
        $flight1 = $_POST['flight1_id'];


        $id1 = $user_id * $flight1;
        $id2 = $user_id * $flight2;

        $query = "insert into reservation (id, user_id, reserve_id) values ('$id1', '$user_id', '$flight1')";
        $query1 = "insert into reservation (id, user_id, reserve_id) values ('$id2', '$user_id', '$flight2')";

        mysqli_query($con, $query);
        mysqli_query($con, $query1);

        header("location: index.php");
        die;
    }
    else{
        echo "Not Available";

    }
?>