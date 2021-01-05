<?php
$host="localhost";
    $user="root";
    $password="";
    $db="be_project";

    $conn = new mysqli($host , $user , $password ,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO attendance (title, data, mark) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $title, $data, $attend);
@$id=$_POST['hid']; 
// set parameters and execute
$i=0;
while($i<$id){
	$i++;
@$a=$_POST['title'][$i];  
@$b=$_POST['data'][$i]; 
@$c=$_POST['attend'][$i];
$title = "$a";
$data = "$b";
$attend = "$c";
$stmt->execute();
}
?>
<script>
   window.location.replace("http://localhost/be1/adminpages/attendance.php");
	alert("New records created successfully");
</script>

<?php
$stmt->close();
$conn->close();
?>