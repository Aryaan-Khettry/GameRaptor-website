<?php
session_start(); //starts the session
if(!$_SESSION['user']){
    header("location: index.php"); // redirects if user is not logged in
}
$user = $_SESSION['user'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GameRaptor";
$conn = mysqli_connect("localhost", "root", "", "GameRaptor") or die("Error : Cannot connect -> " . mysqli_connect_error());
        $user = $_SESSION['user'];
        $game="Horizon Zero Dawn";
        $sql = "INSERT INTO usergames  VALUES ('$user', 
            '$game')";
        if(mysqli_query($conn, $sql)){
            Print '<script>alert("Game has been added to your inventory. To check your games go to My profile");</script>'; // Prompts the user
			Print '<script>window.location.assign("home.php");</script>'; 
        } else{
            echo "ERROR: Connection lost -> " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
