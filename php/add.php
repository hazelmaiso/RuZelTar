<?php 
	 include_once('dbconnect.php');

	 if(isset($_GET) && $_GET['event'] != ''){
	 	$event = $_GET['event'];
		$date = $_GET['date'];
		$time = $_GET['time'];
		$query = "INSERT INTO event_scheduler VALUES('','$event','$date','$time')";

		 if($conn->query($query) === true){
		 	$data['status'] = 1;
		 	$data['msg'] = "Successfully added";
			
		 	$data['dataObject'] = array('name' => $event);
			$data['dataObject'] = array('date' => $date);
			$data['dataObject'] = array('time' => $time);
		 	echo json_encode($data);
		 	//echo "Event successfully to added";
		 }else{
		 	echo "Failed to add";
		 }
	 }else{
	 	echo "Invalid Input";
	 } 
?>