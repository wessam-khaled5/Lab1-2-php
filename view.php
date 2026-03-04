<?php
include "db.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM users WHERE id=$id");

$user = mysqli_fetch_assoc($result);

echo "<h3>User Details</h3>";

echo "First Name: ".$user['fname']."<br>";
echo "Last Name: ".$user['lname']."<br>";
echo "Address: ".$user['address']."<br>";
echo "Country: ".$user['country']."<br>";
echo "Gender: ".$user['gender']."<br>";
echo "Skills: ".$user['skills']."<br>";
echo "Username: ".$user['username']."<br>";
echo "Department: ".$user['department']."<br>";
