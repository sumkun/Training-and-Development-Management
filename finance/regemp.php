<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "be_project");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$data = mysqli_real_escape_string($link, $_REQUEST['f1']);
$title = mysqli_real_escape_string($link, $_REQUEST['t1']);

// Attempt insert query execution
$sql = "INSERT INTO register (title, data) VALUES ( '$title', '$data')";
if(mysqli_query($link, $sql)){
 ?>
<script>    alert ("Records added successfully.");
window.location.replace("http://localhost/be1/finance/events.php");
</script>
<?php

} else{ ?>
<script>    alert ("ERROR: Check for duplicate entries ") . mysqli_error($link);
window.location.replace("http://localhost/be1/finance/events.php");
 </script>
<?php

}

// Close connection
mysqli_close($link);
?>
