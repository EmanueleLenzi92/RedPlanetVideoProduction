
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$usernameAdm=$_POST['username'];

$passwordAdm=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include ('../../php/conn.php');

// To protect MySQL injection for Security purpose
$usernameAdm = stripslashes($usernameAdm);
$passwordAdm = stripslashes($passwordAdm);
$usernameAdm = mysqli_real_escape_string($conn, $usernameAdm);
$passwordAdm = mysqli_real_escape_string($conn, $passwordAdm);
$passwordAdm= md5($passwordAdm);

// Selecting Database

// SQL query to fetch information of registerd users and finds user match.
/* 	$sql2= "insert into login (password, username) VALUES ('$passwordAdm','$usernameAdm')";
$conn->query($sql2); */
$sql2= "select * from login where password='$passwordAdm' AND username='$usernameAdm'";
$result2 = $conn->query($sql2);
$rows= $result2->num_rows;

if ($rows == 1) {
$_SESSION['login_user']=$usernameAdm; // Initializing Session
header("location: ../admin.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($conn); // Closing Connection
} 
}
?>
