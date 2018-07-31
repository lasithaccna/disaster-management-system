<?php include 'include/header.php'; ?>

<!--close-left-menu-stats-sidebar-->

<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="tip-bottom">Create New Post</a> </div>
  <h1>Create New Post</h1>
</div>
<div class="row-fluid">


 <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

              if (isset($_GET['action2'])) {
                # code...
              

              $action2=$_GET['action2'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT * FROM post WHERE postid='$action2'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      



echo "


    <div class='widget-box' style='height: 1210px;'>
      <div class='widget-title'> <span class='icon'> <i class='icon-align-justify'></i> </span>
        <h5>Edit Post</h5>
      </div>
      <div class='widget-content'>
        <div class='control-group'>
          <form action='updatepost.php' method='POST' enctype='multipart/form-data'>
            <!-- <div class='controls'> -->

            <table>


                    <tr>
                  <td><input type='hidden' name='postid' value='{$row['postid']}'></td>
                </tr>
                    <tr>
                  <td>Map Location</td><td><input type='text' name='lat1' id='lat' value='{$row['lat']}'></td><td><input type='text' name='lng1' id='lng' value='{$row['lng']}'></td>
                </tr>

                <tr>
                    <td>Disaster type</td>
                    <td><select name='disaster_type' > {$row['disaster_type']}
                      <option value='nd'>Natural Disasters</option>
                      <option value='rsa'>Road Side Accidents</option>
                      <option value='fi'>Fires</option>                      
                      <option value='ebl'>Electrical Breakdown & Leakages</option>
                      <option value='other'>Other</option>
                    </select></td>
                </tr>

                   <tr>
                    <td>If Disaster Type Natural Disasters</td>
                    <td><select name='other_cat' > {$row['other_cat']}
                      <option value='none'>None</option>
                      <option value='ls'>LandSliding</option>
                      <option value='fl'>Flood</option>
                      <option value='cy'>Cyclone</option>                      
                      <option value='dr'>Drought</option>
                      
                    </select></td>
                </tr>

                 <tr>
                    <td>Title</td>
                    <td><input type='text' name='title' placeholder='Post Title' value='{$row['title']}' required></td>
                </tr>
                 <tr>
                    <td>Main Image</td> 
                    <td><input type='File' name='img' value='{$row['image']}' required></td>
                        
                </tr>
                <tr>
                    <td>Post Content</td>
                    <td> <textarea class='textarea_editor span12' rows='6' name='content' placeholder='Enter text ...' >{$row['body']}</textarea>

                    <!-- <input type='text' name='content' placeholder='Post Content'> --></td>
                </tr>

                <tr>
                    <td>Location</td>
                    <td><input type='text' name='location' placeholder='Location' value='{$row['location']}' required></td>
                </tr>
                <tr>
                  <td>District</td>

                 <td>
                <select name='dis'>                  
                <option value='gampaha'>Gampaha</option>
                <option value='kaluthara'>Kaluthara</option>
                <option value='colombo'>Colombo</option>   
                </select>
                </td>
                 </tr>

                <tr>
                    <td>Upload Image </td> 
                    <td><input type='File' name='file1' value='{$row['image2']}'></td>
                        
                </tr>

             <tr>
                    <td>Deaths People</td>
                    <td><input type='number' name='death' placeholder='Death People Count' value='{$row['death']}'></td>
                </tr>

                <tr>
                    <td>Accidents People</td>
                    <td><input type='number' name='accsident' placeholder='Accidents People Count' value='{$row['accsident']}'></td>
                </tr>

                <tr>
                    <td>Misings People</td>
                    <td><input type='number' name='mising' placeholder='Mising People Count' value='{$row['mising']}'></td>
                </tr>
               
                <tr>
                    <td>Post Type</td> 
                    <td><select name='post_type'>{$row['post_type']}
                      <option value='Disaster'>Disaster</option>
                      <option value='alert'>Alert</option>   
                       <option value='event'>Event</option>                   
                    </select></td>
                </tr>
                <tr>
                  <div class='col-md-8 video-grids-left' style='height: 500px;'>
            <div class='video-grids-left1' style='height: 500px;'>
              <div id='map2' style='width: 100%;height: 500px;'></div>
    <script>
      function initMap() {
        var colombo = {lat: 6.9271, lng:  79.8612};
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 12,
          center: colombo
        });
        

          var loc={lat:{$row['lat']},lng:{$row['lng']}};

        var marker = new google.maps.Marker({
          position: loc,
          map: map,
          draggable:true
        });
          
       
        google.maps.event.addListener(marker, 'position_changed', function(){
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                document.getElementById('lat').value = lat;
                document.getElementById('lng').value = lng;
            });
      }
    </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAYAADu5VeXj9UHuI6qx7gdzjcFbYhcJ18&callback=initMap'>
    </script>
             

                
            </div>



          </div>
                </tr>
            
                <tr>                    
                    <td><input type='submit' value='Publish' name='Publish'></td>
                </tr>

            </table>              
            <!-- </div> -->
          </form>
        </div>
      </div>
    </div>
";
}
}

}

else
{

  echo "<div class='widget-box' style='height: 1210px;'>
      <div class='widget-title'> <span class='icon'> <i class='icon-align-justify'></i> </span>
        <h5>New Post</h5>
      </div>
      <div class='widget-content'>
        <div class='control-group'>
          <form action='publish.php' method='POST' enctype='multipart/form-data'>
            <!-- <div class='controls'> -->

            <table>
                    <tr>
                  <td>Map Location</td><td><input type='text' name='lat1' id='lat'></td><td><input type='text' name='lng1' id='lng'></td>
                </tr>

                <tr>
                    <td>Disaster type</td>
                    <td><select name='disaster_type'>
                      <option value='nd'>Natural Disasters</option>
                      <option value='rsa'>Road Side Accidents</option>
                      <option value='fi'>Fires</option>                      
                      <option value='ebl'>Electrical Breakdown & Leakages</option>
                      <option value='other'>Other</option>
                    </select></td>
                </tr>

                <tr>
                    <td>If Disaster Type Natural Disasters</td>
                    <td><select name='other_cat' >
                      <option value='none'>None</option>
                      <option value='ls'>LandSliding</option>
                      <option value='fl'>Flood</option>
                      <option value='cy'>Cyclone</option>                      
                      <option value='dr'>Drought</option>
                      
                    </select></td>
                </tr>

                 <tr>
                    <td>Title</td>
                    <td><input type='text' name='title' placeholder='Post Title' required></td>
                </tr>
                 <tr>
                    <td>Main Image</td> 
                    <td><input type='File' name='img' required></td>
                        
                </tr>
                <tr>
                    <td>Post Content</td>
                    <td> <textarea class='textarea_editor span12' rows='6' name='content' placeholder='Enter text ...'></textarea>

                    <!-- <input type='text' name='content' placeholder='Post Content'> --></td>
                </tr>

                <tr>
                    <td>Location</td>
                    <td><input type='text' name='location' placeholder='Location' required></td>
                </tr>

                <tr>
                  <td>District</td>
                <td>
                <select name='dis'>                  
                <option value='gampaha'>Gampaha</option>
                <option value='kaluthara'>Kaluthara</option>
                <option value='colombo'>Colombo</option>   
                </select>
                </td>
                 </tr>

                 <tr>
                    <td>Upload Image </td> 
                    <td><input type='File' name='file1'></td>
                        
                </tr>
               
                <tr>
                    <td>Post Type</td> 
                    <td><select name='post_type'>
                      <option value='Disaster'>Disaster</option>
                      <option value='alert'>Alert</option> 
                      <option value='event'>Event</option>                       
                    </select></td>
                </tr>

                <tr>
                    <td>Deaths People</td>
                    <td><input type='number' name='death' placeholder='Death People Count' value=''></td>
                </tr>

                <tr>
                    <td>Accidents People</td>
                    <td><input type='number' name='accsident' placeholder='Accidents People Count' value=''></td>
                </tr>

                <tr>
                    <td>Misings People</td>
                    <td><input type='number' name='mising' placeholder='Mising People Count' value=''></td>
                </tr>

                <tr>
                  <div class='col-md-8 video-grids-left' style='height: 500px;'>
            <div class='video-grids-left1' style='height: 500px;'>
              <div id='map2' style='width: 100%;height: 500px;'></div>
    <script>
      function initMap() {
        var colombo = {lat: 6.9271, lng:  79.8612};
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 12,
          center: colombo
        });
        var marker = new google.maps.Marker({
          position: colombo,
          map: map,
          draggable:true
        });
        google.maps.event.addListener(marker, 'position_changed', function(){
                var lat = marker.getPosition().lat();
                var lng = marker.getPosition().lng();

                document.getElementById('lat').value = lat;
                document.getElementById('lng').value = lng;
            });
      }
    </script>
    <script async defer
    src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAYAADu5VeXj9UHuI6qx7gdzjcFbYhcJ18&callback=initMap'>
    </script>
             

                
            </div>



          </div>
                </tr>
            
                <tr>                    
                    <td><input type='submit' value='Publish' name='Publish'></td>
                </tr>

            </table>              
            <!-- </div> -->
          </form>
        </div>
      </div>
    </div>";





}






?>




  </div>
 
</div></div>


<!--Footer-part-->

<?php include 'include/footer.php'; ?>