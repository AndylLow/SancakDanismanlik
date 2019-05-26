
	  document.addEventListener('DOMContentLoaded', function() {
	    var calendarEl = document.getElementById('calendar');
	    var doubleClick=new Date();
	   // var clickTimer=null;
	    var calendar = new FullCalendar.Calendar(calendarEl, {
	      locale: 'tr',
	      plugins: [ 'interaction', 'dayGrid' ],
	      defaultDate: '<?php echo "20".date("y-m-d"); ?>',
	      editable: true,
	      eventLimit: true, // allow "more" link when too many events
	      events: [
	      <?php
	      	  $string="";
	          $link=mysqli_connect('localhost','root','');
	          mysqli_select_db($link,'mydb');
	          $rs=mysqli_query($link,"SELECT * FROM events");

	          while($result=mysqli_fetch_array($rs)){
  				 $string = $string."{
  				  id: '".$result["ID"]."',
		          title: '".$result["Title"]."',
		          start: '".$result["date"]."'
		        },";
  				}
  			  substr_replace($string,"",-1);
  			  echo $string;
		    ?>
		    ],
		    eventDrop: function(info){
		    	loadDoc(info.event);
		    },
		    eventClick: function() {
		        var singleClick=new Date();
		    	if(Date.parse(doubleClick)-Date.parse(singleClick)>-50){
		    		alert("double click");
		    		doubleClick=null;
		    	}
		    	else{
		    		doubleClick=new Date();
		    	}
		    },
		    dateClick:function(date,allDay,jsEvent,view){
		    	//alert('a day has beeeen clicked0');
		    	var singleClick=new Date();
		    	if(Date.parse(doubleClick)-Date.parse(singleClick)>-50){
		    		alert("double click");
		    		doubleClick=null;
		    	}
		    	else{
		    		doubleClick=new Date();
		    	}
		    }

		    });
	    calendar.render();
	  });


				function loadDoc(id) {

				  var a=id;
				  var Title=a.title;
				  var date=a.start.toISOString();
				  //date=date.substring(0,10);
				  var xhttp = new XMLHttpRequest();
				  xhttp.onreadystatechange = function() {
				    if (this.readyState == 4 && this.status == 200) {
				      //alert("Success");
				    }
				  };
				  xhttp.open('POST', 'istek2.php', true);
				  xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
				  xhttp.send("Title="+Title+"&date="+date+"&ID="+a.id);																									
				}
	