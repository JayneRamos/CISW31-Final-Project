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
	
	<link rel="stylesheet" type="text/css" href="css/main.css">


</head>
<body class="siteimage" background = "images/straberry_mitten.jpg" width="100%">

<!-- menu -->

<table class="menu" width="100%" bgcolor="#e8031b" cellpadding="4" cellspacing="4">
	<tr >
		<td width="25%">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=index.php>Home</a></span>
		</td>
		<td width="25%">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=products.php>Products</a></span>
		</td>
		<td width="25%">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=aboutus.php>About Us</a></span>
		</td>
		<td width="25%">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=cart.php>Shopping Cart</a></span>
		</td>
	</tr>
</table>

<!-- 
	Page Header Spaceing. Reserves a visible area for the company logo  and slideshow 
--!>

<table width="100%" height="368">
	<td width="55%"></td>
	<td width="45%">
	<a href="javascript:gotoshow()"><img src="food1.jpg" name="slide" border=0 width=300 height=275></a>
		<script>
		<!--

		//configure the paths of the images, plus corresponding target links
		slideshowimages("img/01.jpg","img/02.jpg","img/03.jpg","img/04.jpg","img/05.jpg","img/06.jpg","img/07.jpg","img/08.jpg")

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
</table>