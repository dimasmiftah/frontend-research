<?php 
	include 'db.php';

	$counter = $_POST['newCounter'];
	$result = mysqli_query($con, "select * from comments limit $counter");
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