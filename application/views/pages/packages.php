<div class="container-fluid">
	<!-- Press Releases -->
	<section id="packages-header"  data-stellar-background-ratio="0.5">
		<h1>We Here to Give The Best Hospitality Service</h1>
		<img src="<?php echo base_url(); ?>assets/img/ui/line.png" class="header-divisor">
		<br><br>
		<div class="container tagline">
			<h3>
				Hotel Packages
			</h3>
		</div>
	</section>
	<section id="packages-content">
		<div class="container paragraph" id="packages">
			<h2>MEETING PACKAGE</h2>
			
			<div class="options">
				<button class="sort btn btn-primary" data-sort="price">
				   Price
				</button>
				<input class="search" placeholder="Search" />
			</div>

			<ul class="list">
				<li>
					<span class="name">
					FULLBOARD RESIDENTIAL (1) IDR <span class="price">780</span>.000,-nett/person<br>
					&nbsp - Superior room twin share<br>
					&nbsp - 1x Breakfast<br>
					&nbsp - 2x Coffee break<br>
					&nbsp - 1x Lunch<br>
					&nbsp - 1x Dinner
					</span>
				</li>
				<li>
					<span class="name">
					FULLBOARD RESIDENTIAL (2) IDR  <span class="price">850</span>.000,-nett/person<br>
					&nbsp - Deluxe Twin<br>
					&nbsp - 1x Breakfast<br>
					&nbsp - 2x Coffee Break<br>
					&nbsp - 1x Lunch<br>
					&nbsp - 1x Dinner
					</span>
				</li>
				<li>
					<span class="name">
					FULLDAY MEETING PACKAGE IDR  <span class="price">470</span>.000,-nett/person<br>
					&nbsp - 2x Coffee break<br>
					&nbsp - 1x Lunch<br>
					&nbsp - 1x Dinner
					</span>
				</li>
				<li>
					<span class="name">
					HALFDAY MEETING PACKAGE (1) IDR  <span class="price">255</span>.000,-nett/person<br>
					&nbsp - 1x Coffee break<br>
					&nbsp - 1x Lunch or Dinner
					</span>
				</li>
				<li>
					<span class="name">
					HALFDAY MEETING PACKAGE (1) IDR  <span class="price">315</span>.000,-nett/person<br>
					&nbsp - 2x Coffee break<br>
					&nbsp - 1x Lunch or Dinner
					</span>
				</li>
			</ul>
		</div>

		<div class="container">
			<hr>
		</div>

		<div class="container paragraph" id="packages_2">
			<h2>ROOMS PACKAGE</h2>
			
			<div class="options">
				<button class="sort btn btn-primary" data-sort="price">
				   Price
				</button>
				<input class="search" placeholder="Search" />
			</div>

			<ul class="list">
				<li>
					<span class="name">
					LONG STAY PACKAGE IDR <span class="price">9</span>.500.000,-/person/month<br>
					&nbsp - Breakfast<br>
					&nbsp - Daily cleanup<br>
					&nbsp - Free Hotel Facilities
					</span>
				</li>
			</ul>
		</div>

	</section>

	<section id="packages-content">
		<div class="paragraph container">
			<ul>
				<li>Coffee Break Rp. 45.000,- Net</li>
				<li>Lunch or Dinner Rp. 135.000,- Net</li>
				<li>Meeting room I, II, III or IV = Rp.4.000.000 / 12 Jam ; Rp.3.000.000 / 8 jam</li>
				<li>Ball room = Rp.20.000.000 / 12 jam ; Rp.15.000.000 / 8 Jam</li>
			</ul>
		</div>
	</section>
</div>

<script>
	var options = {
	  valueNames: [ 'price', 'name' ]
	};

	var packagesList = new List('packages', options);

	var packagesList2 = new List('packages_2', options);
</script>