<?php
  include_once 'dbh.ini.php';
  
   if(isset($_GET['del_task'])) {
	  $id = $_GET['del_task'];  
	  $sql = "UPDATE userdata SET status=1 WHERE id=$id;";
	  mysqli_query($conn, $sql);     
	}
	header("location: ../index.php");
  
?>