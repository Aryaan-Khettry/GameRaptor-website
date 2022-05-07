<?php
function pullgameinfo($conn,$user){
    $sql="SELECT * from usergames where username='".$_SESSION['user']."'";
    $result = $conn->query($sql);
    $row =$result->fetch_assoc();
    echo "<div class='name'>";
    echo "The games in your inventory are :";
    echo "</div>";
    while($row =$result->fetch_assoc()){
        echo "<div class='commentbox'>";
    echo $row['gamename']."<br><br>";
    echo "</div>";
    }
}
function pullAccountInfo($conn,$user){
    $sql="SELECT Name,Birthday,Gender,Email from users where username='$user'";
    $result = $conn->query($sql);
    $row =$result->fetch_assoc();
    echo "<div class='name'>";
    echo "Your account details are:";
    echo "</div>";
    while($row =$result->fetch_assoc()){
        echo "<div class='commentbox'>";
    echo "Name : ";echo $row['Name']."<br>";
    echo "Birthday : ";echo $row['Birthday']."<br>";
    echo "Gender : ";echo $row['Gender']."<br>";
    echo "Email : ";echo $row['Email']."<br>";
    echo "</div>";
    }
}
?>