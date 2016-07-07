<?php

require_once('../DBConnect.php');

$query = "SELECT genre FROM Song GROUP BY genre ORDER BY COUNT(genre) DESC LIMIT 1;";

$response = @mysqli_query($conn, $query);

if($response){
	$row = mysqli_fetch_array($response);
	echo '<span> The genre with most songs is '.$row['genre'].'.</span>';
}else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>