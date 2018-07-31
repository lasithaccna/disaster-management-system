<?php 
session_start();

$nic=$_SESSION['nic']; 

$connection = mysqli_connect('localhost', 'root','','lasi');
if(!$connection) echo "error";
 
$sql = "SELECT name FROM users where nic='$nic'; ";



$result = $connection->query($sql);
if ($result->num_rows > 0) {
// output data of each row
$result = $result->fetch_assoc();
session_start();
$_SESSION['name'] = $result['name'];
$name=$_SESSION['name'];

// echo $nic;
}

?>


<?php


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
	
	$title=$_POST['title'];
	$image_name=$_FILES["img"]["name"];
	$image_temp=$_FILES["img"]["tmp_name"];
	$image_location=move_uploaded_file($image_temp,"post_image/$image_name");
	$content=$_POST['content'];
	$location=$_POST['location'];	
	$fname=$_FILES["file1"]["name"];
	$ftemp=$_FILES["file1"]["tmp_name"];
	$flag=move_uploaded_file($ftemp,"post_image/$fname");
	$date=date("Y/m/d");
	$time = date("h:i:s");
	$disaster_type=$_POST['disaster_type'];
	$post_type=$_POST['post_type'];
	$lng=$_POST['lng1'];
	$lat=$_POST['lat1'];
	$dis=$_POST['dis'];
	$other_cat=$_POST['other_cat'];
	$death=$_POST['death'];
	$accsident=$_POST['accsident'];
	$mising=$_POST['mising'];




	/*echo $modulename;
	echo $date;
	echo $fname;
	echo $ftemp;
	echo $ftype;

	if ($flag==1) {
		echo "successfull";
	}
}*/

//pass the data to database............
$moveImageTo = 'post_image/'.$image_name;
$moveTo = 'post_image/'.$fname;

		$quary="INSERT INTO post(nic,name,title,disaster_type,other_cat,image,body,date,time,location,District,lat,lng,image2,status,post_type,death,accsident,mising) 
		VALUES ('$nic','$name','$title','$disaster_type','$other_cat','$moveImageTo','$content','$date','$time','$location','$dis','$lat','$lng','$moveTo','new','$post_type','$death','$accsident','$mising')";
		
		mysqli_query($connection,$quary);
		header("location:create_post.php");
		//redirect to home page......
		
	}

?>