<?php
	include 'config.php';
	$sql = "SELECT * FROM settings";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$name = $row["name"];


		}

	} else {
		echo "0 results";
	}
	mysqli_close($conn);
?>