<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>West Church | Home</title>

<style>
html {
  height: 100%;
  box-sizing: border-box;
}
body {margin:0px;}
.mySlides {display:none;
	width:100%; 	
	max-height:600px;
	margin-top:20px;
	}

.carousel {
	width:75%;
	margin:auto;
	max-height:700px;
	margin-top:20px;
}
.carousel img {
	max-height:600px:
	width:100%;
}	

.buttons {text-align:center;}

.home {
	width: 100%;
	float:left;
	}	
a {
	text-decoration:none;
}
	
h1 {
	font-family:Arial, Helvetica, sans-serif;
	font-weight:bold;
	text-align:centre;
	color:black;
}
	
.icontainer {
	width:30%;
	margin-left:3%;
	float:left;
}

.icontainer img {
	width:100%;
	border-radius:15px;
}
.clearfix:after{
	content: "";
	display:table;
	clear: both;
}

.clearfix:after{
	content: "";
	display:table;
	clear: both;
}

@media only screen and (max-width: 800px){
	.icontainer {
	width:45%;
	margin-left: 5%;
	float:left;
		}
.clearfix:after{
	content: "";
	display:table;
	clear: both;
}
	}
	
@media only screen and (max-width: 450px){
	.icontainer {
	width:100%;
	margin:0px;
	}
	}
	

</style>

</head>

<body>
<?php include 'header.php';?>
<?php include 'navigationCopy.html';?>

<br />

<body>

<div class="carousel" >
  <img class="mySlides" src="image2.jpg" style="margin-top:20px;">
  <img class="mySlides" src="image3.jpg">
  <img class="mySlides" src="image4.jpg">
</div>



<a href="#" class="icontainer">
<h1 class="buttons">News</h1>
<img src="news1.jpg" /> 
</a>

<a href="#" class="icontainer">
<h1 class="buttons">Calendar</h1>
<img src="calendar1.jpg" /> 
</a>

<a href="#" class="icontainer">
<h1 class="buttons">Sermons</h1>
<img src="sermon1.jpg" /> 
</a>

<a href="#" class="icontainer">
<h1 class="buttons">Find Us</h1>
<img src="map.png" /> 
</a>

<footer>
 <h1>Services: 11.00 am and 5.00 pm</h1>
 <h2>15-19 Ballymoney Road, Ballymena, Tel: 028 2564 8327</h2>
</footer>
<script>
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
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>
</body>
</html>
