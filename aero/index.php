<!DOCTYPE html>
<html>
<head>

<script src='https://www.google.com/recaptcha/api.js'></script>

<title>web-form</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
<style>
    body {
        width: 35em;
        margin: 0 auto;
        font-family: Tahoma, Verdana, Arial, sans-serif;
    }
</style>
</head>
<div>
	<?php
	if(isset($_POST['create']))
	{
		echo 'user submited';
	}
	?>
</div>
<div>
	<form action="academy.php" method="post" style="background-color: rgb(228,243,252)">
		<div style="background-color: rgb(159,181,255)">
		<h1 style="background-color: rgb(159,181,255)" align="center"><font size="15" color="white"> Web - form </font></h1>
		<p style="color: rgb(210,219,227)" align="center">  Fill up the with correct values.</p>
		</div>
	<hr class="mb-3" >
		<div class="container" style="background-color: rgb(225,240,251)">
			<div class="row" style="background-color: rgb(228,243,252)">
				<div class="col-sm-6">

					<label for="name"><b>Surname Name  Patronymic<b></label><br>
					<input class="form control" style="background-color: rgb(236,247,253); color: rgb(87,128,249); font-weight: normal" placeholder="FIO"  type="text" name="name" required >

					<br><label for="phone"><b>phone</b></label><br>
					<input class="form control" style="background-color: rgb(236,247,253); color: rgb(87,128,249); font-weight: normal"placeholder="+78005553535" type="text" name="phone" required>

					<br><label for="email"><b>E-mail</b></label><br>
					<input class="form control" style="background-color: rgb(236,247,253); color: rgb(87,128,249); font-weight: normal"placeholder="____@____.__" type="text" name="email" required>

					<label for="date"><b>birthday</b></label><br>
					<input class="form control" style="background-color: rgb(236,247,253); color: rgb(87,128,249); font-weight: normal" type="date" name="date" required>
				</div>
			</div>
			<hr class="mb-3">
			<p>Comment: <br /><textarea name="message" cols="60" rows="4" style="font-weight: normal"></textarea></p>

			<div class="g-recaptcha" data-sitekey="6LfNXZgUAAAAABXvDxamhMrdfWdDHxvM5kCs9MF-"></div>

			<p><input class="btn btn-primary" name='enter' type='submit'   ></p>
		</div>
	
	</form>
</div>
