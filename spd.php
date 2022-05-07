<html>
    <head>
        <meta-name = "viewport" content = "width=device-width,initial-scale = 1.0">
        <title>Spiderman</title>
        <link rel="stylesheet" href="hzd.css">
    </head>
    <?php
    include 'connection.php';
    include 'commentpushspd.php';
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
  <img src="img/spiderman.jpg" alt="hzd" style="width:50% height:50%">
  <h1>Spiderman</h1>
  <p>Marvel's Spider-Man is a 2018 action-adventure game developed by Insomniac Games and published by Sony Interactive En
      tertainment. Based on the Marvel Comics character Spider-Man, it tells 
      an original narrative that is inspired by the long-running comic book mythology, whi
      le also drawing from various adaptations in other media. In the main story, the super-human crime 
      lord Mister Negative orchestrates a plot to seize control of New York City's criminal underworld. When 
      Mister Negative threatens to release a deadly virus, Spider-Man must confront him and protect the city while dealing
       with the personal problems of his civilian persona, Peter Parker.</p>
        <form action="insertspd.php" method="post">
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