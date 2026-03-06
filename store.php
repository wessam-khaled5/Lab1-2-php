<?php

include "db.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender = $_POST['gender'] ?? '';
$username = $_POST['username'];
$password = $_POST['password'];


$skills = $_POST['skills'] ?? [];

if(empty($skills)){

die("Please select at least one skill");

}
$skills_string = implode(",", $skills);

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

move_uploaded_file($tmp,"uploads/".$image);

$sql = "INSERT INTO users
(fname,lname,address,country,gender,skills,username,password,image)

VALUES

('$fname','$lname','$address','$country','$gender','$skills_string','$username','$password','$image')";

mysqli_query($conn,$sql);

header("Location: login.php");

?>