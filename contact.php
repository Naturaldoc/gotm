<?php include_once("templates/header.php"); ?>

<div class="container">
	<form class="form-horizontal span6 offset3" id="email" action="email.php" method="post">
		<div class="control-group">
			<label class="control-label" for="name">Name</label>
			<div class="controls">
				<input type="text" name="name" id="name" placeholder="Name" />
			</div><!-- /controls -->
		</div><!-- /control-group #name -->
		<div class="control-group">
			<label class="control-label" for="address">Email Address</label>
			<div class="controls">
				<input type="text" name="address" id="address" placeholder="Email" />
			</div><!-- /controls -->
		</div><!-- /control-group #email -->
		<div class="control-group">
			<label class="control-label" for="subject">Subject</label>
			<div class="controls">
				<input type="text" name="subject" id="subject" placeholder="Subject" />
			</div><!-- /controls -->
		</div><!-- /control-group #subject -->
		<div class="control-group">
			<label class="control-label" for="message">Message</label>
			<div class="controls">
				<textarea name="message" id="message" rows="10" placeholder="Message"></textarea>
			</div><!-- /controls -->
		</div><!-- /control-group #message -->
		<div class="offset2">
			<input type="submit" value="Send" />
			<input type="reset" value="Clear" />
		</div>
	</form>
</div><!-- /container -->

<?php include_once("templates/footer.php"); ?>