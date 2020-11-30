<!DOCTYPE html>
<html>
<head>
	<title>REGISTRATION</title>
	<link rel="stylesheet" type="text/css" href="registration.css">

</head>
<body>
	<br>
	<br>
	<br>
	<div class="register">

		<form method="POST"  action="registration.php" onsubmit="validate();">
			<p class="dotted"></p>

			<h2>REGISTER</h2><br><br>
			<label> First Name :</label><br>
			<input type="text" name="fname" id="name"
             placeholder="Enter Your First Name" required><br><br>

			<label> Last Name :</label><br>
			<input type="text" name="lname" id="name"
             placeholder="Enter Your Last Name" required><br><br>

            <label>Gender :</label><br>
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" id="male" name="gender" value="male" required>
  				<label for="male">Male</label>&nbsp;&nbsp;&nbsp;
  				<input type="radio" id="female" name="gender" value="female" required>
  				<label for="female">Female</label>&nbsp;&nbsp;
            <br><br>

            <label>Date of birth :&nbsp;&nbsp;&nbsp;</label>
		  	<input class="date" type ="date" name="dob" id ="dte"required><br><br>

			<label> Email :</label><br>
			<input type="email" name="email" id="name"
             placeholder="Enter Your Email" required><br><br>        

             <label> Country :</label><br>
			<select id="country" name="country">
				<option>Country</option>
				<option>Australia</option>
				<option>Canada</option>
				<option>China</option>
				<option>France</option>
				<option>India</option>
				<option>Japan</option>
				<option>Malaysia</option>
				<option>Maldives</option>
				<option>New Zealand</option>
				<option>Pakistan</option>
				<option>South Korea</option>
				<option>Sri Lanka</option>
				<option>UK</option>
				<option>USA</option>
			</select><br><br>

			<label> Contact Number :</label><br>
			<select id="ph">
				<option>+  </option>
				<option>+61</option>
				<option>+1</option>
				<option>+86</option>
				<option>+33</option>
				<option>+91</option>
				<option>+81</option>
				<option>+60</option>
				<option>+96</option>
				<option>+64</option>
				<option>+92</option>
				<option>+82</option>
				<option>+94</option>
				<option>+44</option>
				<option>+1</option>
			</select>

			<input type="number" name="contactNo" id="num"
             placeholder="Enter Your Contact Number" required><br><br>    
             
			<label> Password :</label><br>
			<input type="password" name="pass" id="name"
             placeholder="Enter Your Password" required><br><br>
			
			<label> Re-enter password :</label><br>
			<input type="password" name="pass1" id="name"
             placeholder="Enter Your Password" required><br><br>

             <input type="checkbox"  name="" required>&nbsp;<label>I agree to these terms and conditions.</label><br><br>         
   
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn">Submit</button><br><br>

             <a href="http://localhost/LOGIN%20PAGE/login.php">Already have an account?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		  	<a href="Assignment-NAV.html">Cancel</a><br><br>

		  	<p class="dotted"></p>
		  	
		</form>
	</div>

	<script type="text/javascript">
		

	function validate(){

	var contact = document.registrationForm.contactNo.value;
	var Password = document.registrationForm.pass.value;
	var confirmpass = document.registrationForm.pass1.value;

	if (isNaN(contact) || contact.length !=10) 
	{
		alert("Enter a valid phone number!");
		return false;
	}

	if (Password != confirmpass) 
	{
		alert("Password don't match");
		return false;
	}	
}		
	</script>


</body>
</html>
