<html>
    <head>
        <meta-name = "viewport" content = "width=device-width,initial-scale = 1.0">
        <title>Home</title>
        <link rel="stylesheet" href="home.css">
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
        <div class= "container">
            <div class = "navbar">
                <img src = "img/logo.jpg">
                <h2>Home Page</h2><br>
                <nav>
                    <ul>
                        <li><a href = "About.php">About us</a></li>
                        &nbsp;
                        <li><a href="logout.php">Logout</a><br/></li>
                        <form action="add.php" method="POST">
                    </ul>
                </nav>
            </div>
            <div class = "bodybox">
            <h1 > Welcome, <?php Print "$user"?></h1>
            <a href = "Account.php">Account Settings</a>
            <a href = "games.php">Games</a>
            <a href = "news.php">News</a>
            <a href = "mygames.php">My Profile</a>
            </div>
                <h2>Games</h2>
<div class="row">
  <div class="column">
  <a href="hzd.php"><img src="img/HZD.jpg"></a>
    <p>Horizon Zero Dawn</p></br></a>
    <a href="GOW.php"><img src="img/GOW.jpg"></br></br></a>
    <p>God Of War</p>
  </div>
  <div class = "column">
  <a href="RDR.php"><img src="img/RDR.png"></a>
    <p>Red Dead Redemption</p>
    <a href="spd.php"><img src="img/Spiderman.jpg"></a>
    <p>Spiderman</p>
  </div>
</div>
	</body>
</html>