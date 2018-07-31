<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
<!-- slicebox-slider -->
	<div class="slicebox-slider">
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
			<div class="slicebox-slider-grid">
				<div class="col-md-8 slicebox-slider-left" style="width: 100%;">
				
					<div class="gallery">
						<h3>Gallery</h3>
						<div class="gallery-grids">

													  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
             

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT image FROM post WHERE status='active' ORDER BY DATE DESC  LIMIT 18";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              
              $img=$row['image'];
             



              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "<div class='col-md-4 gallery-grid' style='margin-bottom: 20px;width:370px;height:280px;'>
								<div class='gallery-grd'>
									<a href='$img' rel='title' class='b-link-stripe b-animate-go  thickbox'>
										<img src='$img' alt='' class='img-responsive' style='width:370px;height:280px;'/>
									</a>
								</div>
								
							</div>
							";  


              }

            }        
            ?>



							




							<div class="clearfix"> </div>
						</div>
					</div>
					
				</div>
	
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //slicebox-slider -->
<!-- footer -->
				<?php include('include/footerhome.php');   ?>	