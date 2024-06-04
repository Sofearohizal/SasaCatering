<style>
	.page{
		margin-top:120px;
	}
	</style>


<div class='page' style="font-family:Noto Sans";>
<?php 
// The user is redirected here from login.php.

session_start(); // Start the session.

// If no session value is present, redirect the user:
if (!isset($_SESSION['user_id'])) {

	// Need the functions:
	require ('includes/login_functions.inc.php');
	redirect_user();	

}

// Set the page title and include the HTML header:
$page_title = 'Logged In!';
include ('includes/header1.html');

// Print a customized message:
echo "<h1>Logged In!</h1>
<p>You are now logged in, {$_SESSION['first_name']}!</p>";
//<p><a href=\"logout.php\">Logout</a></p>";

include ('includes/footer.html');
?>
</div>