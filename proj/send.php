<?php

$c= mysqli_connect('localhost','root','Navya@393','project_mini');

if (!$c) {
	die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['message'])) {
	$message = mysqli_real_escape_string($c, $_POST['message']);

	$sql = "INSERT INTO messages (message) VALUES ('$message')";

	if (mysqli_query($c, $sql)) {
		echo "Message sent successfully";
	} else {
		echo "Error sending message: " . mysqli_error($c);
	}
}
$sql = "SELECT message FROM messages";
$result = mysqli_query($c, $sql);

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<div class='message'>" . $row['message'] . "</div>";
	}
} else {
	echo "No messages";
}

mysqli_close($c);
?>
