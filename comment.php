<?php 
session_start();

$nic=$_SESSION['nic']; 

//connect to the Database.........
$connection = mysqli_connect('localhost', 'root','','lasi');


//we can check our connection.........

/*if (mysqli_connect_errno()) {
	die('faild' . mysqli_connect_error());
}
else  {
	echo "successfull";
	
}*/


if (true) {
	
	$uname=$_POST['uname'];
	$com=$_POST['com'];
	$pid=$_POST['pid'];
	$date=date("Y/m/d");
	$time = date("h:i:s");


	// echo $pid.$uname.$com.$date.$time;
	/*echo $modulename;
	echo $date;
	echo $fname;
	echo $ftemp;
	echo $ftype;

	if ($flag==1) {
		echo "successfull";
	}
}*/


		$quary="INSERT INTO post_comment(postid,name,comment,date,time)
		VALUES ($pid,'$uname','$com','$date','$time')";
		
		mysqli_query($connection,$quary);
		header("location:postview.php?action=$pid");
		//redirect to home page......
		
	}

?>