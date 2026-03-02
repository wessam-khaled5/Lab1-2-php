<?php

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

$data = $fname . "|" .             
        $lname . "|" .
        $address . "|" .
        $country . "|" .
        $gender . "|" .
        $skills_string . "|" .
        $username . "|" .
        $password . "|" .
        $department . "|" .
        $code . "\n";

$fp = fopen("data.txt", "a");

if(!$fp){
    die("Error opening file");
}

fwrite($fp, $data);
fclose($fp);

header("Location: list.php");
exit;