<!DOCTYPE html>
<html>
<head>
<style>
* {
box-sizing: border-box
}
body {
font-family: "Lato", sans-serif;
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

.reservation{
    background-color: lightgrey;
    width: 300px;
    border: 25px crimson;
    padding: 25px;
    margin: 25px;
}
.month {
    padding: 70px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.month .prev {
    float: left;
    padding-top: 10px;
}

.month .next {
    float: right;
    padding-top: 10px;
}

.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color: #ddd;
}

.weekdays li {
    display: inline-block;
    width: 13.6%;
    color: #666;
    text-align: center;
}

.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
    .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
    .weekdays li, .days li {width: 12.5%;}
    .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
    .weekdays li, .days li {width: 12.2%;}
}
</style>
<script type="text/javascript">
function validate()
{
var a= document.forms["myf"]["name"].value;
var pat=/^[a-z]+$/;
if(x==""|| !pat.test(x))
{
alert("wtf");
}
}

</script>
</head>
<body>
<center>
<h1>Table Reservation</h1>
</center>
<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      October<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>


<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li><span class="active">3</span></li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
<center>
<div class="reservation" >
  <form action="action4.php" name="myf" onsubmit="return validate()" method="POST">
 Table Reservation<br><br>
 Name of Customer:  
<input type="text" name="name">
  <br>
  Number of Tables:<br>
  <input type="number" name="notable"><br>
  Reservation for:
<input type="text" name="rfor">
 <input type="submit" name="insert" value="Reserve">
</form>
  
</div>
</center>
<footer>
  <p>Posted by: Jayalakshmi</p>
  <p>Contact information: <a href="mailto:someone@example.com">jayalakshmi.nr.28@gmail.com</a>.</p>
</footer>

</body>

</html>
