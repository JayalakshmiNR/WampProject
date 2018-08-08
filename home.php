<!DOCTYPE html>
<html>
<style>
body {margin:0;}
footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
    background-color: #4CAF50;
    color: white;
}
</style>

<body bgcolor="cadetblue">
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="res.php">Reservation</a>
  <a href="1.php">Place Order</a>
</div>
<center>
 <section class="w3-container w3-center w3-content" style="max-width:600px">
  <h1 class="w3-wide" style="color:crimson;font-family:Comic Sans MS">Welcome to Palm Beach Restaurant</h1>
  <p class="w3-opacity"><i><b>For Biryani Lovers</b></i></p>
  <p class="w3-justify" style="color:crimson;font-family:Trebuchet MS">
For those with pure food indulgence in mind, come next door and 
sate your desires with our ever changing internationally and seasonally inspired small plates.
We love food, lots of different food, just like you.

</p>
</section>
</center>
<!-- Slide Show -->
<section>
<center><br><br>
  <img class="mySlides" src="download.jpg"
  style="width:50%" style="height:25% ">
  <img class="mySlides" src="restaurant.jpg"
  style="width:50%" style="height:25% ">
  <img class="mySlides" src="images.jpg"
  style="width:50%" style="height:25% ">
  <img class="mySlides" src="restaurant44.jpg"
  style="width:50%" style="height:25% ">
</center>
</section>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>
<div class="container">
<footer>
  <p>Posted by: Jayalakshmi</p>
  <p>Contact information: <a href="mailto:someone@example.com">jayalakshmi.nr.28@gmail.com</a>.</p>
</footer>

</body>
</html>

