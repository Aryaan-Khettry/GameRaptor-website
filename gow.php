<html>
    <head>
        <meta-name = "viewport" content = "width=device-width,initial-scale = 1.0">
        <title>God Of War</title>
        <link rel="stylesheet" href="hzd.css">
    </head>
    <?php
    include 'connection.php';
    include 'commentpushgow.php';
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
  <img src="img/gow.jpg" alt="hzd" style="width:50% height:50%">
  <h1>God of War</h1>
  <p>In God of War, players control Kratos, a Spartan warrior who is sent by the Greek gods to kill Ares, the god of war. As the story progresses, Kratos is revealed to be Ares' former servant, who had been tricked into killing his own family and is haunted by terrible nightmares.
  </p>
        <form action="insertgow.php" method="post">
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