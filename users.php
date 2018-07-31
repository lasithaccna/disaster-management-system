<?php include 'include/header.php'; ?>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box" style="height: 450px;">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>User Registration</h5>
          </div>
          <div class="widget-content nopadding fix_hgt">

            <form class="form-horizontal" action="signup.php" method="POST" name="basic_validate" id="basic_validate" onsubmit="return checkLength()" enctype="multipart/form-data">
            
              <div class="control-group">
                <label class="control-label">Your NIC</label>
                <div class="controls">
                  <input type="text" name="nic" placeholder="Your NIC Number" required id="nic">
                </div>
              </div>              
              <div class="control-group">
                <label class="control-label">Your Name</label>
                <div class="controls">
                  <input type="text" name="uname" placeholder="Your Name" required>
                </div>
              </div>
                <div class="control-group">
                <label class="control-label">Your Profile Picture</label>
                <div class="controls">
                  <input type="File" name="pimg" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Your Job</label>
                <div class="controls">
                  <input type="text" name="job" placeholder="Your Job Rall" id="job" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Your Password</label>
                <div class="controls">
                  <input type="password" name="psw" placeholder="Your Password" id="psww" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Conform Password</label>
                <div class="controls">
                  <input type="password" name="cpsw" placeholder="Confirm Password" id="cpsww" required>
                </div>
                </div>
                <div class="control-group">
                <label class="control-label">Your Email</label>
                <div class="controls">
                  <input type="email" name="email" placeholder="Your Address" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Your Address</label>
                <div class="controls">
                  <input type="text" name="address" placeholder="Your Address" required>
                </div>
              </div>             
              <div class="control-group">
                <label class="control-label">Your Age</label>
                <div class="controls">
                  <input type="text" name="age" placeholder="Your Age" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Your Contact Number</label>
                <div class="controls">
                  <input type="text" name="cn" placeholder="Your Contact Number" required id="cn">
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Register" name="Register" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>




<div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
            <h5>Active Users</h5>
          </div>
          <div class="widget-content nopadding fix_hgt">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                   <th>NIC & NAME</th>
                  <th>JOB RALL</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>

   <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT nic,name,job,profile_pic FROM users WHERE user_status='active'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

            

              $img=$row['profile_pic'];
             
              $usernic1=$row['nic'];
            


                echo "<tr>
                   <td style='margin: 1px 5px 0;''> <a href='userprofile.php?id={$row['nic']}' style='font-size:14px;'><img style='width:40px; height:40px;border-radius:15px;' src=$img > || {$row['nic']} || {$row['name']}</a></td>
                  <td ><span style='font-size:14px;'>{$row['job']}</span></td>
                  <td><a href='useraction.php?action={$row['nic']}'  data-original-title='Delete'><i class='icon-remove'></i></a></td>
                </tr>";

              }
            }

                ?>
               </tbody>
            </table>
          </div>
        </div>


        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
            <h5>Inactive Users</h5>
          </div>
          <div class="widget-content nopadding fix_hgt">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>NIC & NAME</th>
                  <th>JOB RALL</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>

   <?php 

              $host="localhost";
              $username="root";
              $password="";
              $db_name="lasi";

          $connection= mysqli_connect('localhost','root','');
          mysqli_select_db($connection,$db_name);         

            $sql = "SELECT nic,name,job,profile_pic FROM users WHERE user_status='inactive'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

     

              $img=$row['profile_pic'];

              $usernic2=$row['nic'];
              
             
              



                echo "<tr>
                  <td style='margin: 1px 5px 0;'> <a href='userprofile.php?id={$row['nic']}' style='font-size:14px;'><img style='width:40px; height:40px;' src=$img>  {$row['nic']} || {$row['name']}</a></td>
                  <td><span style='font-size:14px;'>{$row['job']}</span></td>
                  <td><a href='useractionrestore.php?action={$row['nic']}'  data-original-title='Restore'><i class='icon-refresh'></i></a></td>
                </tr>";

              }
            }

                ?>
               </tbody>
            </table>
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

 <script type="text/javascript">
            function checkLength(){

                
                var z=document.getElementById('nic').value;
                var x=document.getElementById('psww').value;
                var y=document.getElementById('cpsww').value;
                var w=document.getElementById('cn').value;
                var r=document.getElementById('job').value;

                if (z.length!=10) {

                    alert("NIC Must Need  10 Characters");
                    nic.focus();
                    return false;
                }

                else if (x.length<8) {

                    alert("Password Must Need At Least 8 Characters");
                    psww.focus();
                    return false;
                }
                

                else if (x!=y) {

                  alert("Password Doesn't Match WIth Conform Password");
                  cpsww.focus();
                  return false;
                }

                else if (w.length!=10) {

                    alert("Contact Number Must Need At Least 10 Characters");
                    cn.focus();
                    return false;
                }

            }


        </script>

<!--Footer-part-->

<?php include 'include/footer.php'; ?>

