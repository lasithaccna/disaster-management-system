<?php 

session_start();
//connect to the Database.........
$connection = mysqli_connect('localhost', 'root', '', 'lasi');



//we can check our connection.........

/*if (mysqli_connect_errno()) {
	die('faild' . mysqli_connect_error());
}
else  {
	echo "successfull";
	}*/



if (true) {
	// session_start();
	$nic=($_POST['nic']);
	$name=($_POST['uname']);
	$image_name=$_FILES["pimg"]["name"];
	$image_temp=$_FILES["pimg"]["tmp_name"];
	$image_location=move_uploaded_file($image_temp,"profileimages/$image_name");
	$job=($_POST['job']);	
	$password=($_POST['psw']);
	$cpassword=($_POST['cpsw']);	
	$email=($_POST['email']);	
	$address=($_POST['address']);
	$age=($_POST['age']);
	$connum=($_POST['cn']);



	//echo($nic.$name.$password.$email.$cpassword.$address.$age.$connum);
	
	$pimg = 'profileimages/'.$image_name;
	
		
//pass the data to database............
		$quary="INSERT INTO users(nic,name,profile_pic,job,password,email,user_type,address,age,contact_number,user_status) VALUES ('$nic','$name','$pimg','$job','$password','$email','user','$address',$age,'$connum','active')";




		$result = mysqli_query($connection,$quary);

		if($result != 1){
			die('Username already exists');
		}
		
		//redirect to home page......
		header("location:users.php");
	
}else{
	echo "not working";
}



 ?>
