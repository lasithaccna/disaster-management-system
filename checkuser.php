<?php 
session_start();


$connection = mysqli_connect('localhost', 'root','','lasi');
if(!$connection) echo "error";
 
$nic=$_SESSION['nic']; 

echo $nic;

$sql = "SELECT user_type FROM users where nic='$nic';";



$result = $connection->query($sql);

if ($result->num_rows > 0) {
// output data of each row
$result = $result->fetch_assoc();



// echo $result['user_type'];
// session_start();
// $_SESSION['nic'] = $result['nic'];
// $_SESSION['utype']=$result['utype'];

if ($result['user_type']=='admin') {
	header("Location: admin.php");
}
elseif ($result['user_type']=='manager') {
	header("Location: manager.php");
}
else

{
	 header("Location: user.php");
	//echo "Hello world";
}

 }


else{

	
	session_start();
	session_unset();
	session_destroy();
	echo "not set"."<br>";
	echo $nic;
 // username and password sent from form 
}
// $myusername=$_POST['uname']; 
 ?>