<?php
 $conn= new mysqli('localhost','root','','hzalidb');
 if($conn->connect_error)
 {
	 die('Connection Failed  : '.$conn->connect_error);
 }
?>