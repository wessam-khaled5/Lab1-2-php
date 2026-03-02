<?php

$id = $_GET['id'];

$lines = file("data.txt");

if(isset($lines[$id])){

    $user = explode("|", trim($lines[$id]));

    echo "<h3>User Details</h3>";
    echo "First Name: $user[0] <br>";
    echo "Last Name: $user[1] <br>";
    echo "Email: $user[2] <br>";
    echo "Skills: $user[3] <br>";

}else{
    echo "User not found";
}