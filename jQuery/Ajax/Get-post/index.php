<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Get and post method</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<input type="text">
	<p class="test"></p>
	<!-- <button class="btn">Click to get data!</button> -->

<script>
	jQuery(document).ready(function($) {
		//GET
		// $('.btn').click(function(event) {
		// 	$.get('test.txt', function(data,status) {
		// 		$('.test').html(data);
		// 		alert(status);
		// 	});
		// });

		//POST
		$('input').keyup(function(event) {
			let  nama = $('input').val();
			$.post('suggestion.php', {suggestion: nama}, function(data, status) {
				$('.test').html(data);
			});				
		});
	});
</script>
</body>
</html>