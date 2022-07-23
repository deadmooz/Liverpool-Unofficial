<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername, $username, $password,"contact");

$name= $_POST['name'];
$email = $_POST['email'];
$Phone = $_POST['Phone'];
$query = $_POST['query'];

$query="insert into contact_us values ('".$name."','".$email."','".$Phone."','".$query."')";
$stmt=$conn->prepare($query);
$stmt->execute();
header("Location: http://localhost/WP/Sonam/thankyou.html"); 
$stmt->close();

?>