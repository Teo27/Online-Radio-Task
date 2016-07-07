<?php

DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_USER', 'newuser');
DEFINE ('DB_PASSWORD', 'Password27!');
DEFINE ('DB_NAME', 'RadioTask');

$conn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
OR die('There was a problem connecting to the DB. '.mysqli_connect_error());


?>