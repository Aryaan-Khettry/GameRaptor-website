<html>
    <head>
        <meta-name = "viewport" content = "width=device-width,initial-scale = 1.0">
        <title>Horizon Zero Dawn</title>
        <link rel="stylesheet" href="hzd.css">
    </head>
    <?php
    include 'connection.php';
    include 'commentpush.php';
    date_default_timezone_set('Asia/Calcutta');
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
  <img src="img/hzd.jpg" alt="hzd" style="width:50%;height:50%;">
  <h1>Horizon Zero Dawn</h1>
  <p>Horizon Zero Dawn is a 2017 action role-playing game developed by Guerrilla Games and published by Sony Interactive Entertainment. The plot follows Aloy, a young hunter in a world overrun by machines, who sets out to uncover her past. The player uses ranged weapons, a spear, and stealth to combat mechanical creatures and other enemy forces. A skill tree provides the player with new abilities and bonuses. The player can explore the open world to discover locations and take on side quests. It was released for the PlayStation 4 in 2017 and Microsoft Windows in 2020.

Horizon Zero Dawn is Guerrilla Games' first intellectual property since Killzone in 2004 and its first role-playing game. Development began in 2011 after the completion of Killzone 3, with director Mathijs de Jonge considering it the riskiest idea pitched at the time. The game engine, Decima, was developed for Killzone: Shadow Fall and altered for Horizon Zero Dawn. Being set in a post-apocalyptic setting, anthropologists were consulted to authenticate the world's decay over a millennium. The soundtrack was led by composer Joris de Man, featuring contributions from The Flight.

Horizon Zero Dawn was praised by critics for its open world, story, visuals, combat, characterization, and the performance of voice actress Ashly Burch; however, the dialogue, melee combat, and character models received some criticism. The game won numerous awards and sold over 10 million copies by February 2019, making it one of the best-selling PlayStation 4 games. An expansion, The Frozen Wilds, was released in November 2017. A sequel, Horizon Forbidden West, is currently scheduled to be released for the PlayStation 4 and PlayStation 5 on 18 February 2022.</p>
        <form action="insert.php" method="post">
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