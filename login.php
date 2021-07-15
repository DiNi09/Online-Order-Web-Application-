<?php

require_once './Includes/header.php' ?>


<div class="mainloginclass">
<form class="form-horizontal" action="BackEnd/login/userlogin.php" method="post" id="loginFrm">

	<h1>L o g i n</h1>
	<input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail address">
	<input type="password" name="txtPassword" id="txtPassword" placeholder="Password">
    
	<input type="submit" name="btnLogin" value="Login">
	<a href="#">Forgot password?</a><br>
	<a href="./register.php">Create new account</a>
</form>
</div>
<?php require_once './Includes/footer.php' ?>