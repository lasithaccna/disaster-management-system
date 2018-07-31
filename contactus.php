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
<!-- contact -->
	<div class="contact">
		<div class="container">
			<!-- <div class="map"> -->
				<!-- <h3>View on map</h3> -->
				
   <div id="map2" style="width: 100%;height: 400px;"></div>
    <script>
      function initMap() {
        var colombo = {lat: 6.9271, lng:  79.8612};
        var map = new google.maps.Map(document.getElementById('map2'), {
          zoom: 12,
          center: colombo
        });
        var marker = new google.maps.Marker({
          position: colombo,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYAADu5VeXj9UHuI6qx7gdzjcFbYhcJ18&callback=initMap">
    </script>
				<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3144.899142009709!2d23.72354!3d37.979482999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1AIzaSyDuiS65ImL4vKE71va4y1iX9XRrXYwS_ts!2sFashion+Workshop+by+Vicky+Kaya!5e0!3m2!1sen!2sin!4v1440569426817" frameborder="0" style="border:0" allowfullscreen></iframe> -->
			<!-- </div> -->
			<div class="contact-grids">
				<div class="col-md-3 contact-grid">
					<div class="call">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li>+9411 2 159 753 </li>
								<li>+9411 2 357 951</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li>163/B,</li>
								<li>Duplication Road,</li>
								<li>Colombo 7.</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="mail">
						<div class="col-xs-3 contact-grdl">
							<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 contact-grdr">
							<ul>
								<li><a href="mailto:info@example.com">dmssrilanka@gmail.com</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-5 contact-grid">
					<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Send" >
					</form>
				</div>
				<div class="col-md-4 contact-grid">
					<div class="newsletter1">
						<h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Newsletter</h3>
					</div>
					<form>
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="submit" value="Subscribe" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //contact -->
<!-- footer -->
		<?php include('include/footerhome.php');   ?>	