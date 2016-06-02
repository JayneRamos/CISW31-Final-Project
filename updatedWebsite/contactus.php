
<?php
  require('header.php');
?>
  <!-- page content -->
<div class="container">


<?php
	if(!empty($errors)){
		echo "<p class='err'>".nl2br($errors)."</p>";
	}
?>
<div id='contact_form_errorloc' class='err'></div>
	<form method="POST" name="contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"> 
<p>
	<br />
	<label for='name'>Name: * </label> &nbsp;
	<input type="text" name="name" value='<?php echo htmlentities($name) ?>'>
</p>
<p>
	<label for='email'>Email: * </label> &nbsp;
	<input type="text" name="email" value='<?php echo htmlentities($visitor_email) ?>'>
</p>
<p>
	<label for='message'>Message:</label> <br>
	
<textarea name="message" rows=8 cols=50>

<?php
	echo htmlentities($user_message)
?>
</textarea>
</p>

<p>
	<img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' ><br />
	<label for='message'>Enter the code above here :</label><br>
	<input id="6_letters_code" name="6_letters_code" type="text"><br>
	<small>Can't read the image?<a href='javascript: refreshCaptcha();'>click here</a> to refresh</small>
</p>

<input type="submit" value="Submit" name='submit'> &nbsp;
<input type="reset" value="Clear Form">
</form>

<script language="JavaScript">
// Code for validating the form
// Visit http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
// for details
var frmvalidator  = new Validator("contact_form");
//remove the following two lines if you like error message box popups
frmvalidator.EnableOnPageErrorDisplaySingleBox();
frmvalidator.EnableMsgsTogether();

frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

<script language='JavaScript' type='text/javascript'>
function refreshCaptcha()
{
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<div class = "callCenter">
	<img src="images/ID-10072056.png" alt="image Call Center Girls courtesy of David Castillo at FreeDigitalPhotos.net" />
</div>
</div>



<?php
  require('footer.php');
?>