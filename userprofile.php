<?php include 'include/header.php';  ?>

<!--main-container-part-->
<div id="content" >
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->


<div class="widget-box" style="height: 605px;">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5><?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_GET['id'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT nic,name FROM users WHERE nic='{$id}'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

            

                echo "{$row['name']}'s";

              }
            }

                ?> Profile</h5>
</h5>
        </div>



        <div class='widget-content nopadding'>
          <form action='' method='' class='form-horizontal'>
          <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";
              $id=$_GET['id'];

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT nic,name,profile_pic,job,email,user_type,address,age,contact_number,user_status FROM users WHERE nic='{$id}'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

            $img=$row['profile_pic'];

                echo "

              <div class='control-group'>
              <label class='control-label'>PROFILE PICTURE :</label>
              <div class='controls'>
                <img style='width:80px; height:80px; border-radius: 40px; margin-left:100px;' src=$img>
              </div>
            </div>
            
            <div class='control-group'>
              <label class='control-label'>NIC :</label>
              <div class='controls'>
                <label class='control-label'> {$row['nic']} </label>
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>NAME :</label>
              <div class='controls'>
                <label class='control-label'>{$row['name']}</label>
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>JOB</label>
              <div class='controls'>
                <label class='control-label'>{$row['job']}</label>
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>EMAIL</label>
              <div class='controls'>
                <label class='control-label'>{$row['email']}</label>
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>USER TYPE</label>
              <div class='controls'>
                <label class='control-label'>{$row['user_type']}</label>
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>ADDRESS</label>
              <div class='controls'>
                <label class='control-label'>{$row['address']}</label>
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>AGE</label>
              <div class='controls'>
                <label class='control-label'>{$row['age']}</label>
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>CONTACT NUMBER</label>
              <div class='controls'>
                <label class='control-label'>{$row['contact_number']}</label>
              </div>
            </div>
            <div class='control-group'>
              <label class='control-label'>USER STATUS</label>
              <div class='controls'>
                <label class='control-label'>{$row['user_status']}</label>
              </div>
            </div>";
            
               }
            }

                ?>         
          </form>
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