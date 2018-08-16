<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
   <link rel="stylesheet" type="text/css" href="style.css">
	 
   <link rel="stylesheet" type="text/css" href="new.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <link href='https://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Neucha' rel='stylesheet' type='text/css'>




   <script type="text/javascript">
     
     var responsiveSlider = function(){
  
  var slider = document.getElementById("slider");
  var sliderWidth = slider.offsetWidth;
  var slideList = document.getElementById("sliderWrap");
  var items = slideList.querySelectorAll("li").length;
  
  var count = 0;
  
  var num = document.getElementById("num");
  slideNums = num.querySelectorAll("div");
  
  var prev = document.getElementById("prev");
  var next = document.getElementById("next");
  
  var addColor = function(pos){
    slideNums[pos].style.boxShadow = "0 0 10px 2px rgb(196, 253, 255)";
    slideNums[pos].style.background = "#fff";
  }
  
  var removeColor = function(pos){
    slideNums[pos].style.boxShadow = "0 0 10px 2px transparent";
    slideNums[pos].style.background = "rgba(255, 255, 255, .3)";
  }
  
  addColor(0);
  
  slideNums[0].addEventListener("click", function(){
    removeColor(count);
    count = 0;
    addColor(count);
    slideList.style.left = "0px";
  });
  slideNums[1].addEventListener("click", function(){
    removeColor(count);
    count = 1;
    addColor(count);
    slideList.style.left = "-" + count * sliderWidth + "px";
  });
  slideNums[2].addEventListener("click", function(){
    removeColor(count);
    count = 2;
    addColor(count);
    slideList.style.left = "-" + count * sliderWidth + "px";
  });
  slideNums[3].addEventListener("click", function(){
    removeColor(count);
    count = 3;
    addColor(count);
    slideList.style.left = "-" + count * sliderWidth + "px";
  });
  slideNums[4].addEventListener("click", function(){
    removeColor(count);
    count = 4;
    addColor(count);
    slideList.style.left = "-" + count * sliderWidth + "px";
  });
  
  window.addEventListener("resize", function(){
    sliderWidth = slider.offsetWidth;
    slideList.style.left = "-" + count * sliderWidth + "px";
  });
  
  var prevSlide = function(){
    removeColor(count);
    if(!count) count = items - 1;
    else count--;
    addColor(count);
    slideList.style.left = "-" + count * sliderWidth + "px";
  }
  
  var nextSlide = function(){
    removeColor(count);
    if(count == items - 1) count = 0;
    else count++;
    addColor(count);
    slideList.style.left =  "-" + count * sliderWidth + "px";
  }
 
  next.addEventListener("click", function(){
    nextSlide();
  }); 
 
  prev.addEventListener("click", function(){
    prevSlide();
  });
  
  setInterval(function(){
    nextSlide();
  }, 8000);
}

window.onload = function(){
  responsiveSlider();
}
   </script>

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
 
<div id="slider">
  <ul id="sliderWrap">
    <li > <p class="slide-text">Hi there !<br> Welcome to Sendus <br> <a href="booking.php"><button>Make a booking</button></a></p></li>
    <li ><p class="slide-text">We Deliver goods to your door</p></li>
    <li ><p class="slide-text">Interested? Make a booking now!</p></li>
    <li ><p class="slide-text">Real change that delivers</p></li>
    <li><p class="slide-text">By Tonha View</p></li>
  </ul> 
  <a href="#" id="prev">&#171;</a>
  <a href="#" id="next">&#187;</a>
  <div id="num">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
  <div id="lbar"></div>
  <div id="pbar"></div>
</div>





<!--
  <div class="message">
      <h1>The best for the rest</h1>
     <p>This application assist students to send drivers to various shops at a low price. Students at times will be busy with school work and they can not walk to far away shops. Sendus app helps to connect drivers to students who stay in residences. A student can book a driver to buy as many groceries as one can.</p>

  </div>-->

<h4 class="small-heading">The best for the rest</h4>


<div class="img">
    <div class="row">
      <div class="column">
    <a href="booking.php"><img src="images/student.png" alt="Snow" style="width:80%"></a> 
        <p>Student</p>
      </div>

      <div class="column">
      <a href="driver.php"><img src="images/driver.jpg" alt="Forest" style="width:80%"></a>
        <p>Driver</p>
      </div>

      <div class="column">
        <a href="admin.php"><img src="images/admin1.jpg" alt="Mountains" style="width:80%"></a> 
        <p>Administrator</p>   
      </div>
    </div>
</div>




    <footer class="footer-distributed">

      <div class="footer-right">

        <a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
        <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-github"></i></a>

      </div>

      <div class="footer-left">

        <p class="footer-links">
          <a class="link-1" href="landing.php">Home</a>

          <a href="landing.php">Blog</a>

          <a href="fee.php">Pricing</a>

          <a href="#">About</a>

          <a href="#">Faq</a>

          <a href="#">Contact</a>
        </p>

        <p>SendUs by Tonha View &copy; 2018</p>
      </div>

    </footer>






<script type="text/javascript" src="jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="senduss.js"></script>




</body>
</html>

