<?php
include "db.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];
$skills = $_POST['skills'] ?? [];
$code = $_POST['code'];

$skills_string = implode(",", $skills);   

$sql = "INSERT INTO users
(fname,lname,address,country,gender,skills,username,password,department,code)
VALUES
('$fname','$lname','$address','$country','$gender','$skills_string','$username','$password','$department','$code')";

mysqli_query($conn,$sql);

header("Location: list.php");
exit;