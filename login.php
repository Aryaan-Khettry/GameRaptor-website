<html>
    <head>
    <link rel="stylesheet" type="text/css" href="css-align-text" media='screen' />
        <title>GameRaptor Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class = "container">
    <font size='+2'><h2><p style = "color:white;css-align-text:middle;">Login Page</h2>
        <form action="checklogin.php" method="POST">
           <input type="text" placeholder = "Enter Username" name="username" required="required" style="width:600px;" /> <br/><br>
            <input type="password" placeholder = "Enter password" name="password" required="required" style="width:600px;" /> <br/><br>
           <input type="submit" value="Login" style="height:30px; width:600px" />
           <nav>
            <br><a href = "index.php">Create an Account</a><br>
			</nav>
        </form>
    </body>
        </div>
</html>