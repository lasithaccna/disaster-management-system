
<?php include 'include/header.php'; ?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<
<!--End-Chart-box--> 
    <hr/>
    
        <div class="widget-box" >
          <div class="widget-title"><span class="icon"><i class="icon-user"></i></span>
            <h5>My Posts</h5>
          </div>
          <div class="widget-content nopadding fix_hgt">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                   <th>POSTS</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>

   <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_GET['id'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT nic,name,postid,title,image FROM post WHERE nic='{$id}'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

            

              $img=$row['image'];
             
            
            


                echo "<tr>
                   <td style='margin: 1px 5px 0;'> <a href='postview.php?action={$row['postid']}' style='font-size:14px;'><img style='width:80px; height:60px;' src=$img >  Post ID: {$row['postid']} || {$row['title']} || {$row['nic']} || {$row['name']}</a></td>
                  
                  <td><a href='create_post.php?action2={$row['postid']}'  data-original-title='Active'><i class='icon-edit'></i></a></td>
                </tr>";

              }
            }

                ?>
               </tbody>
            </table>
          </div>
          </div>

<div class="widget-box" style="width: 98%;margin-left: 10px; ">
          <div class="widget-title">
            <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#tab1">Natural Disasters</a></li>
              <li><a data-toggle="tab" href="#tab2">Road Side Accidents</a></li>
              <li><a data-toggle="tab" href="#tab3">Fires</a></li>
              <li><a data-toggle="tab" href="#tab4">Electrical Breakdown & Leakages</a></li>
              <li><a data-toggle="tab" href="#tab5">Other</a></li>
            </ul>
          </div>
          <div class="widget-content tab-content">
            <div id="tab1" class="tab-pane active">
            <div class="widget-content nopadding fix_hgt" style="height: 400px;">
            <ul class="recent-posts">




                <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_GET['id'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT postid,date,time,title,image FROM post WHERE nic='{$id}' AND disaster_type='nd' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $img=$row['image'];

              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "<div style='background: none repeat scroll 0 0 #FFFFFF;float: left;height: 50px;margin-right: 10px;margin-top: 5px;padding: 2px;width: 70px;text-align:center;margin-left:20px;'> <img style='width:70px; height:50px;' src=$img> </div>
                    <a href='postview.php?action={$row['postid']}'><p style='font-size:14px;'>{$row['title']}</p><div style='border-bottom: 1px dotted #AEBDC8;list-style: none outside none;padding: 10px;style='text-align:center;'> <span style='text-align:center;'>{$row['date']} || {$row['time']}</span> 
                    </div></a>";  


              }

            }        
            ?>




               </ul>
          </div>
              </div>

               <div id="tab2" class="tab-pane"> <div class="widget-content nopadding fix_hgt" style="height: 400px;">
            <ul class="recent-posts">




             
                <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_GET['id'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT postid,date,time,title,image FROM post WHERE nic='{$id}' AND disaster_type='rsa' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $img=$row['image'];

              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "<div style='background: none repeat scroll 0 0 #FFFFFF;float: left;height: 50px;margin-right: 10px;margin-top: 5px;padding: 2px;width: 70px;text-align:center;margin-left:20px;'> <img style='width:70px; height:50px;' src=$img> </div>
                    <a href='postview.php?action={$row['postid']}'><p style='font-size:14px;'>{$row['title']}</p><div style='border-bottom: 1px dotted #AEBDC8;list-style: none outside none;padding: 10px;style='text-align:center;'> <span style='text-align:center;'>{$row['date']} || {$row['time']}</span> 
                    </div></a>";  


              }

            }        
            ?>






               </ul>
          </div>
            </div>
            <div id="tab3" class="tab-pane"><div class="widget-content nopadding fix_hgt" style="height: 400px;">
            <ul class="recent-posts">



                <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_GET['id'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT postid,date,time,title,image FROM post WHERE nic='{$id}' AND disaster_type='fi' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $img=$row['image'];

              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "<div style='background: none repeat scroll 0 0 #FFFFFF;float: left;height: 50px;margin-right: 10px;margin-top: 5px;padding: 2px;width: 70px;text-align:center;margin-left:20px;'> <img style='width:70px; height:50px;' src=$img> </div>
                    <a href='postview.php?action={$row['postid']}'><p style='font-size:14px;'>{$row['title']}</p><div style='border-bottom: 1px dotted #AEBDC8;list-style: none outside none;padding: 10px;style='text-align:center;'> <span style='text-align:center;'>{$row['date']} || {$row['time']}</span> 
                    </div></a>";  


              }

            }        
            ?>






               </ul>
          </div>
              </div>

             <div id="tab4" class="tab-pane"><div class="widget-content nopadding fix_hgt" style="height: 400px;">
            <ul class="recent-posts">




                <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_GET['id'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT postid,date,time,title,image FROM post WHERE nic='{$id}' AND disaster_type='ebl' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $img=$row['image'];

              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "<div style='background: none repeat scroll 0 0 #FFFFFF;float: left;height: 50px;margin-right: 10px;margin-top: 5px;padding: 2px;width: 70px;text-align:center;margin-left:20px;'> <img style='width:70px; height:50px;' src=$img> </div>
                    <a href='postview.php?action={$row['postid']}'><p style='font-size:14px;'>{$row['title']}</p><div style='border-bottom: 1px dotted #AEBDC8;list-style: none outside none;padding: 10px;style='text-align:center;'> <span style='text-align:center;'>{$row['date']} || {$row['time']}</span> 
                    </div></a>";  


              }

            }        
            ?>




               </ul>
          </div>
              </div>

               <div id="tab5" class="tab-pane"> <div class="widget-content nopadding fix_hgt" style="height: 400px;">
            <ul class="recent-posts">




             
                <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_GET['id'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT postid,date,time,title,image FROM post WHERE nic='{$id}' AND disaster_type='other' ";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

              $img=$row['image'];

              
              // echo $row['name'].$row['date'].$row['time'].$row['title'];           
               
              echo "<div style='background: none repeat scroll 0 0 #FFFFFF;float: left;height: 50px;margin-right: 10px;margin-top: 5px;padding: 2px;width: 70px;text-align:center;margin-left:20px;'> <img style='width:70px; height:50px;' src=$img> </div>
                    <a href='postview.php?action={$row['postid']}'><p style='font-size:14px;'>{$row['title']}</p><div style='border-bottom: 1px dotted #AEBDC8;list-style: none outside none;padding: 10px;style='text-align:center;'> <span style='text-align:center;'>{$row['date']} || {$row['time']}</span> 
                    </div></a>";  


              }

            }        
            ?>






               </ul>
          </div>
            </div>
               
          </div>
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