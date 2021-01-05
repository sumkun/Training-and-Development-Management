<?php
session_start();
$_SESSION['timein']=  time();
?>
<html>
<body>
 <form method="post" action="capture_data.php" >

<?php
include("config.php");
$conn = mysqli_connect($dbHost, $dbuser, $dbpassword, $dbDatabase);
$query_salutation_type='SELECT salutation_description FROM tbl_salutation;';
$select_salutation_type=mysqli_query($conn, $query_salutation_type);

while($row1 = mysqli_fetch_array($select_salutation_type))
{
    echo '<input type="radio" name="salutation_description" value="'.$row1[0].'"/>'.$row1[0];

}
?>
       <input type="submit" name="submit" value="Submit"/>
</form> 
</body>
</html>

<?php 


if(isset($_POST['submit']))
{

if(isset($_POST['salutation_description']))
{
    $selected_val = $_POST['salutation_description'];
    echo "You have selected :" .$selected_val; 
}
 else 
{
    echo 'No Value Selected';
}
}
?>