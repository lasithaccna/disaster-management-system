<?php 

$connection = mysqli_connect('localhost', 'root','','lasi');
if(!$connection) echo "error";
 
$nic=$_POST['nic']; 
$password=$_POST['psw'];


$sql = "SELECT * FROM users where nic='$nic' AND password='$password' AND user_status='active'; ";



$result = $connection->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$result = $result->fetch_assoc();
session_start();
$_SESSION['nic'] = $result['nic'];
// $_SESSION['utype']=$result['utype'];
header("Location: checkuser.php");


	// print_r ($result['username']);

	// $_SESSION['username'] = $row['username'];
	// while($row = $result->fetch_assoc()) {
	// 	echo "id: " . $row["username"]. " receivedFrom: " . $row["password"]. " Date time: " . $row["name"]. "<br>";
 //    }
}else{




	
	session_start();
	session_unset();
	session_destroy();
	header("Location: login1.php?id=1");
	
 // username and password sent from form 
}
// $myusername=$_POST['uname']; 
// $mypassword=$_POST['psw'];


?>