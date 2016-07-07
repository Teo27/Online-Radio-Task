<?php

require_once('../DBConnect.php');

$query = "SELECT singer FROM Song GROUP BY singer ORDER BY SUM(played) DESC LIMIT 1";

$response = @mysqli_query($conn, $query);

if($response){
	$row = mysqli_fetch_array($response);
	echo '<span> The most played singer is '.$row['singer'].'.</span>';
}else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>