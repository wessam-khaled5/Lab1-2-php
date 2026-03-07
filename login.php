<?php
session_start();
include "db.php";

if(isset($_POST['login'])){
    

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE username='$username'
AND password='$password'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$_SESSION['username']=$username;

header("Location: home.php");

}else{

echo "<p class='text-danger'>Invalid Login</p>";

}

}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card p-4 shadow">

<h3 class="text-center">Login</h3>

<form method="POST">

<input type="text" name="username" class="form-control mb-3" placeholder="Username">

<input type="password" name="password" class="form-control mb-3" placeholder="Password">

<button name="login" class="btn btn-success w-100">Login</button>

</form>

</div>
</div>

</body>
</html>