<?php
$id = $_GET['id'];
$lines = file("data.txt");
if(isset($lines[$id])){
    unset($lines[$id]);
    file_put_contents("data.txt", implode("", $lines));
}

header("Location: list.php");
exit;