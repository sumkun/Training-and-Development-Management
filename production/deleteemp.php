<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "be_project");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$email2 = mysqli_real_escape_string($link, $_REQUEST['e2']);
// Attempt delete query execution
$sql = "DELETE FROM emp WHERE email= '$email2'";
if(mysqli_query($link, $sql)){ ?>
  <script>
    alert ("Records were deleted successfully.");
    window.location.replace("http://localhost/be1/production/user.php");
  </script>
<?php
} else{
?>
  <script>
    alert ("ERROR: Could not able to execute $sql. ") . mysqli_error($link);
    window.location.replace("http://localhost/be1/production/user.php");
  </script>
<?php
}

// Close connection
mysqli_close($link);
?>
