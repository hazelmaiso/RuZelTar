<body style="background-color:khaki;">
<div style="margin-left:450px;">
	<h1 style="margin-left:95px; margin-top:30px;">EVENTS</h1>
	
    <?php

        $username="root";
        $password="";
        $database="event";
        mysql_connect("localhost",$username,$password);
        mysql_select_db($database) or die( "Unable to select database");

        $query= "SELECT * FROM event_scheduler";

        $result=mysql_query($query);
        echo "<table border='1' cellpadding='10'>";
        echo "<tr><th>Event</th><th>date</th><th>time</th></tr>";

        while($row = mysql_fetch_array($result))
         {
          echo '<td>' . $row['event'] . '</td>';
          echo '<td>' . $row['date'] . '</td>';
          echo '<td>' . $row['time'] . '</td>';
		 /*  echo '<td><button type="button"id="delete" onclick="obj.deleteMe(this)">Delete</button></td>';
		  echo '<td><button onclick="updateme()">Update</button></td>'; */
          echo "</tr>"; 
          }
         echo "</table>";

         mysql_close();

    ?>
	
	<br><button style="margin-left: 90px; height:30px; width:150px;"><a href="index.php" >Add Event</a></button>
	<script type="text/javascript" src="script.js"></script>
</div>
</body>
