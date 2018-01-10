<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<title>Event Scheduler</title>
</head>
<body ">

	<!--<form action="/action_page.php" method="get">-->
	<div id="username"></div>
	<div id="response"></div>
	<h1>EVENT SCHEDULER</h1>
	<form>
		EVENT: </br><input type="text" id ="event" name="event" placeholder="Add Event" style="margin-left: 50px; 
							height:20px; width:250px;" required ></br>
		DATE:  </br><input id="date" type="date" style="margin-left: 50px; height:20px; width:250px;" required></br>
		TIME:  </br><input id="time" type="time" style="margin-left: 50px; height:20px; width:250px;" required></br></br>
		<button onclick="obj.changeContent()" style="margin-left: 105px; height:30px; width:150px; ">Add Event</button><br>
		<br><button style="margin-left: 105px; height:30px; width:150px;"><a href="partial.php" >Show the List</a></button>
	</form>
	<script type="text/javascript" src="script.js"></script>

</body>
</html>