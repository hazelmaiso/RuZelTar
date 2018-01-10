<?php 
	 include_once('dbconnect.php');

	 if(isset($_GET) && $_GET['event'] != ''){
	 	$event = $_GET['event'];
		$query = "DELETE * FROM event_scheduler Where event = $event";

		$conn->query($query);

?>