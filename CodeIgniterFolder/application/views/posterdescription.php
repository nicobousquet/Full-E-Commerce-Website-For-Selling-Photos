<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<style>

		div.flex_container {
			display: flex;
			flex-direction: row;
			border-radius: 30px;
		}

		div.product {
			width: 50%;
			align-self: center;
			display: flex;
			justify-content: center;
			margin: 2px;
			padding: 10px;
		}

		div.product_info {
			display: flex;
			flex-direction: column;
			background-color: #f8f8f8;
			width: 50%;
			height: 430px;
			padding: 40px;
		}

		button, .button {
			background-color: #abac87;
			padding: 8px 20px;
			border-radius: 4px;
			font-size: 16px;
			line-height: 24px;
			font-weight: 600;
			font-family: "Google Sans Display";
			border: 0;
			color: #FFFFFF;
			text-align: center;
			margin: 2px;
		}

		button:hover {
			background-color: rgb(25 24 24 / 16%)
		}

		.product_description {
			height: 100px;
			width: 100%;
			font-size: 32px;
			margin-top: 75px;
		}

		img {
			max-height: 100%;
			max-width: 100%;
		}

		.button {
			background-color: #abac87;
			float: left;
			margin: 3px 3px 3px 0px;
			width: 100px;
			height: 40px;
			position: relative;
			border-radius: 4px;
			padding: 0;
		}

		.button label,
		.button input {
			display: block;
			position: absolute;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			text-align: center;
		}

		.button input[type="radio"] {
			opacity: 0.011;
			z-index: 100;
			width: 90%;
			height: 90%;
		}

		.button input[type="radio"]:not(:checked) + label {
			background-color: #e9d8d8;
			border-radius: 4px;
		}

		.button input[type="radio"]:checked + label {
			background: #20b8be;
			border-radius: 4px;
		}

		.button label {
			cursor: pointer;
			z-index: 90;
			line-height: 1.8em;
		}

		.font {
			font-family: "Google Sans", Roboto, Arial, sans-serif;
			font-weight: 600;
			color: #b0b0b4;
		}
	</style>
</head>
<body>

<div class="flex_container">
	<div class="product">
		<img src="<?php echo $photo[0]->url; ?>"
			 alt="">
	</div>
	<div class="product_info">
		<div class="font product_description ">
			# <?php echo $photo[0]->continent; ?>
		</div>
		<div style="margin-bottom: 35px;">
			<script>
				display_price = function () {
					let size = $("input:radio[name ='radio_buttons']:checked").val();
					let price = 1000;

					switch (size) {
						case "40x50":
							price = 29.99;
							break;
						case "50x70":
							price = 39.99;
							break;
						case "60x90":
							price = 59.99;
							break;
						case "100x150":
							price = 79.99;
							break;
						case "120x180":
							price = 99.99;
							break;
					}
					document.getElementById('price').innerHTML = (parseInt(document.getElementById('quantity').value) * price).toFixed(2) + '$';
				}
			</script>
			<div style="margin-bottom: 50px">
				<label for="size_form" class="font">Size (cm):</label>
				<form id="size_form" name="size_form"
					  action="<?php echo site_url('MyKart/add_to_kart/') . $photo[0]->continent . '/' . $photo[0]->id; ?>"
					  method="post" style="display: flex; flex-direction: column">
					<div>
						<div class="button">
							<input type="radio" value="40x50" name="radio_buttons" onclick="display_price();"
								   required>
							<label class="btn btn-default">40 x 50</label>
						</div>
						<div class="button">
							<input type="radio" value="50x70" name="radio_buttons" onclick="display_price();">
							<label class="btn btn-default">50 x 70</label>
						</div>
						<div class="button">
							<input type="radio" value="60x90" name="radio_buttons" onclick="display_price();">
							<label class="btn btn-default">60 x 90</label>
						</div>
						<div class="button">
							<input type="radio" value="100x150" name="radio_buttons" onclick="display_price();">
							<label class="btn btn-default">100 x 150</label>
						</div>
						<div class="button" style="margin-bottom: 3px">
							<input type="radio" value="120x180" name="radio_buttons" onclick="display_price();">
							<label class="btn btn-default">120 x 180</label>
						</div>
					</div>
					<div>
						<label for="quantity" class="font">Quantity:</label>
						<select id="quantity" onchange="display_price();" name="quantity" style="width: auto">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>
					<br><br>
					<div style="text-align: center" class="buy">
						<button type="submit">Add to kart</button>
						<div id="price" class="font"></div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>