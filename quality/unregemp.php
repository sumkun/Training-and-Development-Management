<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "be_project");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$data = mysqli_real_escape_string($link, $_REQUEST['d1']);
$title = mysqli_real_escape_string($link, $_REQUEST['t1']);
// Attempt delete query execution
$sql = "DELETE FROM register WHERE data= '$data'AND title= '$title'";
if(mysqli_query($link, $sql)){ ?>
  <script>
    alert ("Records were deleted successfully.");
    window.location.replace("http://localhost/be1/quality/events.php");
  </script>
<?php
} else{
?>
  <script>
    alert ("ERROR: Could not able to execute $sql. ") . mysqli_error($link);
    window.location.replace("http://localhost/be1/quality/events.php");
  </script>
<?php
}

// Close connection
mysqli_close($link);
?>
