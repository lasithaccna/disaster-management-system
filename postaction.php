<?php 
session_start();



$nic=$_SESSION['nic']; 

// echo $nic;
?>


<?php




// echo $action;
$connection = mysqli_connect('localhost', 'root', '', 'lasi');


$action=$_POST['postid'];
$level=$_POST['treath_type'];
//we can check our connection.........

/*if (mysqli_connect_errno()) {
	die('faild' . mysqli_connect_error());
}
else  {
	echo "successfull";
	}*/



if (true) {
	// session_start();
	// $action=$_GET['action'];
	

	//echo($nic.$name.$password.$email.$cpassword.$address.$age.$connum);
	

	




		
//pass the data to database............
		$quary="UPDATE post SET status='active',treath_type='$level' WHERE postid = '$action';";




		mysqli_query($connection,$quary);

		

		header("location:pendingpost.php");
	
}else{
	echo "not working";
}



 ?>




