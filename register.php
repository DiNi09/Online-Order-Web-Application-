 <!--this for the css -->
 <link rel="stylesheet" href="./custom/css/style.css">

 <div class="mainregclass">
 	<form action="./BackEnd/register/adduser.php" method="POST"  enctype="multipart/form-data" style="margin-left: auto; margin-right: auto;">
 		<img src="./assets/img/register.png"  >
 		<input type="text" name="txtFname" id="txtFname" placeholder="First name" autocomplete="on" required>
 		<input type="text" name="txtLname" id="txtLname" placeholder="Last name" autocomplete="on" required>
 		<input type="text" name="txtEmail" id="txtEmail" placeholder="E-mail address" autocomplete="on" required>
 		<input type="text" name="txtCnumber" id="txtCnumber" maxlength="10" placeholder="Contact number" autocomplete="on" required>
 		<input type="text" name="txtAddress" id="txtAddress" placeholder="Address" autocomplete="on" required>
 		<input type="password" name="txtPassword" id="txtPassword" placeholder="Create a password" required>
 		
   

 		<p>Already have an account?<a href="login.php"> Login</a></p>
 		<input type="submit" name="btnRegister" value="Register" onclick="Validate()">
 		<input type="reset" name="btnReset" value="Clear">
 	<br><br><br><br><br><br>
	</form>

 </div>

 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

 <script src="./custom/js/register.js"></script>
 <?php require_once './Includes/footer.php' ?>