<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>DMS Lanka</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

       

    </head>
    <body>
        <div id="loginbox">            
            <form id="loginform" class="form-vertical" method="POST" action="login.php">
				 <div class="control-group normal_text"> <h3><a href="index.php"><img src="img/logo.png" alt="Logo" /></a></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Your NIC" name="nic" required/>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Your Password" name="psw" required id="psw" />
                        </div>
                    </div>
                </div>

                <?php



               
                if(isset($_GET['id']))
                {
                        $id=$_GET['id'];
                

                echo "

                <div class='control-group'>
                    <div class='controls'>
                        <div class='main_input_box'>
                            <p style='color:red;'>UserName Or Password Doesn't Match</p>
                        </div>
                    </div>
                </div>
                ";

                }

                ?>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost password?</a></span>
                    <span class="pull-right"><input type="submit" name="submit" class="btn btn-success" value="Login" /></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
				<p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a password.</p>
				
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail address" />
                        </div>
                    </div>
               
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to login</a></span>
                    <span class="pull-right"><a class="btn btn-info"/>Reecover</a></span>
                </div>
            </form>
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
