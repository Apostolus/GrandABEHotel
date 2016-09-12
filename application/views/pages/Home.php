<div class="container-fluid">
	<br>
	<!-- CAROUSEL -->
	<div id="imgCarousel" class="carousel slide" data-ride="carousel">
		<!--Indicator-->
		<ol class="carousel-indicators">
			<li data-target="#imgCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#imgCarousel" data-slide-to="1"></li>
			<li data-target="#imgCarousel" data-slide-to="2"></li>
			<li data-target="#imgCarousel" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper-->
		<div class="carousel-inner" role="listbox">

			<div class="item active">
				<img src="<?php echo base_url(); ?>assets/img/home1.jpg" alt="Room 1" width="100%">
				<div class="carousel-image-mask"></div>
				<div class="carousel-caption">
					<h3>Room 1</h3>
					<img src="<?php echo base_url(); ?>assets/img/ui/line_shadow.png" width="50%" style="margin:2vw" class="hidden-xs">
				<p class="hidden-xs">Cras bibendum nisl id nunc egestas tincidunt. Aliquam quis dignissim nisi. Mauris euismod egestas nisi sed ullamcorper. Mauris scelerisque, lectus a mattis pharetra, enim nisl molestie augue, ac tincidunt nunc elit a augue. Sed commodo, leo eget volutpat auctor, risus sapien finibus felis, sed vestibulum erat ligula vitae justo.</p>
				</div>
			</div>

			<div class="item">
				<img src="<?php echo base_url(); ?>assets/img/home2.jpg" alt="Room 2" width="100%">
				<div class="carousel-image-mask"></div>
				<div class="carousel-caption">
				<h3>Room 2</h3>
				<img src="<?php echo base_url(); ?>assets/img/ui/line_shadow.png" width="50%" style="margin:2vw" class="hidden-xs">
				<p class="hidden-xs">Cras bibendum nisl id nunc egestas tincidunt. Aliquam quis dignissim nisi. Mauris euismod egestas nisi sed ullamcorper. Mauris scelerisque, lectus a mattis pharetra, enim nisl molestie augue, ac tincidunt nunc elit a augue. Sed commodo, leo eget volutpat auctor, risus sapien finibus felis, sed vestibulum erat ligula vitae justo.</p>
				</div>
			</div>
			
			<div class="item">
				<img src="<?php echo base_url(); ?>assets/img/home3.jpg" alt="Room 3" width="100%">
				<div class="carousel-image-mask"></div>
				<div class="carousel-caption">
				<h3>Room 3</h3>
				<img src="<?php echo base_url(); ?>assets/img/ui/line_shadow.png" width="50%" style="margin:2vw" class="hidden-xs">
				<p class="hidden-xs">Lorem Ipsum</p>
				</div>
			</div>

			<div class="item">
				<img src="<?php echo base_url(); ?>assets/img/home4.jpg" alt="Room 4" width="100%">
				<div class="carousel-image-mask"></div>
				<div class="carousel-caption">
				<h3>Room 4</h3>
				<img src="<?php echo base_url(); ?>assets/img/ui/line_shadow.png" width="50%" style="margin:2vw" class="hidden-xs">
				<p class="hidden-xs">Lorem Ipsum</p>
				</div>
			</div>

		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#imgCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true" style="color:#ddd395"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#imgCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true" style="color:#ddd395"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- BOOKING -->
	<div class="bookingDiv">
		<form class="row container" style="margin: auto">
			<div class="col-xs-12 col-md-2">
				<label for="checkin">Check-In</label>
				<input type="date" class="form-control" id="checkin">
			</div>
			<div class="col-xs-12 col-md-2">
				<label for="checkin">Check-Out</label>
				<input type="date" class="form-control" id="checkin">
			</div>
			<div class="col-xs-12 col-md-1">
				<label for="checkin">Adults</label>
				<select name="adults" class="form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<div class="col-xs-12 col-md-1">
				<label for="checkin">Children</label>
				<select name="adults" class="form-control">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
				</select>
			</div>
			<div class="col-xs-12 col-md-3">
				<label for="checkin">Promo Code</label>
				<input type="text" class="form-control" id="checkin">
			</div>
			<div class="col-xs-12 col-md-3">
				<input type="submit" value="BOOK" class="button">
			</div>
		</form>
	</div>

	<!-- FACILITIES DESC -->
	<!--<div class="facilitiesDiv">
		<center>
			<div class="row" style="width:75%">
				<a href="#">
					<div class="col-xs-12 col-md-4">
						<div class="col-xs-12 facilityDesc"><img src="assets/img/placeholderIcon.png" width="50vh"></div>
						<div class="col-xs-12 facilityDesc"><img src="assets/img/line.svg" width="75%"></div>
						<div class="col-xs-12 facilityDesc"><h3 style="color:#ddd395;">SOMETHING</h3></div>
						<div class="col-xs-12 facilityDesc"><p style="color:white;">TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p></div>          
					</div>
				</a>
				<hr class="col-xs-12 visible-xs visible-sm">

				<a href="#">
					<div class="col-xs-12 col-md-4">
						<div class="col-xs-12 facilityDesc"><img src="assets/img/placeholderIcon.png" width="50vh"></div>
						<div class="col-xs-12 facilityDesc"><img src="assets/img/line.svg" width="75%"></div>
						<div class="col-xs-12 facilityDesc"><h3 style="color:#ddd395;">SOMETHING</h3></div>
						<div class="col-xs-12 facilityDesc"><p style="color:white;">TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p></div>
					</div>
					<hr class="col-xs-12 visible-xs visible-sm">
				</a>

				<a href="#">
					<div class="col-xs-12 col-md-4">
						<div class="col-xs-12 facilityDesc"><img src="assets/img/placeholderIcon.png" width="50vh"></div>
						<div class="col-xs-12 facilityDesc"><img src="assets/img/line.svg" width="75%"></div>
						<div class="col-xs-12 facilityDesc"><h3 style="color:#ddd395;">SOMETHING</H3></div>
						<div class="col-xs-12 facilityDesc"><p style="color:white;">TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT TEXT</p></div>
					</div>
				</a>
			</div>
		</center>
	</div>-->

	<!-- Press Releases -->
	<section id="section-press-release">
		<h1>Press Release</h1>
		<img src="<?php echo base_url(); ?>assets/img/ui/line.png" class="header-divisor">

		<div class="container">
			<div class="press-release-container row">
				<div class="press-release-image col-md-4 col-sm-12" style="background-image: url('<?php echo base_url(); ?>assets/img/home4.jpg')"></div>
				<div class="col-md-8 col-sm-12">
					<a href="#"><h2>Press Title</h2></a>
					<h3>9 October 2016</h3>
					<p>Morbi vestibulum tellus ut velit tincidunt pellentesque. Maecenas consequat erat nulla, in mollis tortor lobortis ut. Praesent dignissim lorem sit amet fermentum interdum. Pellentesque tempus nibh ut eleifend commodo. Morbi rhoncus ipsum at sem fermentum, nec tempus tellus gravida. Quisque luctus vel ante sit amet pulvinar.</p>
					<a href="#" class="read-more-button">Read More</a>
				</div>
			</div>

			<div class="press-release-container row">
				<div class="press-release-image col-md-4 col-sm-12" style="background-image: url('<?php echo base_url(); ?>assets/img/home4.jpg')"></div>
				<div class="col-md-8 col-sm-12">
					<a href="#"><h2>Press Title</h2></a>
					<h3>9 October 2016</h3>
					<p>Morbi vestibulum tellus ut velit tincidunt pellentesque. Maecenas consequat erat nulla, in mollis tortor lobortis ut. Praesent dignissim lorem sit amet fermentum interdum. Pellentesque tempus nibh ut eleifend commodo. Morbi rhoncus ipsum at sem fermentum, nec tempus tellus gravida. Quisque luctus vel ante sit amet pulvinar.</p>
					<a href="#" class="read-more-button">Read More</a>
				</div>
			</div>

			<div class="press-release-container row">
				<div class="press-release-image col-md-4 col-sm-12" style="background-image: url('<?php echo base_url(); ?>assets/img/home4.jpg')"></div>
				<div class="col-md-8 col-sm-12">
					<a href="#"><h2>Press Title</h2></a>
					<h3>9 October 2016</h3>
					<p>Morbi vestibulum tellus ut velit tincidunt pellentesque. Maecenas consequat erat nulla, in mollis tortor lobortis ut. Praesent dignissim lorem sit amet fermentum interdum. Pellentesque tempus nibh ut eleifend commodo. Morbi rhoncus ipsum at sem fermentum, nec tempus tellus gravida. Quisque luctus vel ante sit amet pulvinar.</p>
					<a href="#" class="read-more-button">Read More</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Hotel Virtual Tour -->
	<section id="section-virtual-tour">
		<h1>Virtual Tour</h1>
		<img src="<?php echo base_url(); ?>assets/img/ui/line.png" class="header-divisor">

		<div class="container">
			<div class="video-container">
				<iframe width="1280" height="720" src="https://www.youtube.com/embed/v7XQDipKupY?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>

		<div class="room-images-container container-fluid row">
			<div class="room-images col-xs-6" style="background-image: url('<?php echo base_url(); ?>assets/img/home1.jpg')">
				
			</div>
			<div class="room-images col-xs-6" style="background-image: url('<?php echo base_url(); ?>assets/img/home2.jpg')">
				
			</div>
			<div class="room-images col-xs-6" style="background-image: url('<?php echo base_url(); ?>assets/img/home3.jpg')">
				
			</div>
			<div class="room-images col-xs-6" style="background-image: url('<?php echo base_url(); ?>assets/img/home4.jpg')">
				
			</div>
		</div>
	</section>

	<!-- Call to action -->
	<section id="section-cta">
		<div class="carousel-image-mask valign-wrapper">
			<div class="valign calign">
				<h2>Reserve Your Luxury Suite Now</h2>
				<img src="<?php echo base_url(); ?>assets/img/ui/line_shadow.png" class="header-divisor">
				<a href="#">Online Reservation</a>
			</div>
		</div>
	</div>
</div>