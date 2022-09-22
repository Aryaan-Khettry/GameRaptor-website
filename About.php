<html>
    <head>
        <meta-name = "viewport" content = "width=device-width,initial-scale = 1.0">
        <title>Home</title>
        <link rel="stylesheet" href="About.css">
    </head>
    <?php
    session_start(); //starts the session
    if(!$_SESSION['user']) // checks if the user is logged in  
        header("location: index.php"); // redirects if user is not logged in
    }
    $user = $_SESSION['user']; //assigns user value
    ?>
    <body>
        <div class= "container">
            <div class = "navbar">
                <img src = "img/logo.jpg">
                    <h2>GameRaptor</h2><br>
                        <nav>
                            <ul>
                                <li><a href = "Home.php">Home</a></li>&nbsp;
                                <li><a href="logout.php">Logout</a><br/></li>
                                <form action="add.php" method="POST">
                            </ul>
                        </nav>
            </div>
            <h3 style = "text-align:center; color:white;">About Us</h3><br>
            <div class = "bodybox">
                <p>We are a database driven website containing the various games present in the world, all in one website for ease of access.
                <br>This is primarily an information driven website, used to find the various games created, regardless of the platform it is on
                <br>or the company it is owned by.
                Browse all the games here :<br><a href = "games.php">Games</a></p>
            </div>
