<!DOCTYPE HTML>
<html>
<head>

<script language="JavaScript1.1">
<!--

/*
JavaScript Image slideshow:
By JavaScript Kit (www.javascriptkit.com)
Over 200+ free JavaScript here!
*/

var slideimages=new Array()
var slidelinks=new Array()
function slideshowimages(){
for (i=0;i<slideshowimages.arguments.length;i++){
slideimages[i]=new Image()
slideimages[i].src=slideshowimages.arguments[i]
}
}

function slideshowlinks(){
for (i=0;i<slideshowlinks.arguments.length;i++)
slidelinks[i]=slideshowlinks.arguments[i]
}

function gotoshow(){
if (!window.winslide||winslide.closed)
winslide=window.open(slidelinks[whichlink])
else
winslide.location=slidelinks[whichlink]
winslide.focus()
}

//-->
</script>

	<title>Strawberry Mitten</title>
	
	<meta name="Developers" content="">
	
<!--  Internal and external links to css properties --!>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="stylesheet" type="text/js" href="js/bootstrap.js">
	<link rel="stylesheet" type="text/js" href="js/jquery.js">


</head>
<body class="siteimage" background = "images/original.png" width="100%">

<!-- 
	Page Header Spaceing. Reserves a visible area for the company logo  and slideshow 
--!>
<div>
<table width="100%" height="208" background = "images/logo-banner2.png">
	<td width="25%">
	</td>
	<td width="50%">
	<a href="javascript:gotoshow()"><img src="food1.jpg" name="slide" border=0 width=292 height=208></a>
		<script>
		<!--

		//configure the paths of the images, plus corresponding target links
		slideshowimages("specials/01.png","specials/10.png","specials/05.png","specials/17.png","specials/05.png","specials/12.png","specials/25.png","specials/13.png")

		//configure the speed of the slideshow, in miliseconds
		var slideshowspeed=2000

		var whichlink=0
		var whichimage=0
		function slideit(){
		if (!document.images)
		return
		document.images.slide.src=slideimages[whichimage].src
		whichlink=whichimage
		if (whichimage<slideimages.length-1)
		whichimage++
		else
		whichimage=0
		setTimeout("slideit()",slideshowspeed)
		}
		slideit()

		//-->
		</script>
	</td>
	<td width="25%">
	</td>
</table>
</div>

<!-- menu -->
<div>
<table class="menu" width="100%" bgcolor="#e8031b" cellpadding="4" cellspacing="4">
	<tr >
		<td width="25%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=index.php>Home</a></span>
		</td>
		<td width="25%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=products.php>Products</a></span>
		</td>
		<td width="25%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=aboutus.php>About Us</a></span>
		</td>
		<td width="25%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=cart.php>Shopping Cart</a></span>
		</td>
	</tr>
</table>
<div>