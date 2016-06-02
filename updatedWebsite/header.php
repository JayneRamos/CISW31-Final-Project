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

<!-- Contact Us --!>

<?php 
$your_email ='sookie@strawberrymitten.com';// <<=== update to your email address

session_start();
$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';

if(isset($_POST['submit']))
{
	
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email))
	{
		$errors .= "\n Name and Email are required fields. ";	
	}
	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}
	
	if(empty($errors))
	{
		//send the email
		$to = $your_email;
		$subject="New form submission";
		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
		
		$body = "A user  $name submitted the contact form:\n".
		"Name: $name\n".
		"Email: $visitor_email \n".
		"Message: \n ".
		"$user_message\n".
		"IP: $ip\n";	
		
		$headers = "From: $from \r\n";
		$headers .= "Reply-To: $visitor_email \r\n";
		
		mail($to, $subject, $body,$headers);
		
		header('Location: thankyou.php');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
	<title>Strawberry Mitten</title>
	
	<meta name="Developers" content="">
	
<!--  Internal and external links to css properties --!>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	
	<link rel="stylesheet" type="text/js" href="js/bootstrap.js">
	<link rel="stylesheet" type="text/js" href="js/jquery.js">
	<link rel="stylesheet" type="text/js" href="js/gen_validatorv31.js">


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
		<td width="20%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="Strawberry Mitten" height="20" width="20" />
			<span class="menu"><a href=index.php>Home</a></span>
		</td>
		<td width="20%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=products.php>Products</a></span>
		</td>
		<td width="20%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=aboutus.php>About Us</a></span>
		</td>
		<td width="20%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=cart.php>Shopping Cart</a></span>
		</td>
		<td width="20%" bgcolor="#e8031b">
			<img src="images/strawberriy-exotic-fruits.png" alt="" height="20" width="20" />
			<span class="menu"><a href=contactus.php>Contact Us</a></span>
		</td>
	</tr>

</table>
<div>