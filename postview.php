
			<?php include('include/headerhome.php');?>

<body>
<!-- banner -->
	<div class="banner1">
		<div class="banner-info1">
			<div class="container">
				<?php include('include/navigation.php');   ?>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- single -->
	<div class="single">
		<div class="container">
			<div class="single-grid">
				<div class="col-md-8 blog-left">
					<div class="blog-left-grid">
						<div class="blog-leftl">


							  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

              $postid=$_GET['action'];
            // $postid=2;

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT name,title,body,image,location,treath_type,date,time,title,lat,lng,image2 FROM post WHERE postid='$postid'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

             
       		$img=$row['image'];
       		$img2=$row['image2'];

              // echo $img;
              // echo $row['name'].$row['date'].$row['time'].$row['title'];   
                   
               
              echo "<h4 >{$row['date']} <span>{$row['time']}</span></h4>
							<a href='' style='font-size:15px;'><i class='glyphicon glyphicon-tags' aria-hidden='true'></i>{$row['treath_type']}</a>


						</div>
						<div class='blog-leftr'>
							<h2>{$row['title']}</h2>
							<br>
							<img src='$img' alt='' class='img-responsive' />
							<p>{$row['body']}</p>
						
							<img src='$img2' alt='' class='img-responsive' />
					
							<ul>
								<li><a href=''><i class='glyphicon glyphicon-user' aria-hidden='true'></i>{$row['name']}</a></li>
								<li><a href=''><i class='glyphicon glyphicon-tags' aria-hidden='true'></i>{$row['location']}</a></li>

								 
								
				";  


              }

            }        
            ?>

            		<li><a href=''><i class='glyphicon glyphicon-comment' aria-hidden='true'></i>				  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

              $postid=$_GET['action'];
             // $pid=2;

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post_comment  WHERE postid='$postid'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

         
               
              echo $result->num_rows;  


              }

                    
            ?> Comments</a></li>
							</ul>
						




							  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

              $postid=$_GET['action'];
            // $postid=2;

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT lat,lng FROM post WHERE postid='$postid'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

             
 

              // echo $img;
              // echo $row['name'].$row['date'].$row['time'].$row['title'];   
                   
               
              echo "
							<div id='map2' style='height: 250px;''></div>
    <script>
      function initMap() {
        var colombo = {lat: {$row['lat']}, lng: {$row['lng']}};
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 12,
          center: colombo
        });
        var marker = new google.maps.Marker({
          position: colombo,
          map: map
        });
      }
    </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAYAADu5VeXj9UHuI6qx7gdzjcFbYhcJ18&callback=initMap'>
    </script>

        
				";  


              }

            }        
            ?>



            		</div>
						<div class='clearfix'> </div>
						<div class='admin-text'>



			  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

              $postid=$_GET['action'];
            // $postid=2;

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT users.nic,users.name,job,contact_number,profile_pic FROM post inner join users WHERE postid='$postid' AND post.nic=users.nic";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

             
       		$img=$row['profile_pic'];

              // echo $img;
              // echo $row['name'].$row['date'].$row['time'].$row['title'];   
                   
               
              echo "	<h5>Written By {$row['name']}</h5>
								<div class='admin-text-left' style='width:10%;height:80px;''>
									<a href=''><img src='$img' alt=''/ style='width:100%;heigh:80px;'></a>
								</div>
								<div class='admin-text-right'>
									<p>{$row['job']} || {$row['contact_number']}</p>
									
								</div>
								<div class='clearfix'> </div>
								
				";  


              }

            }        
            ?>

							
						</div>

					
						<div class="response">
							<h4>Comments</h4>


			  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

              $postid=$_GET['action'];
            // $postid=2;

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT name,comment,date,time FROM post_comment WHERE postid='$postid' ORDER BY DATE DESC LIMIT 5 ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

             
       	

              // echo $img;
              // echo $row['name'].$row['date'].$row['time'].$row['title'];   
                   
               
              echo "
							<div class='media response-info'>
								<div class='media-left response-text-left'>
									<a href=''>
										<img class='media-object' src='images/icon1.png' alt=''/>
									</a>
									<h5><a href=''>{$row['name']}</a></h5>
								</div>
								<div class='media-body response-text-right'>
									<p>{$row['comment']}</p>
									<ul>
										<li>{$row['date']} || {$row['time']}</li>
										<li><a href='#1'>Reply</a></li>
									</ul>
								
								</div>
								<div class='clearfix'> </div>
							</div>
								
				";  


              }

            }        
            ?>

						
						</div>	
						<div class="coment-form" id="1">
							<h4>Leave your comment</h4>

						


							  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $pid=$_GET['action'];

              if (isset($_SESSION['nic'])) {
              	# code...
              



              $nic=$_SESSION['nic'];
              
             
            

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM users WHERE nic='$nic'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {         

              $row=$result->fetch_assoc();       

								echo "<form method='POST' action='comment.php'>
								
								<input type='hidden' name='uname' value='{$row['name']}'>
								<input type='hidden' name='pid' value='$pid'>
								<textarea type='text' name='com' placeholder='Your Comment'></textarea>
								<input type='submit' value='Submit Comment' >

							</form>	";						

						}
						}

						else {

							echo "<form method='POST' action='comment.php'>
								
								<input type='text' name='uname' placeholder='Your Name'>
								<input type='hidden' name='pid' value='$pid'>
								<textarea type='text' name='com' placeholder='Your Comment'></textarea>
								<input type='submit' value='Submit Comment' >
							</form>";

						}

						?>



						</div>
					</div>
				</div>
				<div class="col-md-4 blog-right">
					<h3>Post Categories</h3>
					<ul>
						<li><a href="#">Natural Disasters</a></li>
						<li><a href="#">Road Side Accidents</a></li>
						<li><a href="#">Fires</a></li>
						<li><a href="#">Electrical Breakdown & Leakages</a></li>
						<li><a href="#">Other</a></li>
						
					</ul>
					<div class="recent">
						<h3>Recent Posts</h3>
						<div class="recent-grids">



							 <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT postid,body,title,image FROM post WHERE status='active' ORDER BY DATE DESC LIMIT 3 ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
               $img=$row['image'];
               $content=substr($row['body'],0,75);

              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "<div class='recent-grid'>
								<div class='wom'>
									<a href='postview.php?action=$pid'><img src='$img' alt='' class='img-responsive' /></a>
								</div>
								<div class='wom-right'>
									<h4><a href='postview.php?action=$pid'>{$row['title']}</a></h4>
									<p>{$content}</p>
								</div>
								<div class='clearfix'> </div>
							</div>";  


              }

            }        
            ?>




							


						</div>
					</div>
				
					
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //single -->
<!-- footer -->
			<?php include('include/footerhome.php');   ?>	