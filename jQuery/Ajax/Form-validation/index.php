<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form validation</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<form action="mail.php" method="POST">
		<input id="mail-name" type="text" name="name" placeholder="Fullname">
		<br>
		<input id="mail-email" type="text" name="email" placeholder="Email">
		<br>
		<select id="mail-gender" name="gender" id="">
			<option value="male">Male</option>
			<option value="female">Female</option>
		</select>
		<br>
		<textarea name="message" id="mail-message" cols="30" rows="10" placeholder="Message"></textarea>
		<br>
		<button id="mail-submit" type="submit" name="submit">Send Email</button>
		<p class="form-message"></p>
	</form>

<script>
	jQuery(document).ready(function($) {
		$('form').submit(function(event) {

			event.preventDefault();

			let name = $('#mail-name').val();
			let email = $('#mail-email').val();
			let gender = $('#mail-gender').val();
			let message = $('#mail-message').val();
			let submit = $('#mail-submit').val();

			$('.form-message').load('mail.php',{
			name: name, 
			email: email, 
			gender: gender, 
			message: message, 
			submit: submit
			});
		});
	});
</script>
</body>
</html>