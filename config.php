<?php
	$conn = new mysqli("localhost","root","","college_happenings");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>