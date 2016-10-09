<div class="container-fluid">
	<!-- Reservation Page -->
	<section id="section-reservation">
		<h1>Online Reservation</h1>
		<img src="<?php echo base_url(); ?>assets/img/ui/line.png" class="header-divisor">

		<div class="container">
			<div class="reservation-form-container">
				<form id="reservation-form" class="row">

					<!-- User title -->
					<div class="form-group col-xs-12" data-for="reservation_title">
						<label for="reservation_title">Your Title*</label><br>
						<input type="radio" name="reservation_title" value="mr" checked> Mr.&nbsp;&nbsp;
						<input type="radio" name="reservation_title" value="mrs"> Mrs.&nbsp;&nbsp;
						<input type="radio" name="reservation_title" value="miss"> Miss.&nbsp;&nbsp;
					</div>
					
					<!-- User first name -->
					<div class="form-group col-xs-12 col-sm-6" data-for="reservation_first_name">
						<p class="form-error"></p>
						<label for="reservation_first_name">First Name*</label>
						<input type="text" name="reservation_first_name" class="form-control">
					</div>

					<!-- User last name -->
					<div class="form-group col-xs-12 col-sm-6" data-for="reservation_last_name">
						<p class="form-error"></p>
						<label for="reservation_last_name">Last Name*</label>
						<input type="text" name="reservation_last_name" class="form-control">
					</div>

					<!-- User mobile number -->
					<div class="form-group col-xs-12 col-sm-6" data-for="reservation_mobile_phone">
						<p class="form-error"></p>
						<label for="reservation_mobile_phone">Mobile Number*</label>
						<input type="number" name="reservation_mobile_phone" class="form-control">
					</div>

					<!-- User BBPIN -->
					<div class="form-group col-xs-12 col-sm-6" data-for="reservation_bb_pin">
						<p class="form-error"></p>
						<label for="reservation_bb_pin">BB Pin</label>
						<input type="text" name="reservation_bb_pin" class="form-control">
					</div>

					<!-- User Email -->
					<div class="form-group col-xs-12 col-sm-6" data-for="reservation_email">
						<p class="form-error"></p>
						<label for="reservation_email">E-Mail*</label>
						<input type="text" name="reservation_email" class="form-control">
					</div>

					<!-- User Email Confirmation -->
					<div class="form-group col-xs-12 col-sm-6" data-for="reservation_email_confirmation">
						<p class="form-error"></p>
						<label for="reservation_email_confirmation">E-Mail Confirmation*</label>
						<input type="text" name="reservation_email_confirmation" class="form-control">
					</div>

					<!-- User Checkin Date -->
					<div class="form-group col-xs-6" data-for="reservation_checkin">
						<p class="form-error"></p>
						<label for="reservation_checkin">Check-In*</label>
						<input type="date" name="reservation_checkin" class="form-control">
					</div>

					<!-- User Checkin Date -->
					<div class="form-group col-xs-6" data-for="reservation_checkout">
						<p class="form-error"></p>
						<label for="reservation_checkout">Check-out*</label>
						<input type="date" name="reservation_checkout" class="form-control">
					</div>

					<!-- Room Type -->
					<div class="form-group col-xs-12 col-sm-6" data-for="reservation_room_type">
						<p class="form-error"></p>
						<label for="reservation_room_type">Room Type*</label>
						<select name="reservation_room_type" class="form-control">
							<option value="superior">Superior Room</option>
							<option value="deluxe">Deluxe Room</option>
							<option value="family">Family Suite</option>
							<option value="executive">Executive Suite</option>
							<option value="president">President Suite</option>
						</select>
					</div>

					<!-- Rooms -->
					<div class="form-group col-xs-6 col-sm-3" data-for="reservation_number_of_rooms">
						<p class="form-error"></p>
						<label for="reservation_number_of_rooms">Number of Rooms*</label>
						<input type="number" name="reservation_number_of_rooms" class="form-control">
					</div>

					<!-- Persons -->
					<div class="form-group col-xs-6 col-sm-3" data-for="reservation_number_of_guests">
						<p class="form-error"></p>
						<label for="reservation_number_of_guests">Number of Guests*</label>
						<input type="number" name="reservation_number_of_guests" class="form-control">
					</div>

					<!-- Additional Messages -->
					<div class="form-group col-xs-12" data-for="reservation_additional_messages">
						<p class="form-error"></p>
						<label for="reservation_additional_messages">Additional Messages</label>
						<textarea name="reservation_additional_messages" class="form-control" rows="3"></textarea>
					</div>

					<!-- Submit button -->
					<div class="col-xs-12">
						<input type="submit" style="height: 50px; width: 100%;" value="Submit" class="btn btn-default"></input>
					</div>

					<!-- Notification Area -->
					<div id="form-notification" class="col-xs-12">

					</div>

					<!-- Layer for blocking the form when it's loading -->
					<div class="form-loading-disabled valign-wrapper">
						<div class="valign">
							<div class="loading-pulse"></div>
							<h1>Please wait</h1>
							<p>Submitting your information</p>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
</div>