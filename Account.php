<head>
    <title>User Settings</title>
    <link rel="stylesheet" href = "Account.css">
</head>
<?php
    session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
        header("location: index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value
    ?>
<body>
<div class = "container">
    <form action="Account.php" method="post">
		<font size='+2'><h2><p style = "text-align:center;"><img style='vertical-align:left;' src="img/logo.jpg">Update Settings</h2>
        <font size='+2'><h1><p style = "text-align:center;">Enter your new details</p></font></h1>
		<p style = "text-align:center;"><label><u><b></b></u></label><br><br>
			<input type="text" name="username" placeholder="Username" required="required"  /> <br><br>
			<input type="password" name="password" placeholder="Password" required="required" /> <br/>
			<input type="text" name="Gender" placeholder="Gender" required="required"  /> <br><br>
			<input type="text" name="Email" placeholder="Email" required="required"  /> <br><br>
			Enter your Date of Birth<br><input type="date" name="dob" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31"/><br><br>
			<input type="submit" value="Submit"/><br><br>
            <a href="home.php"> Cancel </a></p></font><br/><br>
    <?php
    $username = '';
    $password ='';
    $birthday = '';
    $gender = '';
    $email = '';
    $bool = true;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $birthday = $_POST['dob'];
        $gender = $_POST['Gender'];
        $email = $_POST['Email'];
        $db = mysqli_connect("localhost","root","","gameraptor");
        if($db==false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        $query = mysqli_query($db,"Select * from users"); //Query the users table
        while($row = mysqli_fetch_array($query)) //display all rows from query
        {
            $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
            if($username == $table_users) // checks if there are any matching fields
            {
                $bool = false; // sets bool to false
                Print '<script>alert("Username has been taken! please retry");</script>'; //Prompts the user
                Print '<script>window.location.assign("home.php");</script>';
            }
        }

        if($bool)
        {
            mysqli_query($db,"update users set username='$username',password='$password',Birthday='$birthday',Gender='$gender',Email='$email' where username = '$user'");
            Print '<script>alert("Successfully changed! Please login again.");</script>'; // Prompts the user
            Print '<script>window.location.assign("login.php");</script>';
        }

    }
    ?>
</body>
</html>