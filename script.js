(function(global){

	global.obj = {};
	obj.deleteMe=function(deleteme){
		obj.list = deleteme
		var event = document.getElementById("delete").value;
		var xhttp= new XMLHttpRequest();
		xhttp.open("GET","php/delete.php?event="+event)
		xhttp.send();
	}

	obj.changeContent = function(){
		var event = document.getElementById("event").value;
		var date = document.getElementById("date").value;
		var time = document.getElementById("time").value;
		var xhttp = new XMLHttpRequest();

		xhttp.onreadystatechange = function(){
			console.log(this);
			if (this.readyState == 4 && this.status == 200) {
				var data = JSON.parse(this.responseText);

				  if(data.status == 1){
					document.getElementById("response").innerHTML = data.msg;
					
				} 		      
		    }
		}; 

		xhttp.open("GET", "php/add.php?event="+event+"&date="+date+"&time="+time);
		xhttp.send();
		
	}
	
	

}(window))