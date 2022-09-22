<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $bool = true;
   
    mysql_connect("localhost", "root","","gameraptor") or die(mysqli_error());
    $query = mysql_query("Select * from users");
    while($row = mysql_fetch_array($query))
    {
        $table_users == $row['username']; 
        if($username == $table_users)     
        {
            $bool = false; // sets bool to false
            Print '<script>alert("Username has been taken!");</script>';     //Prompts the user
            Print '<script>window.location.assign("index.php");</script>";
        }
    }

    if($bool) // checks if bool is true
    {
        mysql_query("INSERT INTO users (username, password) _
                     VALUES ('$username', 'password')"); // inserts value into table users
        Print '<script>alert("Successfully Registered!");</script>';      // Prompts the user
        Print '<script>window.location.assign("register.php");</script>'; // redirects to 
                                                                          // register.php
    }
}
?>
