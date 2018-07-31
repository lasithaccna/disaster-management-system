<?php include('include/headerhome.php');   ?>

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
<!-- breaking-news -->
	<div class="breaking-news">
		<div class="container">
		<div class="move-text">
				<div class="breaking_news">
					<h2>Breaking News</h2>
				</div>
				<div class="marquee">


					 <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT postid,title FROM post WHERE post_type='alert'  AND status='active'  ORDER BY DATE DESC LIMIT 5 ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              



					echo"<div class='marquee1'><a class='breaking' href='postview.php?action=$pid'>{$row['title']}</a></div>";

				}
			}
			?>
					<!-- <div class="marquee2"><a class="breaking" href="single.html">The surprisingly successful president of the Philippines and peacemaking in the Philippines: Shaking it all up.</a></div> -->
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="js/jquery.marquee.js"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<div class="breaking-news-grids">
				<div class="col-md-8 video-grids-left" style="height: 395px;">
						<div class="video-grids-left1" style="height: 395px;">
							<div id="map2" style="width: 100%;height: 395px;"></div>
    <script>
      function initMap() {
        var colombo = {lat: 6.9271, lng:  79.8612};
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 12,
          center: colombo
        });




					 <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
               $action1=$_GET['action'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT lat,lng FROM post WHERE post_type='$action1' AND status='active' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

           
              echo " var loc={lat:{$row['lat']},lng:{$row['lng']}};

        var marker = new google.maps.Marker({
          position: loc,
          map: map
        });";



				}
			}
			?>






       
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYAADu5VeXj9UHuI6qx7gdzjcFbYhcJ18&callback=initMap">
    </script>
							<div class="video-grid-pos">
								<h3><span>WESTERN</span>  PROVINCIAL MAP</h3>
								<ul>
									
									<li><i>Updated By Admin</i> <label>|</label></li>
									<li><span>DMS</span></li>
								</ul>
							</div>

								
						</div>

					</div>
				<div class="col-md-4 breaking-news-grid-right">
					<h3>Category Breaking Stories</h3>
					<ul>



							  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $action1=$_GET['action'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT postid,location,image,title,name FROM post WHERE status='active' ORDER BY DATE DESC LIMIT 3  ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              $img=$row['image'];
            



              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "	<li>
							<div class='breaking-news-grid-right-grids'>
								<div class='breaking-news-grid-right-gridl'>
									<a href='postview.php?action=$pid'><img src='$img' alt='' class='img-responsive' style='width:100;height:80px;'/></a>
								</div>
								<div class='breaking-news-grid-right-gridr'>
									<h4><a href='postview.php?action=$pid'>{$row['title']}</a></h4>
									<ul>
										<li><a href=''><span class='glyphicon glyphicon-user' aria-hidden='true'></span>{$row['name']}</a></li>
										
									</ul>
								</div>
								<div class='clearfix'> </div>
							</div>
						</li>";  


              }

            }        
            ?>





					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
						<div class="col-md-8 news-grid-left" style="width: 100%;">
							<h3>Posts</h3>
							<ul>



								<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $action1=$_GET['action'];
              // $_SESSION['action']=$action;
              // $page=$_GET['page'];


          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);   


           $sql = "SELECT postid,location,image,date,time,title,name,body FROM post WHERE post_type='$action1' AND status='active'  ORDER BY DATE DESC LIMIT 10";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {    
                    

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              $img=$row['image'];
              $content=substr($row['body'],0,150);
              



					echo"	<li>
									<div class='news-grid-left1' style='height:200px;'>
										<img src='{$img}' alt='' class='img-responsive' style='height:200px;' />
									</div>
									<div class='news-grid-right1'>
										<h4><a href='postview.php?action=$pid'>{$row['title']}</a></h4>
										<h5>By <a href='postview.php?action=$pid'>{$row['name']}</a> <label>|</label> <i>{$row['date']} || {$row['time']}</i></h5>
										<p>{$content}</p>
									</div>
									<div class='clearfix'> </div>
								</li>";

				}

				
				
			}


								

//               $host="localhost";
//               $username="root";
//               $password="";
//               $db_name="lasi";
//              // $action2=$_SESSION['action'];
             

//           $connection= mysqli_connect('localhost','root','');
//           mysqli_select_db($connection,$db_name);         

//            $sql = "SELECT * FROM post WHERE post_type=$action1 AND status='active' ORDER BY DATE DESC";

//               $result = $connection->query($sql);

//               if ($result->num_rows > 0) {    
//               $a=($result->num_rows)/5;            

// 				$a=ceil($a);

// 				echo "<div class='pagination' style='display: inline-block;'>";

// 				for ($b=1; $b <=$a ; $b++) { 
					
 
//   					echo"<a href='posts.php?page=$b&action=$action1' style='color: black;float: left;padding: 8px 16px;text-decoration: none;'>{$b}</a>";
 

// 				}
// echo"</div>";

// }
			?>

							</ul>
						</div>

		</div>
	</div>
<!-- //breaking-news -->
<!-- footer -->
				<?php include('include/footerhome.php');   ?>	