<?php
  include_once 'dbh.ini.php';
  
  if(isset($_POST['toDoSubmit'])) {
	$toDoText = $_POST['toDoText'];
	if(empty($toDoText)) {
		$inputError = "You must fill this";  
	  	echo "<script>alert('".mysqli_real_escape_string($conn, $inputError)."');history.go(-1);</script>";	
	} else {
		$sql = "INSERT INTO userdata (toDoText) VALUE ('$toDoText');";
		mysqli_query($conn, $sql);  
		header("location: ../index.php");
	}	
  }
?>
