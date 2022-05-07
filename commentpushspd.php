<?php
function pushComment($conn)
{
    if(isset($_POST['reviewSubmit']))
    {
        $uid=$_POST['user_name'];
        $date=$_POST['datetime'];
        $message=$_POST['message'];
        $sql="INSERT INTO spd_reviews (user_name,datetime,user_review) VALUES ('$uid','$date','$message')";
        $result = $conn->query($sql);
        echo "Review posted; Reload the page to view the review.";
    }
}
function pullComment($conn){
    $sql="SELECT * from spd_reviews";
    $result = $conn->query($sql);
    $row =$result->fetch_assoc();
    while($row =$result->fetch_assoc()){
        echo "<div class='commentbox'>";
    echo $row['user_name']." at ";
    echo $row['datetime']."<br>";
    echo nl2br($row['user_review']."<br>");
    echo "</div>";
    }
}