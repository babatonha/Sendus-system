<?php

//to make sure that only logged in users access it
include('functions.php');
if (!isLoggedIn()){
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
} 

if (!isStudent()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}



//connecting to a database

$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
  {
     echo "not connected";
  }

  if(!mysqli_select_db($con,'senduss'))
  {
    echo "database not selected";
  } 



  if(isset($_POST['submit'])){

      $name = $_POST['name'];
      $phone = $_POST['phone'];
      $item = $_POST['item'];
      $residenceAddress = $_POST['residenceAddress'];
      $shop =$_POST['shop'];
      $shopLocation = $_POST['shopLocation'];

       $sql = "INSERT INTO booking (name, phone, item, residenceAddress, shop, shopLocation) VALUES (  '$name', '$phone', '$item', '$residenceAddress', '$shop', '$shopLocation' )" ;


    

       if(!mysqli_query($con,$sql))
       {
        echo"Not inserted";
       } 

}



if(isset($_POST['delete'])){

$con=mysqli_connect("localhost", "root", "", "senduss");
// Check connection
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

mysqli_query($con,"DELETE FROM booking WHERE id='".$id."'");
mysqli_close($con);
header("Location: booking.php");

  /*mysqli_query($con, "DELETE from booking WHERE phone ='$_POST[phone]'");*/


 /*  
"DELETE FROM booking
      WHERE (id IN ( SELECT id
                  FROM booking WHERE phone = '$_POST[phone]'
                  ORDER BY id ASC LIMIT 1 ))" 
*/
} 





if(isset($_POST['edit'])){

  mysqli_query($con, "UPDATE booking SET  name ='$_POST[name]', phone ='$_POST[phone]', item ='$_POST[item]', residenceAddress ='$_POST[residenceAddress]', 
      shop ='$_POST[shop]', shopLocation ='$_POST[shopLocation]' "); //the where clause need to be eddited


} 


?> 


<!DOCTYPE html>
<html>
<head>
  <title>booking</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

     <!--navigation bar-->
       <ul class="nav">
          <li class="navli"><a class="active" href="landing.php">Home</a></li>
          <li class="navli"><a href="booking.php">Student</a></li>
          <li class="navli"><a href="driver.php">Driver</a></li>
          <li class="navli"><a href="admin/home.php">Admin</a></li>
          <li class="navli"><a href="login.php">Login</a></li>
          <li class="navli"><a href="register.php">Sign up</a></li>
      </ul>
<hr> 


<!--Logged in user details-->
<div>
          <div>
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
            <div>

              <div>
                <?php  if (isset($_SESSION['user_type'])) : ?>
                  <strong><?php echo "Welcome ". $_SESSION['user_type']['username']; ?></strong>

                  <small>
                    <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user_type']['user_type']); ?>)</i> 
                    <br>
                    <a href="index.php?logout='1'" style="color: red;">logout</a>
                  </small>

                <?php endif ?>
              </div>
            </div>
          </div>

          <h1 id="tsotso" class="booking-heading">Make a Booking</h1>


<!-- booking form-->
      <form class="booking-form"  method="post" action="booking.php">

      <div class="input-group">
        <label>Your name</label>
        <input type="text" name="name" class="form-control"  required> <br><br>
     </div>

     <div class="input-group">
        <label>Contact Number</label>
        <input type="text" name="phone" class="form-control"  required> <br><br>
     </div>
      
      <div class="input-group">
        <label>What do you want to buy?</label>
        <input type="text" name="item" class="form-control"  required> <br><br>
     </div>

      <div class="input-group">
        <label>Please enter your Residence address</label>
          <select name="residenceAddress" required="select">
              <option value=""></option>
              <option value="DTL 93 canterbury street">DTL 93 canterbury street</option>
              <option value="Palm cour dummy 33 more street">Palm cour dummy 33 more street</option>
              <option value="New Castle, 22 stevens road">New Castle, 22 stevens road</opton>
           </select> <br><br>
     </div>

     <div class="input-group">
       <label>Enter name of the Shop</label>
       <select name="shop" required="select">
          <option value=""></opton>
          <option value="Spar">Spar</option>
          <option value="Shoprite">Shoprite</option>
          <option value="Checkers">Checkers</option>    
       </select> <br><br>
     </div>

     <div class="input-group">
      <label>Enter Location of the Shop</label>
        <select name="shopLocation" required="select">
          <option value=""></opton>
          <option value="Waterfront">Water Front Mall</option>
          <option value="Gardens">Gardens Mall</option>
          <option value="Century city">Century City Mall</option>   
        </select> <br><br>
     </div>
   
       <div class="all-btns">

          <input class="book" id="submit" type="submit" name="submit" value="Submit">
          
          <a href="fee.php">Check fee</a> 

       </div>       
    </form>
  


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

     <script>
       $(function() {
     


       $('.booking-form .all-btns .book').on('click', function() {

        window.alert("The booking has successfully been submitted!!!!");
             

       });

    });
 </script>

</body>
</html>


