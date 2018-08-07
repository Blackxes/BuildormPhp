<?php
	error_reporting(E_ALL & ~E_NOTICE);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Formcss</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" media="screen" href="form.css	" />
	</head>
	<body>

		<!-- <pre><?php print_r($_GET); ?></pre> -->

		<!-- default -->
		<form action="form.php" method="post">
			<div class="item">
				<div class="title">
					<h4>Userlogin</h4>
				</div>
			</div>
			<div class="item">
				<div class="field-value">
					<input type="text" placeholder="Benutzername" />
				</div>
			</div>
			<div class="item">
				<div class="field-value">
					<input type="password" placeholder="Password" />
				</div>
			</div>
			<div class="item">
				<div class="value">
					<input type="submit" value="Senden">
				</div>
			</div>
		</form>

		<!-- vertical labels --> 
		<form action="form.php" method="post">
			<div class="item">
				<div class="title">
					<h4>Vertical Form (default)</h4>
				</div>
			</div>
			<div class="item">
				<div class="field-label">
					<label>Benutzername</label>
				</div>
				<div class="field-value">
					<input type="text" placeholder="Benutzer"/>
				</div>
			</div>
			<div class="item">
				<div class="field-label">
					<label>Password</label>
				</div>
				<div class="field-value">
					<input type="password" placeholder="Password" />
				</div>
			</div>
			<div class="item">
				<div class="field-value">
					<input type="submit" value="Senden">
				</div>
			</div>
		</form>

		<!-- horizontal labels --> 
		<form action="form.php" method="post">
			<div class="item">
				<div class="title">
					<h4>Horizontal Form (adjusted)</h4>
				</div>
			</div>
			<div class="item h required">
				<div class="field-label">
					<label>Benutzername</label>
				</div>
				<div class="field-value">
					<input type="text" placeholder="Benutzer"/>
				</div>
			</div>
			<div class="item h">
				<div class="field-label">
					<label>Password</label>
				</div>
				<div class="field-value">
					<input type="password" placeholder="Password" />
				</div>
			</div>
			<div class="item">
				<div class="field-value">
					<input type="submit" value="Senden">
				</div>
			</div>
		</form>

		<!-- selection -->
		<form action="form.php" method="post">
			<div class="item">
				<div class="title">
					<h4>Selection<h4>
				</div>
			</div>
			<div class="item h required">
				<div class="field-label">
					<label>Fruit selection</label>
				</div>
				<div class="field-value">
					<select>
						<option value="1">Bananas</option>
						<option selected value="2">Apples</option>
						<option value="3">Oranges</option>
					</select>
				</div>
			</div>
			<div class="item">
				<div class="field-value">
					<input type="submit" value="Senden">
				</div>
			</div>
		</form>

		<form action="form.php" method="post">
			<div class="item">
				<div class="title">
					<h4>Radio</h4>
				</div>
			</div>
			<div class="item">
				<div class="field-label">
					<label>Fruit selection</label>
					<p class="field-description">Fruit selection to select a tasty fruit. Do you want some?</p>
				</div>
				<div class="field-value">
					<div class="field-value">
						<div class="item h">
							<div class="field-label">
								<label>BMW</label>
							</div>
							<div class="field-value">
								<input type="radio" name="cars">
							</div>
						</div>
						<div class="item h">
							<div class="field-label">
								<label>Audi</label>
							</div>
							<div class="field-value">
								<input type="radio" name="cars">
							</div>
						</div>
						<div class="item h">
							<div class="field-label">
								<label>Opel</label>
							</div>
							<div class="field-value">
								<input type="radio" name="cars">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="field-value">
					<input type="submit" value="Senden">
				</div>
			</div>
		</form>

		<!-- textarea -->
		<form action="form.php" method="post">
			<div class="item">
				<div class="title">
					<h4>Textarea</h4>
				</div>
			</div>
			<div class="item">
				<div class="field-label">
					<label>Some Text</label>
				</div>
				<div class="field-value">
					<textarea></textarea>
				</div>
			</div>
			<div class="item">
				<div class="field-value">
					<input type="submit" value="Senden">
				</div>
			</div>
		</form>

	</body>
</html>