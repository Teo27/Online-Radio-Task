<?php

require_once('../DBConnect.php');

$query = "SELECT genre FROM Song GROUP BY genre ORDER BY SUM(played) DESC LIMIT 1";

$response = @mysqli_query($conn, $query);

if($response){
	$row = mysqli_fetch_array($response);
	echo '<span> Most played genre is '.$row['genre'].'.</span>';
}else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>