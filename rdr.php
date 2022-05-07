<html>
    <head>
        <meta-name = "viewport" content = "width=device-width,initial-scale = 1.0">
        <title>Red Dead Redemption</title>
        <link rel="stylesheet" href="hzd.css">
    </head>
    <?php
    include 'connection.php';
    include 'commentpushrdr.php';
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
                <h2>GameRaptor</h2><br>
                <nav>
                    <ul>
                        <li><a href ="home.php">Home</a></li>
                        <li><a href = "About.php">About us</a></li>
                        &nbsp;
                        <li><a href="logout.php">Logout</a><br/></li>
                    </ul>
                </nav>
            </div>
</div>
            <div class="card">
  <img src="img/rdr.png" alt="hzd" style="width:50% height:50%">
  <h1>Red Dead Redemption</h1>
  <p>Red Dead Redemption is set during the decline of the American frontier in the year 1911 and follows John Marston, a former outlaw whose wife and son are taken hostage by the government in ransom for his services as a hired gun.</p>
        <form action="insertrdr.php" method="post">
        <input type="submit" value="Add to games">
</form>
</div>
<div class = 'Reviews'>
<?php
echo "<form method = 'POST' action ='".pushComment($conn)."'>
    <input type='hidden' name ='user_name' value ='$user'>
    <input type = 'hidden' name = 'datetime' value = ".date('Y-m-d H:i:s').">
    <textarea name='message'></textarea><br>
    <button name='reviewSubmit' type = 'submit'>Submit</button>
    </form>";
    pullComment($conn);
    ?>
</div>
</body>
</html>