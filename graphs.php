
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




 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {





      	 <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT * FROM post WHERE disaster_type='nd'";

              $result = $connection->query($sql);
              $v1=($result->num_rows);

          $sql = "SELECT * FROM post WHERE disaster_type='rsa'";

              $result = $connection->query($sql);
              $v2=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='fi'";

              $result = $connection->query($sql);
              $v3=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='ebl'";

              $result = $connection->query($sql);
              $v4=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='other'";

              $result = $connection->query($sql);
              $v5=($result->num_rows);


echo "

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Natural Disasters', {$v1}],
          ['Road Side Accidents',{$v2}],
          ['Fires', {$v3}],
          ['Electrical Breakdown & Leakages',{$v4}],
          ['Other',{$v5}]
        ]);

        ";

        ?>

        var options = {
          title: 'Total Disasters',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>






    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {





         <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";



           if (isset($_POST['date1'])) {

                if (isset($_POST['date2'])) {

                    $date1=$_POST['date1'];
                    $date2=$_POST['date2'];
                    $dis=$_POST['dis'];




                }
           }

           else {

              $date2=date("Y/m/d");
              $date1=date('Y-m-d', strtotime(date('Y-m')." -1 month"));
              $dis='gampaha';


           }

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT * FROM post WHERE disaster_type='nd' AND District='$dis' AND status='active' AND  date between '{$date1}' AND '{$date2}'";

              $result = $connection->query($sql);
              $v1=($result->num_rows);

          $sql = "SELECT * FROM post WHERE disaster_type='rsa' AND District='$dis' AND status='active' AND date between '{$date1}' AND '{$date2}'";

              $result = $connection->query($sql);
              $v2=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='fi' AND District='$dis' AND status='active' AND date between '{$date1}' AND '{$date2}'";

              $result = $connection->query($sql);
              $v3=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='ebl' AND District='$dis' AND status='active' AND date between '{$date1}' AND '{$date2}'";

              $result = $connection->query($sql);
              $v4=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='other' AND District='$dis' AND status='active' AND date between '{$date1}' AND '{$date2}'";

              $result = $connection->query($sql);
              $v5=($result->num_rows);


echo "

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Natural Disasters', {$v1}],
          ['Road Side Accidents',{$v2}],
          ['Fires', {$v3}],
          ['Electrical Breakdown & Leakages',{$v4}],
          ['Other',{$v5}]
        ]);

        ";

        ?>

        var options = {
          title: 'Filter Total Disasters',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart1'));
        chart.draw(data, options);
      }
    </script>




<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {





         <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

               if (isset($_POST['date1'])) {

                if (isset($_POST['date2'])) {

                    $date1=$_POST['date1'];
                    $date2=$_POST['date2'];
                    $dis=$_POST['dis'];




                }
           }

           else {

              $date2=date("Y/m/d");
              $date1=date('Y-m-d', strtotime(date('Y-m')." -1 month"));
              $dis='gampaha';


           }



          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "SELECT sum(death) as 'd' FROM post WHERE District='$dis' AND status='active' AND date between '{$date1}' AND '{$date2}' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          $v1=$row['d'];    

      }
  }

                $sql = "SELECT sum(accsident) as 'd' FROM post WHERE   District='$dis' AND status='active' AND date between '{$date1}' AND '{$date2}' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          $v2=$row['d'];    

      }
  }
                  $sql = "SELECT sum(mising) as 'd' FROM post WHERE   District='$dis' AND status='active' AND date between '{$date1}' AND '{$date2}' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          $v3=$row['d'];    

      }
  }


echo "

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Death', {$v1}],
          ['Accidents',{$v2}],
          ['Mising', {$v3}]
          
        ]);

        ";

        ?>

        var options = {
          title: 'Death , Accidents & Mising',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart.draw(data, options);
      }
    </script>







<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {





         <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

              if (isset($_POST['date1'])) {

                if (isset($_POST['date2'])) {

                    $date1=$_POST['date1'];
                    $date2=$_POST['date2'];
                    $dis=$_POST['dis'];




                }
           }

           else {

              $date2=date("Y/m/d");
              $date1=date('Y-m-d', strtotime(date('Y-m')." -1 month"));
              $dis='gampaha';


           }



          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

           $sql = "SELECT count(other_cat) as 's' FROM post WHERE District='$dis' AND status='active' AND other_cat='ls' AND date between '{$date1}' AND '{$date2}' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          $v1=$row['s'];    

      }
  }

            $sql = "SELECT count(other_cat) as 's' FROM post WHERE District='$dis' AND status='active' AND other_cat='fl' AND date between '{$date1}' AND '{$date2}' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          $v2=$row['s'];    

      }
  }

           $sql = "SELECT count(other_cat) as 's' FROM post WHERE District='$dis' AND status='active' AND other_cat='cy' AND date between '{$date1}' AND '{$date2}' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          $v3=$row['s'];    

      }
  }

           $sql = "SELECT count(other_cat) as 's' FROM post WHERE District='$dis' AND status='active' AND other_cat='dr' AND date between '{$date1}' AND '{$date2}' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){  

          $v4=$row['s'];    

      }
  }

 

echo "

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['LandSlide', {$v1}],
          ['Flood',{$v2}],
          ['Cyclone', {$v3}],
          ['Drought',{$v4}]
          
        ]);

        ";

        ?>

        var options = {
          title: 'LandSlide,Flood,Cyclone & Drought',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart3'));
        chart.draw(data, options);
      }
    </script>



 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {





         <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT * FROM post WHERE disaster_type='nd' AND District='gampaha' AND status='active'";

              $result = $connection->query($sql);
              $v1=($result->num_rows);

          $sql = "SELECT * FROM post WHERE disaster_type='rsa' AND District='gampaha' AND status='active'";

              $result = $connection->query($sql);
              $v2=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='fi' AND District='gampaha' AND status='active'";

              $result = $connection->query($sql);
              $v3=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='ebl' AND District='gampaha' AND status='active'";

              $result = $connection->query($sql);
              $v4=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='other' AND District='gampaha' AND status='active'";

              $result = $connection->query($sql);
              $v5=($result->num_rows);


echo "

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Natural Disasters', {$v1}],
          ['Road Side Accidents',{$v2}],
          ['Fires', {$v3}],
          ['Electrical Breakdown & Leakages',{$v4}],
          ['Other',{$v5}]
        ]);

        ";

        ?>

        var options = {
          title: 'Gampaha District Total Disasters',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart4'));
        chart.draw(data, options);
      }
    </script>




 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {





         <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

          $sql = "SELECT * FROM post WHERE disaster_type='nd' AND District='kaluthara' AND status='active'";

              $result = $connection->query($sql);
              $v1=($result->num_rows);

          $sql = "SELECT * FROM post WHERE disaster_type='rsa' AND District='kaluthara' AND status='active'";

              $result = $connection->query($sql);
              $v2=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='fi' AND District='kaluthara' AND status='active'";

              $result = $connection->query($sql);
              $v3=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='ebl' AND District='kaluthara' AND status='active'";

              $result = $connection->query($sql);
              $v4=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='other' AND District='kaluthara' AND status='active'";

              $result = $connection->query($sql);
              $v5=($result->num_rows);


echo "

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Natural Disasters', {$v1}],
          ['Road Side Accidents',{$v2}],
          ['Fires', {$v3}],
          ['Electrical Breakdown & Leakages',{$v4}],
          ['Other',{$v5}]
        ]);

        ";

        ?>

        var options = {
          title: 'Kaluthara District Total Disasters',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart5'));
        chart.draw(data, options);
      }
    </script>




 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {





         <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         


          $sql = "SELECT * FROM post WHERE disaster_type='nd' AND District='colombo' AND status='active'";

              $result = $connection->query($sql);
              $v1=($result->num_rows);

          $sql = "SELECT * FROM post WHERE disaster_type='rsa' AND District='colombo' AND status='active'";

              $result = $connection->query($sql);
              $v2=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='fi' AND District='colombo' AND status='active'";

              $result = $connection->query($sql);
              $v3=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='ebl' AND District='colombo' AND status='active'";

              $result = $connection->query($sql);
              $v4=($result->num_rows);
          $sql = "SELECT * FROM post WHERE disaster_type='other' AND District='colombo' AND status='active'";

              $result = $connection->query($sql);
              $v5=($result->num_rows);



echo "

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Natural Disasters', {$v1}],
          ['Road Side Accidents',{$v2}],
          ['Fires', {$v3}],
          ['Electrical Breakdown & Leakages',{$v4}],
          ['Other',{$v5}]
        ]);

        ";

        ?>

        var options = {
          title: 'Colombo District Total Disasters',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart6'));
        chart.draw(data, options);
      }
    </script>





  	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <div id="donutchart" style="width: 100%; height: 500px; margin-left: 100px;"></div>

    <div style="width: 100%;height: 400px;">
    <div id="donutchart1" style="width: 33.3%; height: 400px; float: left;"></div>
    <div id="donutchart2" style="width: 33.3%; height: 400px; float: left;"></div>
    <div id="donutchart3" style="width: 33.333%; height: 400px; float: left;"></div>
   </div>




    <div style="width:30%;height: 300px; margin-left: 400px;">

    	
    	<form action="graphs.php" method="POST">
    <div class="form-group">
      <label for="date">From:</label>
      <input type="date" class="form-control" id="email" placeholder="Enter email" name="date1">
    </div>
    <div class="form-group">
      <label for="date">To:</label>
      <input type="date" class="form-control" id="email" placeholder="Enter email" name="date2">
    </div>
    <div class="form-group">
      <label >District:</label>
  <select class="form-control" id="sel1" name="dis">
    <option value="gampaha">Gampaha</option>
    <option value="kaluthara">Kaluthara</option>
    <option value="colombo">Colombo</option>   
  </select>
    </div>
    
    <button type="submit" class="btn btn-default">Search</button>
  </form>

    </div>


     <div style="width: 100%;height: 400px;">
    <div id="donutchart4" style="width: 33.3%; height: 400px; float: left;"></div>
    <div id="donutchart5" style="width: 33.3%; height: 400px; float: left;"></div>
    <div id="donutchart6" style="width: 33.333%; height: 400px; float: left;"></div>
   </div>


		</div>
	</div>
<!-- //slicebox-slider -->
<!-- footer -->
				<?php include('include/footerhome.php');   ?>	