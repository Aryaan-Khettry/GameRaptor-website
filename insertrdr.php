<?php
session_start(); //starts the session
if($_SESSION['user']){ // checks if the user is logged in  
}
else{
    header("location: index.php"); // redirects if user is not logged in
}
$user = $_SESSION['user'];
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GameRaptor";
$conn = mysqli_connect("localhost", "root", "", "GameRaptor");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $user = $_SESSION['user'];
        $game="Red Dead Redemption";
        $sql = "INSERT INTO usergames  VALUES ('$user', 
            '$game')";
          
        if(mysqli_query($conn, $sql)){
            Print '<script>alert("Game has been added to your inventory. To check your games go to My profile");</script>'; // Prompts the user
			Print '<script>window.location.assign("home.php");</script>';
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>