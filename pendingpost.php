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
    




<div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-time"></i></span>
            <h5>Pending Post</h5>
          </div>
          <div class="widget-content nopadding fix_hgt">
            <table class="table table-striped table-bordered">
              <thead>
                <tr>
                   <th>POSTS</th>
                  <th>TREATH TYPE</th>
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

            $sql = "SELECT nic,name,postid,title,image FROM post WHERE status='new'";

              $result = $connection->query($sql);

              if ($result->num_rows > 0) {                

          while($row=$result->fetch_assoc()){      

            

              $img=$row['image'];
             
            
            


                echo "<tr>
                   <td style='margin: 1px 5px 0;'> <a href='postview.php?action={$row['postid']}' style='font-size:12px;'><img style='width:80px; height:60px;' src=$img >  Post ID: {$row['postid']} || {$row['title']} || {$row['nic']} || {$row['name']}</a></td>
                  <td><span><form method='POST' action='postaction.php' ><select name='treath_type'><option value='High'>High</option><option value='Middle'>Middle</option><option value='Low'>Low</option></select><input type='hidden' name='postid' value='{$row['postid']}'><button><i class='icon-check'></i></button></form></span></td>
                  <td ><a href='postactiondelete.php?action={$row['postid']}'  data-original-title='Active'><i class='icon-remove'></i></a></td>
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



<!--Footer-part-->

<?php include 'include/footer.php'; ?>

