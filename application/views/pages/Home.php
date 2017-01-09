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

			<?php if (sizeof($carousel) > 0)
			{
				foreach($carousel as $slide)
				{
					echo '<div class="item active">
						<img src="' . $slide->image . '" width="100%">
						<div class="gradient-mask-full-light"></div>
						<div class="carousel-caption">
							<h3>' . $slide->title . '</h3>
							<img src=" ' . base_url() .'assets/img/ui/line_shadow.png" width="50%" style="margin:2vw" class="hidden-xs">
						<p class="hidden-xs">' . $slide->content . '</p>
						</div>
					</div>';
				}
			}
			?>
			
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
			<div class="col-xs-12 col-md-4">
				<label for="checkin">Check-In</label>
				<input type="date" class="form-control" id="checkin">
			</div>
			<div class="col-xs-12 col-md-4">
				<label for="checkin">Check-Out</label>
				<input type="date" class="form-control" id="checkin">
			</div>
			<div class="col-xs-12 col-md-4">
				<input type="submit" value="BOOK" class="button pull-right">
			</div>
		</form>
	</div>
	
	<!-- Press Releases -->
	<section id="section-press-release">
		<h1>Press Release</h1>
		<img src="<?php echo base_url(); ?>assets/img/ui/line.png" class="header-divisor">

		<div class="container">
			
			<?php if (sizeof($press_release) > 0)
			{
				foreach($press_release as $post)
				{
					echo '<div class="press-release-container row">
						<div class="press-release-image col-md-4 col-sm-12" style="background-image: url(' . $post->image . ')"></div>
						<div class="col-md-8 col-sm-12">
							<a href="#"><h2>' . $post->title . '</h2></a>
							<h3>' . $post->date_posted . '</h3>
							<p>' . $post->home_content . '</p>
							<a href="#" class="read-more-button">Read More</a>
						</div>
					</div>';
				}
				echo '<a href="#">View More</a>';
			}
			else
			{
				echo 'No press release posts found';
			}
			?>

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
		<div class="gradient-mask-full-light valign-wrapper">
			<div class="valign calign">
				<h2>Reserve Your Luxury Suite Now</h2>
				<img src="<?php echo base_url(); ?>assets/img/ui/line_shadow.png" class="header-divisor">
				<a href="#">Online Reservation</a>
			</div>
		</div>
	</div>
</div>