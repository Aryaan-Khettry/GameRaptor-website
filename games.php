<html>
    <head>
        <title>Games</title>
        <link rel="stylesheet" href="games.css">
    </head>
<body>
    <div class = "header">
        <img src = "img/logo.jpg">
        <nav>
             <ul>
                    <li><a href = "Home.php">Home</a></li>
                    &nbsp;
                    <li><a href="logout.php">Logout</a><br/></li>
                    <form action="add.php" method="POST">
                </ul>
            </nav>
    </div>
<div class = "table">
<h1>Genres and their respective ID's:</h1>
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "GameRaptor";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host, $user, $pass, $db_name);
$result = $conn->query("SELECT * FROM genre limit 100");
$query = array();
while($query[] = mysqli_fetch_assoc($result));
array_pop($query);
echo '<table border="1" style="width:100%;background-color:black;" >';
echo '<tr>';
foreach($query[0] as $key => $value) {
    echo '<td>';
    echo $key;
    echo '</td>';
}
echo '</tr>';
foreach($query as $row) {
    echo '<tr>';
    foreach($row as $column) {
        echo '<td style = "text-align:left;">';
        echo $column;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';;
                ?>
                <h2>Games</h2>
<?php
$host    = "localhost";
$user    = "root";
$pass    = "";
$db_name = "GameRaptor";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host, $user, $pass, $db_name);
$result = $conn->query("SELECT * FROM game limit 100");
$query = array();
while($query[] = mysqli_fetch_assoc($result));
array_pop($query);
echo '<table border="1" style="width:100%;background-color:black;" >';
echo '<tr>';
foreach($query[0] as $key => $value) {
    echo '<td>';
    echo $key;
    echo '</td>';
}
echo '</tr>';
foreach($query as $row) {
    echo '<tr>';
    foreach($row as $column) {
        echo '<td style = "text-align:left;">';
        echo $column;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';;
                ?>
</body>
</html>