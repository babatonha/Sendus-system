<!DOCTYPE html>
<html>
<head>
	<title>check fee</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">

<body>

     <!--navigation bar-->
       <ul class="nav">
          <li class="navli"><a class="active" href="landing.php">Home</a></li>
          <li class="navli"><a href="booking.php">Student</a></li>
          <li class="navli"><a href="driver.php">Driver</a></li>
          <li class="navli"><a href="admin/home.php">Admin</a></li>
          <li class="navli"><a href="fee.php">Check fee</a></li>
          <li class="navli"><a href="login.php">Login</a></li>
      </ul>
      <hr> 


             
	<div class="displayAmount">Check your amount here</div>

<div id="fee-form">
<label>Enter your Residence name</label> <br>
	<select id="dropDownId">
	  <option  value=""></option>
	  <option  value="DTL 93 canterbury street">DTL 93 canterbury street</option>
	  <option  value="Palm cour dummy 33 more street">Palm court dummy 33 more street</option>
	  <option  value="New Castle, 22 stevens road">New Castle, 22 stevens road</opton>
	</select> <br><br>

	<label>Enter location of shop</label> <br>
	<select id="dropDownIdOne">
	  <option value=""></opton>
	  <option value="Waterfront">Water Front Mall</option>
	  <option value="Gardens">Gardens Mall</option>
	  <option value="Century city">Century City Mall</option>   
	</select> <br><br>

	<button id="check">Check fee</button>	

</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script>
   	
   $(function() {

   $('#check').on('click', function() {
 

 		 var selectedRes = $('#dropDownId :selected').text();
         var selectedLocation = $('#dropDownIdOne :selected').text();

   if(selectedRes === "Palm court dummy 33 more street"){
   	$('.displayAmount').css('background-color', 'orange');
            $('.displayAmount').html('Your fee is R50 only');
      }  
    else if(selectedRes === ""){
    	$('.displayAmount').css('background-color', 'orange');
      	 $('.displayAmount').html('Please select your residence name and shop you want to buy goods from');
      } else{
      		$('.displayAmount').css('background-color', 'orange');
      	  $('.displayAmount').html('Your fee is R40 only');
      }
   	
   });
  

 });
 
</script>


   </body>
</html>