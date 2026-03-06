<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Register</title>

</head>

<body class="bg-light">

<div class="container mt-5">

<div class="card shadow p-4">

<h3 class="text-center mb-4">Register</h3>

<form method="POST" action="store.php" onsubmit="return validateForm()">

<div class="mb-3">
<label>First Name</label>
<input type="text" name="fname" class="form-control" required>
</div>

<div class="mb-3">
<label>Last Name</label>
<input type="text" name="lname" class="form-control" required>
</div>

<div class="mb-3">
<label>Address</label>
<input type="text" name="address" class="form-control" required>
</div>

<div class="mb-3">
<label>Country</label>
<input type="text" name="country" class="form-control" required>
</div>

<div class="mb-3">
<label>Gender</label><br>

<input type="radio" name="gender" value="Male" required> Male
<input type="radio" name="gender" value="Female"> Female

</div>

<div class="mb-3">

<label>Skills</label><br>

<input type="checkbox" name="skills[]" value="PHP"> PHP
<input type="checkbox" name="skills[]" value="MySQL"> MySQL
<input type="checkbox" name="skills[]" value="Java"> Java

<p id="skillError" style="color:red;"></p>

</div>

<div class="mb-3">

<label>Username</label>
<input type="text" name="username" class="form-control" required>

</div>

<div class="mb-3">

<label>Password</label>
<input type="password" name="password" class="form-control" required>

</div>


<div class="mb-3">

<label>Profile Picture</label>
<input type="file" name="image">

</div>

<button class="btn btn-primary w-100">Register</button>

</form>

</div>
</div>


<script>

function validateForm(){

let skills = document.querySelectorAll('input[name="skills[]"]:checked');

if(skills.length === 0){

document.getElementById("skillError").innerText =
"Please select at least one skill";

return false;

}

return true;

}

</script>

</body>
</html>