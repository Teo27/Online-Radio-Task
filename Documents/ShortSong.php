<?php

require_once('../DBConnect.php');

$query = "SELECT CONCAT(singer,' - ', song) AS title FROM Song ORDER BY duration ASC LIMIT 1";

$response = @mysqli_query($conn, $query);

if($response){
	$row = mysqli_fetch_array($response);
	echo '<span> Shortest song is '.$row['title'].'.</span>';
}else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>