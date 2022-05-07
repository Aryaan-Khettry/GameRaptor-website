<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $bool = true;
   
    mysql_connect("localhost", "root","") or die(mysql_error());      //Connect to server
    mysql_select_db("gameraptor") or due("Cannot connect to database"); //Connect to database
    $query = mysql_query("Select * from users"); //Query the users table
    while($row = mysql_fetch_array($query)) //display all rows from query
    {
        $table_users == $row['username']; // the first username row 
                                          // is passed on to $table_users, 
                                          // and so on until the query is finished
        if($username == $table_users)     // checks if there are any matching fields
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