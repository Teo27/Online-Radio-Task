<?php
require_once('../DBConnect.php');

$singer = $_POST['singer'];
$song = $_POST['song'];
$album = $_POST['album'];
$genre = $_POST['genre'];
$duration = $_POST['duration'];

list($minutes, $seconds) = explode(':', $duration);
$time = $seconds + $minutes*60;

$query = "INSERT INTO Song (singer, song, album, genre, duration)
VALUES ('$singer', '$song', '$album', '$genre', $time) ON DUPLICATE KEY UPDATE played=played+1;";


if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>