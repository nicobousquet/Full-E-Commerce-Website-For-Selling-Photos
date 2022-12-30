<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html" , lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>
		input[type=text], input[type=email], input[type=password], input[type=number], select {
			padding: 6px 8px;
			margin: 10px;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			width: 100%;
		}

		#submit {
			background-color: #abac87;
			color: white;
			padding: 14px 20px;
			margin: 50px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		input:enabled[type=submit]:hover {
			background-color: rgb(25 24 24 / 16%)
		}

		.font {
			font-family: "Google Sans", Roboto, Arial, sans-serif;
			font-weight: 600;
			color: #b0b0b4;
		}

		.form {
			text-align: center;
			margin: 50px;
		}

		.title {
			height: 100px;
			width: 100%;
			font-size: 32px;
			margin-top: 75px;
		}

		.line {
			display: flex;
			flex-direction: row;
			justify-content: center;
		}

		.column {
			display: flex;
			flex-direction: column;
			justify-content: center;
		}

		.form_box {
			background-color: #f8f8f8;
			align-self: center;
			width: 500px;
			border-radius: 0 0 10px 10px;
			height: 100vh;
			margin: 0;
			position: absolute;
			top: 50%;
			-ms-transform: translateY(-50%);
			transform: translateY(-50%);;
			z-index: -1;
		}

		#message {
			font-size: small;
			margin-top: 20px;
			font-weight: normal;
		}

		/*
				div {
					border-radius: 5px;
					background-color: #f2f2f2;
					padding: 20px;
				}
		 */
	</style>
</head>

<body>
<div class="form_box">
	<form method="post" class="font form" action="<?php echo site_url('CallUMAPal'); ?>">
		<div class="title">
			Add your shipment address
		</div>
		<div class="line">
			<input type="text" id="fname" name="fname" placeholder="First name" pattern="[A-Za-z]+" required><br>
			<input type="text" id="lname" name="lname" placeholder="Last name" pattern="[A-Za-z]+" required><br>
		</div>
		<div class="column">
			<input style="width: 95%;" type="text" name="address" placeholder="Address" required>
			<input style="width: 95%;" type="text" name="appartment" placeholder="Appartment" required>
		</div>
		<div class="line">
			<input type="number" name="postal_code" placeholder="Postal code" required>
			<input type="text" name="city" placeholder="City" required>
			<input type="text" name="country" placeholder="Country" required>
		</div>
		<div>
			<input id="submit" type="submit" value="Submit">
		</div>
	</form>
</div>
</body>

</html>