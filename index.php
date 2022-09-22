<html>
	<head>
		<title>Welcome to GameRaptor</title>
		<link rel="stylesheet" href="register.css">
	</head>
	<body>
		<div class = "container">
			<form action="index.php" method="POST">
			<h2><p><img src="img/logo.jpg">Welcome to GameRaptor</h2>
			<p style = "text-align:center;"><label><u><b>Registration Form</b></u></label><br>
			<input type="text" name="username" placeholder="Username" required="required"  /> <br>
			<input type="password" name="password" placeholder="Password" required="required" /> <br/>
			<input type="text" name="Gender" placeholder="Gender"/> <br>
			<input type="text" name="Email" placeholder="Email"  required = "required"/> <br>
			Enter your DOB<br><input type="date" name="dob" placeholder="Date Of Birth" value=""min="1997-01-01" max="2030-12-31"/><br>
			<input type="submit" value="Register" /><br>
			<nav>
			<a href="login.php">Already have an account? Login..</a><br>
			</nav>
			</form>	
		</div>	
		<?php
		$username = '';
		$password ='';
		$Birthday = '';
		$gender = '';
		$email = '';
    	$bool = true;
		if($_SERVER["REQUEST_METHOD"] == "POST"){
			$username = $_POST['username'];
			$password = $_POST['password'];
			$Birthday = (empty($_POST['dob']))? '9999/99/99' : $_POST['dob'];
			$gender = (empty($_POST['Gender']))? 'Unknown' : $_POST['gender'];
			$email = $_POST['Email'];
			$db = mysqli_connect("localhost","root","","gameraptor");
			if($db==false){
				die("ERROR: Could not connect -> " . mysqli_connect_error());
			}
			$query = mysqli_query($db,"Select username from users");
			while($row = mysqli_fetch_array($query))
			{
				$table_users = $row['username'];
				if($username == $table_users) 
				{
					$bool = false;
					Print '<script>alert("Username has been taken! please retry");</script>';
					Print '<script>window.location.assign("index.php");</script>';
				}
			}

			if($bool)
			{
				mysqli_query($db,"INSERT INTO users (username,password,Birthday,Gender,Email) VALUES ('$username','$password','$Birthday','$gender','$email')");
				Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
				Print '<script>window.location.assign("login.php");</script>';
			}

		}
		?>
	</body>
</html>
