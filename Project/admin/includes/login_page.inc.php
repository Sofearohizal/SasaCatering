<head>
<style>
	.page{
		margin-top:120px;
	}
	.button{
		background-color:#5025A2;
		color:white;
		width:150px;
		border-radius:5px;
		margin-top:15px;
	}
	.email{
		width:250px;
		margin-left:50px;
	

	}
	.pw{
		margin-left:82px;
		width:250px;


	}
	.hihi{

		font-size:18px;

	}
	.h1{
		color:#5025A2;
		font-size:38px;
		font-weight:bold;
		margin-bottom:50px;
	}
	</style>
</head>

<div class='page'>
<form action="login.php" method="post">
<center> <fieldset  style="width: 500px;height:500px;font-family:Noto Sans;">
	<p class='hihi'> Welcome to SASA administrator page, please login or register to get full accesss to administrator page </p>
	<h1 class='h1'>Login</h1>
	<p>Email Address: <input type="text" name="email" size="20" maxlength="60" class='email' /> </p>
	<p>Password: <input type="password" name="pass" size="20" maxlength="20" class='pw'/></p>
	<p><input type="submit" name="submit" value="Login" class = 'button'/></p>

	<?php 
$page_title = 'Login';
include ('includes/header.html');


// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<font color="red"><h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}?>
</form>
</div>
</fieldset> </center>
<?php include ('includes/footer.html'); ?>