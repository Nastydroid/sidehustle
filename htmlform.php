<?php
if(isset($_POST['first_name'])){
	$first_name= $_POST['first_name'];
echo $first_name . '  ';
}

if(isset($_POST['last_name'])){
	$last_name= $_POST['last_name'];
echo $last_name .' - ';
}

if(isset($_POST['gender'])){
	$gender= $_POST['gender'];
echo $gender . ' - ';
}

if(isset($_POST['email'])){
	$email= $_POST['email'];
echo $email;
}



?>




<html>
<head>
<title>contact me</title>
<style>
	body{
		background-color: powderblue;
	}

	h3{color: green;}
</style>
</head>

<body>
	<h3>Register for the next cohort here .</h3>

<form name='register'  method="POST" autocomplete="off">
	<fieldset><legend> register for next programme</legend>
<p>
	<label for name="first_name">first name</label><br />
	<input type = "text" name= "first_name" placeholder = "enter your first name:"/>

</p>

<p>
	<label for name="last_name">Last Name</label><br />
	<input type = 'text' name= 'last_name' placeholder="enter your last name:"/>
	
</p>

<p>
	
	<label for name="gender">gender</label><br/>
	<input type="radio" value= "female"name="gender"/>female
	<input type="radio" value="male" name="gender"> male
	<input type="radio" value="others" name="gender">others
</p>

<p>
	<label for name="email">Email address</label><br/>
	<input type="text" name="email" placeholder="enter your email:"required/>
	
</p>


<p>
	<input type="checkbox" name="check" required/>by clicking this box it shows you have accepted the terms and conditions
	
</p>

	<button type="submit">SUBMIT </button> </fieldset>

</form>
</body>
</html>
