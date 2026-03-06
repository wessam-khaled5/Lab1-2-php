<?php
session_start();

if(!isset($_SESSION['username'])){
header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>

<head>

<title>Home</title>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

<div class="card shadow text-center p-4" style="width:400px">

<img src="uploads/default.png" class="profile-img mx-auto mb-3">

<h3 class="mb-2">

Welcome

<?php echo $_SESSION['username']; ?>

</h3>

<p class="text-muted">You are successfully logged in</p>

<a href="logout.php" class="btn btn-danger w-100 mt-3">

Logout

</a>

</div>

</div>

</body>

</html>