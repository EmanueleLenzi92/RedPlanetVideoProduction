
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include ('../php/conn.php');

session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$sql2= "SELECT username FROM login where username= '$user_check'" ;
$result2 = $conn->query($sql2);
$login_session;
while($row2 = $result2->fetch_assoc()) {
	$login_session = $row2['username'];
}

if(!isset($login_session)){
	mysqli_close($conn); // Closing Connection
	header('Location: login/index.php'); // Redirecting To Home Page
}
?>
