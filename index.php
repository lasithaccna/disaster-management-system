
			<?php include('include/headerhome.php');   ?>

<body>





<!-- banner -->
	<div class="banner">
		<div class="banner-info">
			<div class="container">
		
			<?php include('include/navigation.php');   ?>
				<!--banner-Slider-->
					<script src="js/responsiveslides.min.js"></script>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav:true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
							  });

							});	
						</script>
					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">

						<!-- Text Slider Part -->


						  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT postid,location,post_type,date,time,title,name FROM post WHERE status='active'  ORDER BY DATE DESC LIMIT 5 ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];

              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "
							<li>
								<div class='banner-info-slider'>
									<ul>
										<li><a href='postview.php?action=$pid'>{$row['post_type']}</a></li>
										<li>{$row['date']}</li>
									</ul>
									<h3>{$row['title']}</h3>
									<p><span>By <i>{$row['name']}</i> @ <i>{$row['location']}.</i></span></p>
									<div class='more'>
										<a href='postview.php?action=$pid' class='type-1'>
											<span> Read More </span>
											<span> Read More </span>
										</a>
									</div>
								</div>
							</li>";  


              }

            }        
            ?>

<!-- End Of Text Slider Part 01 -->



						</ul>
					</div>
			</div>
		</div>
	</div>
<!-- banner -->









<!-- banner-bottom -->
	<div class="banner-bottom">
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

			<div class="banner-bottom-grids">

			<h1>Latest Disasters Posts</h1>
			<br>

							  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
            

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT postid,location,treath_type,image,date,time,title,name FROM post WHERE post_type='disaster' AND status='active'  ORDER BY postid DESC LIMIT 4 ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              $img=$row['image'];
                $content=substr($row['title'],0,30);

              // echo $img;
              // echo $row['name'].$row['date'].$row['time'].$row['title'];   
                   
               
              echo "
				<div class='col-md-3 banner-bottom-grid-left'>
					<div class='br-bm-gd-lt' style='background:url($img) no-repeat 0px 0px;background-size: cover;'>
						<div class='overlay'>
							<div class='arrow-left'></div>
							<div class='rectangle'></div>
						</div>
						<div class='health-pos'>
							<div class='health'>
								<ul>
									<li><a href='postview.php?action=$pid'>{$row['location']}</a></li>
									<li>{$row['date']}</li>
								</ul>
							</div>
							<h3 style='background: #1ABC9C;text-align:center;opacity:0.6;'><a href='postview.php?action=$pid' style='color:#fff;font-size:14px;'>{$content} ...</a></h3>
							
							<div class='dummy'>
								<p>{$row['treath_type']} || {$row['time']}</p>

							</div>
							<br>
								<br>
							
						</div>
					</div>
				</div>";  


              }

            }        
            ?>

            <div class="clearfix"> </div>
            </div>

            <div class="banner-bottom-grids">
            <h1>Latest Alert Posts</h1>
			<br>



							  <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT postid,location,treath_type,image,date,time,title,name FROM post WHERE post_type='alert' AND status='active' ORDER BY postid DESC LIMIT 4  ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              $img=$row['image'];
              $content=substr($row['title'],0,30);


              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "
				<div class='col-md-3 banner-bottom-grid-left'>
					<div class='br-bm-gd-lt' style='background:url($img) no-repeat 0px 0px;background-size: cover;'>
						<div class='overlay'>
							<div class='arrow-left'></div>
							<div class='rectangle'></div>
						</div>
						<div class='health-pos'>
							<div class='health'>
								<ul>
									<li><a href='postview.php?action=$pid'>{$row['location']}</a></li>
									<li>{$row['date']}</li>
								</ul>
							</div>
							<h3 style='background: #1ABC9C;text-align:center;opacity:0.6;'><a href='postview.php?action=$pid'  style='color:#fff;font-size:14px;'>{$content} ...</a></h3>
							
							<div class='dummy'>
								<p>{$row['treath_type']} || {$row['time']}</p>
								
							</div>
							<br>
								<br>
							
						</div>
					</div>
				</div>";  


              }

            }        
            ?>




            <div class="clearfix"> </div>
            </div>




			<!-- video-grids -->
				<div class="video-grids">
					<div class="col-md-8 video-grids-left" style="height: 825px;">
						<div class="video-grids-left1" style="height: 825px;">
							<div id="map2" style="width: 100%;height: 825px;"></div>
    <script>
      function initMap() {
        var colombo = {lat: 6.9271, lng:  79.8612};
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 11,
          center: colombo
        });




					 <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT lat,lng FROM post WHERE status='active' ";

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

					<div class="col-md-4 video-grids-right">
						<div class="sap_tabs">	
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<ul class="resp-tabs-list">
									<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span style="font-size: 15px;">Hot Treaths</span></li>
									<li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span style="font-size: 15px;">Hot Alerts</span></li>
									<div class="clear"></div>
								</ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">

										<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "SELECT postid,location,image,date,time,title FROM post WHERE post_type='disaster' AND treath_type='High' AND status='active' ORDER BY DATE DESC LIMIT 5  ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              $img=$row['image'];
              $content=substr($row['title'],0,50);
              



					echo"<div class='facts'>
											<div class='tab_list'>
												<img src='{$img}' alt='' class='img-responsive' />
											</div>
											<div class='tab_list1'>
												<ul>
													<li><a href='postview.php?action=$pid'>{$row['location']}</a> <label>|</label></li>
													<li>{$row['date']} || {$row['time']}</li>
												</ul>
												<p><a href='postview.php?action=$pid'>{$content}</a></p>
											</div>
											<div class='clearfix'> </div>
										</div>";

				}
			}
			?>




									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "SELECT postid,location,image,date,time,title FROM post WHERE post_type='alert' AND treath_type='High' AND status='active'  ORDER BY DATE DESC LIMIT 5 ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              $img=$row['image'];
              $content=substr($row['title'],0,50);
              



					echo"<div class='facts'>
											<div class='tab_list'>
												<img src='{$img}' alt='' class='img-responsive' />
											</div>
											<div class='tab_list1'>
												<ul>
													<li><a href='postview.php?action=$pid'>{$row['location']}</a> <label>|</label></li>
													<li>{$row['date']} || {$row['time']}</li>
												</ul>
												<p><a href='postview.php?action=$pid'>{$content}</a></p>
											</div>
											<div class='clearfix'> </div>
										</div>";

				}
			}
			?>

									</div>
								</div>
								<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
								<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
								</script>
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //video-grids -->
			<!-- video-bottom-grids -->
				<div class="video-bottom-grids">
					<div class="video-bottom-grids1">
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before">
									<img src="images/13.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>LandSlide News</p>
									</div>
								</div>
								<ul class="list1">




									<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              
              // $_SESSION['action']=$action;
              // $page=$_GET['page'];


          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);   


           $sql = "SELECT postid,title FROM post WHERE  status='active' AND other_cat='ls' ORDER BY DATE DESC LIMIT 4  ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {    
                    

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
            
              $content=substr($row['title'],0,40);


              echo "
              


									<li><a href='postview.php?action=$pid'>{$content}</a></li>
									
									";


								}
							}
									?>

								</ul>
								<div class="read-more">
									<a href="Posts.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before1">
									<img src="images/14.jpeg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Flood News</p>
									</div>
								</div>
								<ul class="list">
									

									<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
             
              // $_SESSION['action']=$action;
              // $page=$_GET['page'];


          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);   


           $sql = "SELECT postid,title FROM post WHERE  status='active' AND other_cat='fl' ORDER BY DATE DESC LIMIT 4  ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {    
                    

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
            
              $content=substr($row['title'],0,40);


              echo "
              


									<li><a href='postview.php?action=$pid'>{$content}</a></li>
									
									";


								}
							}
									?>
								</ul>
								<div class="read-more res">
									<a href="Posts.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before2">
									<img src="images/15.jpg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Cyclone News</p>
									</div>
								</div>
								<ul class="list1">
									

									<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
             
              // $_SESSION['action']=$action;
              // $page=$_GET['page'];


          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);   


           $sql = "SELECT postid,title FROM post WHERE  status='active' AND other_cat='cy' ORDER BY DATE DESC LIMIT 4  ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {    
                    

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
            
              $content=substr($row['title'],0,40);


              echo "
              


									<li><a href='postview.php?action=$pid'>{$content}</a></li>
									
									";


								}
							}
									?>
								</ul>
								<div class="read-more res1">
									<a href="Posts.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="col-md-3 video-bottom-grid">
							<div class="video-bottom-grid1">
								<div class="video-bottom-grid1-before before3">
									<img src="images/16.jpeg" alt=" " class="img-responsive" />
									<div class="video-bottom-grid1-pos">
										<p>Drought News</p>
									</div>
								</div>
								<ul class="list2">
									

									<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
             
              // $_SESSION['action']=$action;
              // $page=$_GET['page'];


          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);   


           $sql = "SELECT postid,title FROM post WHERE  status='active' AND other_cat='dr' ORDER BY DATE DESC LIMIT 4  ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {    
                    

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
            
              $content=substr($row['title'],0,40);


              echo "
              


									<li><a href='postview.php?action=$pid'>{$content}</a></li>
									
									";


								}
							}
									?>
								</ul>
								<div class="read-more res2">
									<a href="Posts.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					
				</div>
			<!-- //video-bottom-grids -->
			<!-- news-and-events -->
				<div class="news">
					<div class="news-grids">
						<div class="col-md-8 news-grid-left">
							<h3>Latest News & Events</h3>
							<ul>



								<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "SELECT postid,location,image,date,time,title,name,body FROM post WHERE post_type='event' AND status='active'  ORDER BY DATE DESC LIMIT 5 ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              $img=$row['image'];
              $content=substr($row['body'],0,150);
              



					echo"	<li>
									<div class='news-grid-left1'>
										<img src='{$img}' alt='' class='img-responsive' />
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
			?>

							</ul>
						</div>
						<div class="col-md-4 news-grid-right">
							<div class="news-grid-rght1">
							<!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a class="high" href="#home" aria-controls="home" role="tab" data-toggle="tab">Overall Of This Month</a></li>
							  </ul>

							  <!-- Tab panes -->
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active london" id="home">
										<ul>
											<li>
												<h4>Death</h4>
												<span style=" background: url(images/100.png) no-repeat ;background-size: cover;"></span>
												<p><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

               $date2=date("Y/m/d");
              $date1=date('Y-m-d', strtotime(date('Y-m')." -1 month"));

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "SELECT sum(death) as 'd' FROM post WHERE  status='active' AND date between '{$date1}' AND '{$date2}'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          echo "{$row['d']}";    

      }
  }
  ?></p>
											</li>
											<li>
												<h4>Accidents</h4>
												<span style=" background: url(images/101.png) no-repeat ;background-size: cover;"></span>
												<p><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

               $date2=date("Y/m/d");
              $date1=date('Y-m-d', strtotime(date('Y-m')." -1 month"));

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "SELECT sum(accsident) as 'a' FROM post WHERE  status='active'  AND date between '{$date1}' AND '{$date2}'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          echo "{$row['a']}";    

      }
  }
  ?></p>
											</li>
											<li>
												<h4>Missing</h4>
												<span style=" background: url(images/102.png) no-repeat ;background-size: cover;"></span>
												<p><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

               $date2=date("Y/m/d");
              $date1=date('Y-m-d', strtotime(date('Y-m')." -1 month"));

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "SELECT sum(mising) as 'm' FROM post WHERE  status='active'  AND date between '{$date1}' AND '{$date2}'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          echo "{$row['m']}";    

      }
  }
  ?></p>
											</li>
											<div class="clearfix"> </div>
										</ul>
									</div>
									
								</div>
							</div>
							<div class="news-grid-rght2">
								<h3>subscribe to our newsletter</h3>
								<p>Get The Latest News And Updates By Signing Up To Our Daily Newsletter!</p>
								<form>
									<input type="text" value="enter your Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your Email address';}">
									<input type="submit" value="Submit">
								</form>
							</div>
							<div class="news-grid-rght3">
								






								<?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "select postid,count(*) as 'numofcomment' from post_comment group by postid order by count(*) desc limit 1 ";

              $result = $connection->query($sql);
                         

          while($row=$result->fetch_assoc()){      

              $pid=$row['postid'];
              
              
             $sql = "select title,image from post where postid='$pid' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){ 

          $content=substr($row['title'],0,40); 
           $img=$row['image'];



					echo"<img src={$img} alt=' ' class='img-responsive' />
								<div class='story'>
									<p>Top News Of The Week</p>
									<h3><a href='postview.php?action=$pid'>{$content} ....</a></h3>	";

				}
			}
		}
			?>











									


								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //news-and-events -->
		</div>
	</div>
<!-- //banner-bottom -->
<!-- footer -->

			<?php include('include/footerhome.php');   ?>	