<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles.css" type="text/css"/>

<title>West Church | Home</title>

<style>
.homeicons {
	position:relative;
	height:800px;
}
.icontainer {
	width:30%;
	margin-left:3%;
	float:left;
	position:relative;
	text-align:center;
	text-decoration:none;
}

.icontainer img {
	width:100%;
	border-radius:15px;
	height:300px;
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
	text-align:center;
	text-decoration:none;
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
	text-align:center;
	text-decoration:none;

	}
	}
</style>
</head>

<body>
<div class="wrapper">

    <div class="header">
    <?php include "fullHeader3.html";?>
    </div> <!--Close Div Header -->

<div class="main">
	<?php include "carousel.html";?>
	<div class="homeicons">
            <a href="#" class="icontainer">
            <h1>News</h1>
            <img src="images/news1.jpg" /> 
            </a>
            
            <a href="#" class="icontainer">
            <h1>Calendar</h1>
            <img src="images/calendar1.jpg" /> 
            </a>
            
            <a href="#" class="icontainer">
            <h1>Sermons</h1>
            <img src="images/sermon1.jpg" /> 
            </a>
            
            <a href="#" class="icontainer">
            <h1>Find Us</h1>
            <img src="images/map.png" /> 
            </a>
   		</div>
        <div class="footer">
        <?php include 'footer3.php';?>      
        </div> <!--Close Div footer -->
</div> <!--Close Div main -->
</div> <!--Close Div Wrapper -->
</body>
</html>