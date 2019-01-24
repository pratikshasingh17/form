<?php

$link = mysqli_connect("localhost", "root", "", "demo");


if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$select_db = mysqli_select_db($link, 'demo');
if (!$select_db){
   die("Database Selection Failed" . mysqli_error($link));
 }

$user_id = mysqli_real_escape_string($link, $_REQUEST['user_id']);
$password = mysqli_real_escape_string($link, $_REQUEST['password']);


$sql = "INSERT INTO demo (user_id,password) VALUES ('$user_id', '$password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
