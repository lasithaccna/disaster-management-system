<?php include 'include/header.php';  ?>

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  
<!--End-Action boxes-->    

<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box"  style="height: 577px;">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Site Analytics</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <!-- <div class="span9">
              <div class="chart"></div>
            </div> -->
            <div class="span3"  style="width: 100%;">
              <ul class="site-stats">
               
            <li class="bg_lh"><i class="icon-tag"></i> <strong><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_SESSION['nic'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE nic='$id' AND status='active'";

              $result = $connection->query($sql);

          //     if ($result->num_rows > 0) {                

          // while($row=$result->fetch_assoc()){                 
                
          //     echo $row['name']."(".$row['user_type'].")";
          //     }

          //   }   

            echo $result->num_rows;     
            ?></strong> <small>Total My Active Post</small></li>
                <li class="bg_lh"><i class="icon-repeat"></i> <strong><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE nic='$id' AND status='new'";

              $result = $connection->query($sql);

          //     if ($result->num_rows > 0) {                

          // while($row=$result->fetch_assoc()){                 
                
          //     echo $row['name']."(".$row['user_type'].")";
          //     }

          //   }   

            echo $result->num_rows;     
            ?></strong> <small>Total My Pending Posts</small></li>
                                
                <li class="bg_lh"><i class="icon-remove"></i> <strong><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE nic='$id' AND status='inactive'";

              $result = $connection->query($sql);

          //     if ($result->num_rows > 0) {                

          // while($row=$result->fetch_assoc()){                 
                
          //     echo $row['name']."(".$row['user_type'].")";
          //     }

          //   }   

            echo $result->num_rows;     
            ?></strong> <small>Total My Rejected Posts</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE nic='$id' AND disaster_type='nd'";

              $result = $connection->query($sql);

          //     if ($result->num_rows > 0) {                

          // while($row=$result->fetch_assoc()){                 
                
          //     echo $row['name']."(".$row['user_type'].")";
          //     }

          //   }   

            echo $result->num_rows;     
            ?></strong> <small>Total Natural Disasters Posts</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE nic='$id' AND disaster_type='rsa'";

              $result = $connection->query($sql);

          //     if ($result->num_rows > 0) {                

          // while($row=$result->fetch_assoc()){                 
                
          //     echo $row['name']."(".$row['user_type'].")";
          //     }

          //   }   

            echo $result->num_rows;     
            ?></strong> <small>Total Road Side Accidents Posts</small></li>
                <li class="bg_lh"><i class="icon-fire"></i> <strong><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE nic='$id' AND disaster_type='fi'";

              $result = $connection->query($sql);

          //     if ($result->num_rows > 0) {                

          // while($row=$result->fetch_assoc()){                 
                
          //     echo $row['name']."(".$row['user_type'].")";
          //     }

          //   }   

            echo $result->num_rows;     
            ?></strong> <small>Total My Fires Posts</small></li>
                <li class="bg_lh"><i class="icon-globe"></i> <strong><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE nic='$id' AND disaster_type='ebl'";

              $result = $connection->query($sql);

          //     if ($result->num_rows > 0) {                

          // while($row=$result->fetch_assoc()){                 
                
          //     echo $row['name']."(".$row['user_type'].")";
          //     }

          //   }   

            echo $result->num_rows;     
            ?></strong> <small>Total My Electrical Breakdown & Leakages Posts</small></li>
            <li class="bg_lh"><i class="icon-globe"></i> <strong><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE nic='$id' AND disaster_type='other'";

              $result = $connection->query($sql);

          //     if ($result->num_rows > 0) {                

          // while($row=$result->fetch_assoc()){                 
                
          //     echo $row['name']."(".$row['user_type'].")";
          //     }

          //   }   

            echo $result->num_rows;     
            ?></strong> <small>Total My Other Posts</small></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
    
    </div>
  </div>
</div>

<!--end-main-container-part-->
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>



<!--Footer-part-->

<?php include 'include/footer.php'; ?>