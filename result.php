<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$skills = $_POST['skills'];
$department = $_POST['department'];
$code = $_POST['code'];

if($gender == "Male"){
    $title = "Mr.";
}else{
    $title = "Miss";
}

if($code != "Sh68Sa"){
    echo "Wrong Code!";
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Review</title>
</head>
<body>

<h2>Thanks <?php echo $title . " " . $fname . " " . $lname; ?></h2>
<h3>Please Review Your Information:</h3>

Name: <?php echo $fname . " " . $lname; ?> <br><br>
Address: <?php echo $address; ?> <br><br>
Your Skills:
<?php
$skills = $_POST['skills'] ?? [];
if(!empty($skills)){
    foreach($skills as $skill){
        echo $skill . " ";
    }
}
?>
<br><br>
Department: <?php echo $department; ?>
</body>
</html>