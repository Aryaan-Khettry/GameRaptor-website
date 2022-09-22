<?php
//Verify user login
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $userid=$_GET['id'];
    $bool = true;

    $db = mysqli_connect("localhost","root","","gameraptor");
    $query = mysqli_query($db,"Select * from users WHERE username='$username'");
    $exists = mysqli_num_rows($query);
    $table_users = "";
    $table_password = "";
    if($exists > 0) 
    {
       $row = mysqli_fetch_assoc($query) 
          $table_users = $row['username']; 
          $table_password = $row['password'];  
        // Setting username as a session variable
             $_SESSION['user'] = $username; 
             header("location: home.php"); 
          }
       }
       else
       {
        Print '<script>alert("Incorrect Password!");</script>';        // Prompts the user
        Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
       }
    }
    else
    {
        Print '<script>alert("Incorrect username!");</script>';     
        Print '<script>window.location.assign("login.php");</script>'; 
    }
?>
