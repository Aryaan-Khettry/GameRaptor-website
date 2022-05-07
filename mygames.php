<html>
    <head>
        <meta-name = "viewport" content = "width=device-width,initial-scale = 1.0">
        <title>Home</title>
        <link rel="stylesheet" href="mygames.css">
    </head>
    <?php
    include 'connection.php';
    include 'showtables.php';
    session_start(); //starts the session
    if($_SESSION['user']){ // checks if the user is logged in  
    }
    else{
        header("location: index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user'];
    ?>
    <body>
        <div class= "container">
            <div class = "navbar">
                <img src = "img/logo.jpg">
                <h2>Home Page</h2><br>
                <nav>
                    <ul>
                        <li><a href = "Home.php">Home</a></li>
                        <li><a href = "About.php">About us</a></li>
                        <li><a href="logout.php">Logout</a><br/></li>
                        <form action="add.php" method="POST">
                    </ul>
                </nav>
            </div>
<?php   
    pullgameinfo($conn,$user);

    ?>
</div>
</body>
</html>