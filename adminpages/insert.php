<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=be_project', 'root', '');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO `events` 
 (`title`, `start_event`, `end_event`, `dept`) 
 VALUES (:title, :start_event, :end_event, :dept)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':dept' => $_POST['dept']
  )
 );
}


?>
