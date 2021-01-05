<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "be_project");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_REQUEST['f1']);
$last_name = mysqli_real_escape_string($link, $_REQUEST['l1']);
$email = mysqli_real_escape_string($link, $_REQUEST['e1']);
$department = mysqli_real_escape_string($link, $_REQUEST['d1']);
$joiningdate = mysqli_real_escape_string($link, $_REQUEST['j1']);

// Attempt insert query execution
$sql = "INSERT INTO emp (email, jdate, fname, lname, dept) VALUES ( '$email', '$joiningdate', '$first_name', '$last_name', '$department')";
if(mysqli_query($link, $sql)){
 ?>
<script>    alert ("Records added successfully.");
window.location.replace("http://localhost/be1/production/user.php");
</script>
<?php

} else{ ?>
<script>    alert ("ERROR: Check for duplicate entries ") . mysqli_error($link);
window.location.replace("http://localhost/be1/production/user.php");
 </script>
<?php

}

// Close connection
mysqli_close($link);
?>
