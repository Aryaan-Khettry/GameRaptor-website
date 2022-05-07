<?php
$conn = mysqli_connect('localhost','root','','GameRaptor');
if(!$conn){
    die("Try again, Failed connection :".mysqli_connect_error());
    
}
