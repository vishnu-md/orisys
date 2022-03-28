<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>orisys-REG</title>
	<link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
	<div id="bg">
<header>
	<h1>OrisysIndia</h1>
</header>
<h2>Registration form</h2>
<section>
<form name="reg"  id="reg" method="post" action="regval.php">
	Name* <input type="text" name="name" required><br>
	Email* <input type="email" name="email" required palceholder="xyz@gmail.com"><br>
	Password* <input type="password" name="password" required>
	<a id="w1">Must be more than 8 character!</a><br>
	Confirm Password* <input type="password" name="Cpassword" required>
	<a id="w2">Please enter the same password!</a><br><br>
<input class="button" type="submit" onclick="return validate()" name="register" value="Register" >
</form>
	
</section>
</div>
<script >
	function validate() {
	var password=document.reg.password.value;
	var Cpassword=document.reg.Cpassword.value;
	if(password.length < 8) {  
     document.getElementById("w1").style.visibility='visible'; 
     return false;  
  }  
  	if(Cpassword!=password){
		document.getElementById('w2').style.visibility='visible';
		document.reg.Cpassword.focus();
        return false;
	}
	return true;
		
}
</script>
<noscript>Your browser does not support JavaScript!</noscript>

</body>
</html>