<?php

//to make sure that only logged in users access it
include('functions.php');
if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}

if (!isDriver()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Driver</title>
  <link rel="stylesheet" type="text/css" href="new.css">
	<link rel="stylesheet" type="text/css" href="style.css">
  
</head>
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
      
	

<!--Logged in user details-->
<div>
          <div class="#">
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
              <div class="error success" >
                <h3>
                  <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                  ?>
                </h3>
              </div>
            <?php endif ?>
            <!-- logged in user information -->
            <div class="#">

              <div>
                <?php  if (isset($_SESSION['user_type'])) : ?>
                  <strong><?php  echo "Welcome ". $_SESSION['user_type']['username']; ?></strong>

                  <small>
                    <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user_type']['user_type']); ?>)</i> 
                    <br>
                    <a href="index.php?logout='1'" style="color: red;">logout</a>
                  </small>

                <?php endif ?>
              </div>
            </div>
          </div>

	<h1 class="driver_h1">Respond to Requests</h1>

	<!--<table>
		<thead>
			<tr>
        <th>Name</th>
        <th>Phone Number</th>
				<th>Item</th>
				<th>Residence Address</th>
				<th>Shop</th>
				<th>Location of Shop</th>
				<th>Action</th>

			</tr>
		</thead>
		
-->
    	<?php  
        $con=mysqli_connect("localhost", "root", "", "senduss");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        $result = mysqli_query($con,"SELECT * FROM booking");

        echo "<table border='1'>
        <tr>
        <th>Name</th>
        <th>Phone Number</th>
         <th>Item</th>
          <th>Address</th>
           <th>Shop</th>
            <th>Shop Location</th>
            <th>Action</th>
        </tr>";

        while($row = mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["phone"] . "</td>";
        echo "<td>" . $row["item"] . "</td>";
        echo "<td>" . $row["residenceAddress"] . "</td>";
        echo "<td>" . $row["shop"]. "</td>";
        echo "<td>" . $row["shopLocation"]. "</td>";
        echo "<td> <button class='deliver'><a href=\"delete.php?id=".$row['id']."\">Deliver</a></button></td>";
        echo "</tr>";
        }
        echo "</table>";

        mysqli_close($con);
        

    /*
    

				$conn = mysqli_connect("localhost", "root", "", "senduss");
				if($conn-> connect_error){
					die("Connection failed:". $conn-> connect_error);
				}

          		$sql = "SELECT name, phone, item, residenceAddress, shop, shopLocation, from booking ";

          		$result = $conn-> query($sql);

          		if($result-> num_rows > 0){
          			while($row = $result-> fetch_assoc()){
          				echo "<tr><td>". $row["name"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["item"] . "</td><td>". $row["residenceAddress"] . "</td><td>" . $row["shop"] . "</td><td>" . $row["shopLocation"] . "</td><td>". "<button>Deliver</button>". "</td></tr>" ;
          			}
          			echo "</table>";
          		}
          		else{
          			echo "0 result";
          		}

          		$conn-> close();  */
			?>

	</table>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script >
    $(function() {
     


       $('button').on('click', function() {

        if (confirm("Are you sure you want to deliver to this person?")) {
    txt = "You pressed OK!";
} else {
    txt = "You pressed Cancel!";
}
             

       });

    });
  </script>

</body>
</html>