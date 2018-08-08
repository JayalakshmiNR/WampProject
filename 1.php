<!DOCTYPE html>
<html>
<head>
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;
background-color:crimson;
padding-top:100;
}
footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}
/* Style the tab */
div.tab {
    float: left;
    border: 1px solid #ccc;
    background-color:lightcoral;
    width: 30%;
    height: 300px;
}

/* Style the buttons inside the tab */
div.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current "tab button" class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 300px;
    background-color:mistyRose;
}
</style>
</head>
<body  >

<p>Click on the buttons inside the tabbed menu:</p>

<div class="tab">
<button class="tablinks" onclick="openCity(event, 'cusine')"id="defaultOpen">Menu Card Display</button>
  
<button class="tablinks" onclick="openCity(event, 'lunch')" >Lunch Combo</button>
  <button class="tablinks" onclick="openCity(event, 'biryani')">Party with Biryani</button>
  </div>

<div id="lunch" class="tabcontent">
  <form action="action2.php" name="myf" onsubmit="return validate()" method="POST">
Lunch Combo :<br>
<select name="Lunch Combo">
    <option value="Veg Lunch Combo">Veg Lunch Combo</option>
    <option value="Non Veg Lunch Combo">Non Veg Lunch Combo</option>
    </select>
  
  <input type="text" name="lunchcombo">
  <br>
  Quantity:<br>
  <input type="number" name="quantity"><br>
 <input type="submit" name="insert" value="Order">
</form>
</div>

<div id="biryani" class="tabcontent">
  <form action="action3.php" method="POST">
Biryani:<br>
  <input type="text" name="lunchcombo">
  <br>
  Quantity:<br>
  <input type="number" name="quantity"><br>
 <input type="submit" name="insert" value="Order">
</form>
  
</div>

<div id="cusine" class="tabcontent">
  <h3>Menu </h3>
<pre>
<h3>Biryani        Rate       Lunch combo     Rate </h3>
Veg Biryani       110       Veg Lunch Combo       180
Egg Biryani       150       Non veg Lunch Combo   200
Chicken Biryani   150
Mutton Biryani    150
</pre>
</div>
<center>
<img src="H:\New folder (4)\restaurant.jpg" height="400" width="80%">
</center>
<div class="container">
<footer>
  <p>Posted by: Jayalakshmi</p>
  <p>Contact information: <a href="mailto:someone@example.com">jayalakshmi.nr.28@gmail.com</a>.</p>
</footer>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
function validate()
{
var a= document.forms["myf"]["quantity"].value;
var pat=/^[0-9]+$/;
if(x==""|| !pat.test(x))
{
alert("wtf");
}
}
 

</script>
     
</body>
</html> 
