<section id="section-success">
	<div class="container">
		<div class="success-box-container">
			<h1>
				<?php 
					if (isset($_SESSION['success_title'])) echo $_SESSION['success_title']; 
					else echo 'Success!';
				?>
			</h1>
			<p>
				<?php 
					if (isset($_SESSION['success_message'])) echo $_SESSION['success_message']; 
				?>
			</p>
			<a href="<?php echo isset($_SESSION['success_link']) ? $_SESSION['success_link'] : site_url(); ?>">
				<?php 
					echo isset($_SESSION['success_label']) ? $_SESSION['success_label'] : "Return to Home";
				?>
			</a>
		</div>
	</div>
</section>