<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial;
        }
        .error {
            color: red;
            font-size: 14px;
            
        }
       
    </style>
</head>
<body>

<h2>Registration Form</h2>

<form id="regForm" action="store.php" method="POST">

    First Name:
    <input type="text" name="fname" required pattern="[A-Za-z]+"
           title="Only letters allowed">
    <br>

    Last Name:
    <input type="text" name="lname" required pattern="[A-Za-z]+"
           title="Only letters allowed">
    <br>

    Address:
    <textarea name="address" required></textarea>
    <br>

    Country:
    <select name="country" required>
        <option value="">Select Country</option>
        <option value="Egypt">Egypt</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
    </select>
    <br>

    Gender:
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    Skills:
    <input type="checkbox" name="skills[]" value="PHP"> PHP
    <input type="checkbox" name="skills[]" value="MySQL"> MySQL
    <input type="checkbox" name="skills[]" value="J2SE"> J2SE
    <input type="checkbox" name="skills[]" value="PostgreSQL"> PostgreSQL
    <br>
    <span class="error" id="Error"></span>
    <br>

    Username:
    <input type="text" name="username" required>
    <br>

    Password:
    <input type="password" name="password" required minlength="6">
    <br>

    Department:
    <input type="text" name="department" value="OpenSource" readonly>
    <br>

    Enter Code: <b>Sh68Sa</b>
    <input type="text" name="code" required>
    <br>
    <span class="error" id="codeError"></span>
    <br><br>

    <input type="submit" value="Submit">
    <input type="reset" value="Reset">

</form>


<script>
document.getElementById("regForm").addEventListener("submit", function(e){
    let skills = document.querySelectorAll('input[name="skills[]"]:checked');
    let code = document.querySelector('input[name="code"]').value;

    document.getElementById("Error").innerText = "";
    document.getElementById("codeError").innerText = "";

    if(skills.length === 0){

        document.getElementById("skillError").innerText =
        "Please select at least one skill";
        e.preventDefault();
    }

});
</script>

</body>
</html>