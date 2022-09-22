<head>
    <title>User Settings</title>
    <link rel="stylesheet" href = "Account.css">
</head>
<?php
    session_start(); //starts the session
    if(!$_SESSION['user']){
        header("location: index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value
 ?>
<body>
<div class = "container">
    <form action="Account.php" method="POST">
		<font size='+2'><h2><p style = "text-align:center;"><img style='vertical-align:left;' src="img/logo.jpg">Update Settings</h2>
        <font size='+2'><h1><p style = "text-align:center;">Enter your credentials</p></font></h1>
		<p style = "text-align:center;"><label><u><b></b></u></label><br><br>
			<input type="text" name="username" placeholder="Enter Username" required = "required"  /> <br><br>
			<input type="password" name="password" placeholder="Enter Password" required = "required" /> <br/>
			<input type="text" name="new_username" placeholder="Enter your new username"  /> <br><br>
			<input type="password" name="new_pass" placeholder="Enter your new password" required = "required" /> <br/>
			<input type="text" name="Gender" placeholder="Gender"  /> <br><br>
			<input type="text" name="Email" placeholder="Email" required = "required" /> <br><br>
			Enter your Date of Birth<br><input type="date" name="dob" placeholder="dd-mm-yyyy" value=""min="1997-01-01" max="2030-12-31"/><br><br>
			<input type="submit" value="Submit"/><br><br>
            <a href="home.php"> Cancel </a></p></font><br/><br>
    <?php
    $bool = true;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $new_user= (empty($_POST['new_username']))? $username : $_POST['new_username'];
	$new_pass=(empty($_POST['new_pass']))? $password : $_POST['new_pass'];
	$username = $_POST['username'];
        $password = $_POST['password'];
        $birthday = (empty($_POST['dob']))? '9999-99-99 : $_POST['dob'];
        $gender = (empty($_POST['Gender']))? 'Unknown' : $_POST['gender'];
        $email = $_POST['Email'];
        $db = mysqli_connect("localhost","root","","gameraptor") or die("ERROR: Cannot Connect -> " .mysqli_connect_error());
        $query = mysqli_query($db,"Select username,password from users where username=$username");
        if($row = mysqli_fetch_array($query))
        {
	    $tab_pass=$row['password'];
            $table_users = $row['username']; 
            if($username == $table_users or $password ==$tab_pass) // Check if name and password matches
            {
                mysqli_query($db,"update users set username='$username',password='$password',Birthday='$birthday',Gender='$gender',Email='$email' where username = '$user'");
            	Print '<script>alert("Successfully changed! Please login again.");</script>'; // Prompts the user
            	Print '<script>window.location.assign("login.php");</script>';
            }
	    else{
	    $bool = false; // sets bool to false
                Print '<script>alert("Please enter correct username and password");</script>'; //Prompts the user
                Print '<script>window.location.assign("home.php");</script>';
		}
	}
    }
    ?>
</body>
</html>
