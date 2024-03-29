<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/paymentform.css");?>">
</head>

<body>
<div class="form_box">
	<form method="post" class="font" action="<?= site_url('CallUMAPal'); ?>">
		<div class="font" style="text-align: center; font-size: 20px">
			Add your shipment address
		</div>
		<div class="line">
			<input type="text" id="fname" name="fname" placeholder="First name" pattern="[A-Za-z]+" required><br>
			<input type="text" id="lname" name="lname" placeholder="Last name" pattern="[A-Za-z]+" required><br>
		</div>
			<input style="width: 95%;" type="text" name="address" placeholder="Address" required>
			<input style="width: 95%;" type="text" name="appartment" placeholder="Appartment" required>
		<div class="line">
			<input type="number" name="postal_code" placeholder="Postal code" required>
			<input type="text" name="city" placeholder="City" required>
			<input type="text" name="country" placeholder="Country" required>
		</div>
		<div style="text-align: center">
			<input id="submit" type="submit" value="Submit">
		</div>
	</form>
</div>
</body>

</html>
