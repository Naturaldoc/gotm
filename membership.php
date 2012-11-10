<?php require_once('templates/header.php'); ?>
<div class="container">
	<div class="hero-unit span6 offset3">
		<form class="form-horizontal" action="storeMember.php" method="post">
			<div class="control-group">
				<label class="control-label" for="fName">First Name</label>
				<div class="controls">
					<input type="text" id="fName" name="fName" placeholder="First Name">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="lName">Last Name</label>
				<div class="controls">
					<input type="text" id="lName" name="lName" placeholder="Last Name">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="Address">Address</label>
				<div class="controls">
					<input type="text" id="address" name="address" placeholder="Address">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="city">City</label>
				<div class="controls">
					<input type="text" id="city" name="city" placeholder="City">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="state">State</label>
				<div class="controls">
					<input type="text" id="state" name="state" placeholder="State">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="zipCode">Zip Code</label>
				<div class="controls">
					<input type="text" id="zipCode" name="zipCode" placeholder="ZipCode">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="phone">Phone</label>
				<div class="controls">
					<input type="text" id="phone" name="phone" placeholder="Phone">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="email">Email</label>
				<div class="controls">
					<input type="text" id="email" name="email" placeholder="Email">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="size">Size</label>
				<div class="controls">
					<select id="size" name="size">
						<option value="S">Small</option>
						<option value="M">Medium</option>
						<option value="L">Large</option>
						<option value="XL">X-Large</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="month">Month you wish to begin:</label>
				<div class="controls">
					<select id="month" name="month">
						<option value="01">January</option>
						<option value="02">February</option>
						<option value="03">March</option>
						<option value="04">April</option>
						<option value="05">May</option>
						<option value="06">June</option>
						<option value="07">July</option>
						<option value="08">August</option>
						<option value="09">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<input type="submit" value="Submit Form" />
					<input type="reset" value="Clear Form" />
				</div>
			</div>
		</form>
	</div>
</div>
<?php require_once('templates/footer.php'); ?>