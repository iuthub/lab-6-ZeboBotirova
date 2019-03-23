<?php 

if(isset($_GET["name"]) && ($_GET["name"]!="")){
$name=$_GET["name"];
if (!preg_match("/^[a-zA-Z ]{2,}$/", $name)){
	$nameErr = "It shouldn't contain any number and there should be at least 2 chars";
}
}

if(isset($_GET["email"])&& ($_GET["email"]!="")){
$email = $_GET["email"];
if (!preg_match("/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/", $email)){
	$emailErr = "This is not an email format";
}
}

if(isset($_GET["username"])&& ($_GET["username"]!="")){
$username = $_GET["username"];
if (!preg_match("/\w{5,}/", $username)){
	$usernameErr = "It should contain at least 5 characters";
}
}

if(isset($_GET["password"])&& ($_GET["password"]!="")){
$password = $_GET["password"];
if (!preg_match("/\w{8,}/", $password)){
	$passwordErr = "It should contain at least 8 characters";
}
}

if(isset($_GET["confirm_password"])&& ($_GET["confirm_password"]!="")){
$confirm_password = $_GET["confirm_password"];
if (!($password==$confirm_password)){
	$confirm_passwordErr = "It should match the given password";
}
}

if(isset($_GET["birthday"])&& ($_GET["birthday"]!="")){
$birthday = $_GET["birthday"];
if (!preg_match("/^[0-3][0-9]\.[0-1][0-9]\.\d{4}$/", $birthday)){
	$birthdayErr = "It should be written in format dd.MM.yyyy";
}
}

if(isset($_GET["gender"])&& ($_GET["gender"]!="")){
$gender = $_GET["gender"];
if (!preg_match("/^(?:male|female)$/", $gender)){
	$genderErr = "It should be male or female";
}
}

if(isset($_GET["marital_status"]) && ($_GET["marital_status"]!="")){
$marital_status=$_GET["marital_status"];
if (!preg_match("/^(?:single|married|divorced| widowed)$/", $marital_status)){
	$marital_statusErr = "Here should be single, married, divorced or widowed";
}
}


if(isset($_GET["postal"])&& ($_GET["postal"]!="")){
$postal = $_GET["postal"];
if (!preg_match("/^\d{6}$/", $postal)){
	$postalErr = "It should follow a six digit format";
}
}

if(isset($_GET["home_phone"])&& ($_GET["home_phone"]!="")){
$home_phone = $_GET["home_phone"];
if (!preg_match("/^\d{9}$/", $home_phone)){
	$home_phoneErr = "It should follow a 9 digit format";
}
}

if(isset($_GET["mobile_phone"])&& ($_GET["mobile_phone"]!="")){
$mobile_phone = $_GET["mobile_phone"];
if (!preg_match("/^\d{9}$/", $mobile_phone)){
	$mobile_phoneErr = "It should follow a 9 digit format";
}
}

if(isset($_GET["credit_card"])&& ($_GET["credit_card"]!="")){
$credit_card = $_GET["credit_card"];
if (!preg_match("/^\d{16}$/", $credit_card)){
	$credit_cardErr = "It should follow a 16 digit format";
}
}

if(isset($_GET["expiry_date"])&&($_GET["expiry_date"]!="")){
	$expiry_date=$_GET["expiry_date"];
	if(!preg_match("/^[0-3][0-9]\.[0-1][0-9]\.d{4}$/", $expiry_date)){
		$expiry_dateErr=" It should be in format dd.MM.yyyy";
	}
}

if (isset($_GET["salary"])&&($_GET["salary"]!="")) {
	$salary=$_GET["salary"];
	if (!preg_match("/^[a-zA-Z]{3}\.d{5,}/", $salary)) {
		$salaryErr =" It should be in format UZS 2000000";
	}
}

if (isset($_GET["url"])&&($_GET["url"]!="")) {
	$url=$_GET["url"];
	if (!preg_match("/^[a-zA-Z]{4}\...[a-zA-Z]d{5,}\.[a-zA-Z]{2,3}/", $url)) {
		$urlErr =" It should be in URL format";
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
	<form action="" method="GET">
		<dl>
			<dt><strong>Name</strong></dt>
			<dd>
				<input type="text" name="name" required="Name is required">
				<?php
				if(isset($nameErr)){
			    echo $nameErr;}?>
			   
			</dd>

			<dt><strong>E-mail</strong></dt>
			<dd>
				<input type="text" name="email" required="e-mail is required">
						<?php 
			if(isset($emailErr)){
			echo $emailErr;}?>
			
			</dd>

			<dt><strong>Username</strong></dt>
			<dd>
				<input type="text" name="username" required="Username is required">
				<?php 
			if(isset($usernameErr)){
			echo ($usernameErr);} 
			?>
			</dd>

			<dt><strong>Password</strong></dt>
			<dd>
				<input type="text" name="password" required="Password is required">
				<?php 
			if(isset($passwordErr)){
			echo ($passwordErr);} 
			?>
			</dd>

			<dt><strong>Confirm Password</strong></dt>
			<dd>
				<input type="text" name="confirm_password" required="Confirmation is required">
				<?php 
			if(isset($confirm_passwordErr)){
			echo ($confirm_passwordErr);} 
			?>
			</dd>

			<dt><strong>Date of Birth</strong></dt>
			<dd>
				<input type="text" name="birthday">
				<?php 
			if(isset($birthdayErr)){
			echo ($birthdayErr);} 
			?>
			</dd>

			<dt><strong>Gender</strong></dt>
			<dd>
				<input type="text" name="gender">
				<?php 
			if(isset($genderErr)){
			echo ($genderErr);} 
			?>
			</dd>

			<dt><strong>Marital Status</strong></dt>
			<dd>
				<input type="text" name="marital_status">
					<?php 
			if(isset($marital_statusErr)){
			echo ($marital_statusErr);} 
			?>
			</dd>
			   
			   <dt><strong>Address</strong></dt>
			<dd>
				<input type="text" name="address" required="Address is required">
			</dd>

			<dt><strong>City</strong></dt>
			<dd>
				<input type="text" name="city" required="City is required">
			</dd>

			<dt><strong>Postal Code</strong></dt>
			<dd>
				<input type="text" name="postal" required="Postal is required">
				<?php 
			if(isset($postalErr)){
			echo ($postalErr);} 
			?>
			</dd>

			<dt><strong>Home Phone</strong></dt>
			<dd>
				<input type="text" name="home_phone" required="required">
					<?php
				if(isset($home_phoneErr)){
			echo ($home_phoneErr);} 
			?>
			</dd>
			
            <dt><strong>Mobile Phone</strong></dt>
			<dd>
				<input type="text" name="mobile_phone" required="required">
					<?php
				if(isset($mobile_phoneErr)){
			echo ($mobile_phoneErr);} 
			?>
			</dd>

			<dt><strong>Credit Card Number</strong></dt>
			<dd>
				<input type="text" name="credit_card" required="required">
				<?php
				if(isset($credit_cardErr)){
					echo ($credit_cardErr);
				}?>
			</dd>
			
			<dt><strong>Credit Card Expiry Date</strong></dt>
			<dd>
				<input type="text" name="expiry_date" required="required">
				<?php
				if(isset($expiry_dateErr))
				{
					echo ($expiry_dateErr);
				}?>
			</dd> 

			<dt><strong>Monthly Salary</strong></dt>
			<dd>
				<input type="text" name="salary" required="required">
				<?php
				if (isset($salaryErr)) {
					echo ($salaryErr);
				}?>
			</dd>
            
            <dt><strong>Web Site URL</strong></dt>
			<dd>
				<input type="text" name="url" required="required">
				<?php
				if (isset($urlErr)) {
					echo ($urlErr);
				}?>
			</dd>
			
			<dt><strong>Overall GPA </strong></dt>
			<dd>
				<input type="text" name="GPA" required="required">
			</dd>
		</dl>
		<br>
		<div>
			<input value="submit" type="submit">
		</div>
	</form>
	</body>
</html>