<?php 
	include 'db.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Database</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700,700i" rel="stylesheet">
</head>
<body>
	<div class="content">
		<?php 
			$result = mysqli_query($con, "select * from comments limit 2");
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
				    echo '<p>';
				    echo '<b>';
				    echo $row['author'];
				    echo '</b>';
				    echo '<br>';
				    echo $row['message'];
				    echo '</p>';
				    echo '<br>';
				    echo '<hr>';
				    echo '<br>';

				}
			} else {
				echo 'There are no comments';
			}
		 ?>
	</div>
	<button class="btn">Load more comments</button>

<script>
	jQuery(document).ready(function($) {
		let counter = 2;
		$('.btn').click(function(event) {
			counter += 2;
			$('.content').load('load-comments.php', {
				newCounter: counter 
			});
		});
	});
</script>
</body>
</html>