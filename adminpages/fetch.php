<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "be_project");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security

//$title = mysqli_real_escape_string($link, $_REQUEST['t1']);

$result = $_GET['t1'];
echo $result;



// Close connection
mysqli_close($link);
?>