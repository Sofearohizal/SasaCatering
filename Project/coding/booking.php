<?php
include ('includes/header.html');
?>
<link rel="stylesheet" href="includes/booking.css">
<body>

<form action="booking.php" method="post">
<div class = "background">
    <div class = "event_detail">
        <link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>
        <fieldset  style="width: 1000px;">
        <p class="event_detail_title"><b>Event Details</b></p>
        <div class = "left_left">
            <p class="element1">Occasion</p> 
            <p class="element2">Date            
            <p class="element3">Time
            <p class="element4">Event Address</p>
            <input class ="input4" type="text" name="address" size="15" maxlength="40" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>" /></p>
            <?php 
                $location = array (1 => 'Kuala Lumpur', 'Selangor');
                echo '<select name="location" class = "input5">';
                foreach ($location as $key => $value) {
                echo "<option value=\"$value\">$value</option>\n";
                }
                echo '</select> </p>';
                ?> 
        </div>
        <div class = "left_right">
            <?php 
                $oc = array (1 => 'Wedding', 'Birthday', 'Party');
                echo '<select name="occasion" class = "input1">';
                foreach ($oc as $key => $value) {
                echo "<option value=\"$value\">$value</option>\n";
                }
                echo '</select> </p>';
                ?> 
                <input class ="input2" type="date" name="date" size="20" maxlength="60" value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>"  /></p>
                <input class ="input3" type="time" name="time" size="15" maxlength="40" value="<?php if (isset($_POST['time'])) echo $_POST['time']; ?>" /></p>

        </div>
        
        <div class = "right_left">
            <p class="element5">Budget/Pax</p>
            <p class="element6">Number/Pax</p>
        </div>
        <div class = "right_right">
                <input class ="input6" type="double" name="budget" size="20" maxlength="60" value="<?php if (isset($_POST['budget'])) echo $_POST['budget']; ?>"  /></p>
                <input class ="input7" type="int" name="number" size="20" maxlength="60" value="<?php if (isset($_POST['number'])) echo $_POST['number']; ?>"  /></p>
        </div>

    <div class = "contact_detail">
        <p class="contact_detail_title"><b>Contact Details</b></p>
        <div class = "left1_left">
            <p class="element8">Contact <br>Person</p>
            <p class="element9">Company <br>Name</p>
        </div>
        <div class = "left1_right">
                <input class ="input9" type="int" name="contact_person" size="20" maxlength="60" value="<?php if (isset($_POST['contact_person'])) echo $_POST['contact_person']; ?>"  /></p>
                <input class ="input10" type="text" name="company_name" size="15" maxlength="40" value="<?php if (isset($_POST['company_name'])) echo $_POST['company_name']; ?>" /></p>

        </div>

        <div class = "right1_left">
            <p class="element10">Contact</p>
            <p class="element11"><br>Email</p>
        </div>
        <div class = "right1_right">
                <input class ="input11" type="int" name="contact" size="20" maxlength="60" value="<?php if (isset($_POST['contact'])) echo $_POST['contact']; ?>"  /></p>
                <input class ="input12" type="text" name="email" size="20" maxlength="60" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  /></p>
        </div>
    </div>
    
    <div class = "other_detail">
        <p class="other_detail_title"><b>Other Details</b></p>
        <div class = "middle_left">
            <p class="element12">Special <br>Request</p>
            <p class="element13">Promo Code</p>
            <p class="element14">Subscribe to our newsletter
                <input type="checkbox" name="subscribe" <?php if (isset($_POST['subscribe'])) echo 'checked="checked"'; ?> />
            </p>
        </div>  
        <div class = "middle_right">
            <input class ="input13" type="text" name="request" size="15" maxlength="40" value="<?php if (isset($_POST['request'])) echo $_POST['request']; ?>" /></p>
            <input class ="input14" type="text" name="promo" size="15" maxlength="40" value="<?php if (isset($_POST['promo'])) echo $_POST['promo']; ?>" /></p>
        </div>
    </div>

    <div align="center" class = "button">
        <p><input type="submit" name="submit" class = "button1" value="GET QUOTATION TODAY"/></p>
    </div>

<?php

function calculate_total($budget_param, $number_param) {
    return $budget_param * $number_param;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){

    
    $errors = array(); // Initialize an error array.
	
	// Check for occasion:
	if (empty($_POST['occasion'])) {
		$errors[] = 'You forgot to enter occasion.';
	 } else {
		$occasion = trim($_POST['occasion']);
	}
    
    // Check for date:
	if (empty($_POST['date'])) {
		$errors[] = 'You forgot to enter date.';
	 } else {
		$date = trim($_POST['date']);
	}
    
    // Check for time:
	if (empty($_POST['time'])) {
		$errors[] = 'You forgot to enter time.';
	 } else {
		$time = trim($_POST['time']);
	}

    // Check for address:
	if (empty($_POST['address'])) {
		$errors[] = 'You forgot to enter event address.';
	 } else {
		$address = trim($_POST['address']);
	}
    
    // Check for location:
	if (empty($_POST['location'])) {
		$errors[] = 'You forgot to enter location.';
	 } else {
		$location = trim($_POST['location']);
	}
    
    // Check for budget:
	if (empty($_POST['budget'])) {
		$errors[] = 'You forgot to enter budget.';
	 } else {
		$budget = trim($_POST['budget']);
	}

    // Check for number:
	if (empty($_POST['number'])) {
		$errors[] = 'You forgot to enter number of pax.';
	 } else {
		$number = trim($_POST['number']);
	}
    // Check for total:
	if (empty($_POST['contact_person'])) {
		$errors[] = 'You forgot to enter contact person.';
	 } else {
		$contact_person = trim($_POST['contact_person']);
	}

    if (empty($_POST['company_name'])) {
		$errors[] = 'You forgot to enter company name.';
	 } else {
		$company_name = trim($_POST['company_name']);
	}

    if (empty($_POST['contact'])) {
		$errors[] = 'You forgot to enter contact.';
	 } else {
		$contact = trim($_POST['contact']);
	}

    if (empty($_POST['email'])) {
		$errors[] = 'You forgot to enter email.';
	 } else {
		$email = trim($_POST['email']);
	}

	$request = trim($_POST['request']);
	$promo = trim($_POST['promo']);
	$subscribe = isset($_POST['subscribe']) ? 1 : 0;
   
    

    if (empty($errors)) { // If everything's OK.
	
		//Register the user in the database...
		
		require ('../mysqli_connect.php'); // Connect to the db.
        // Calculate total and assign it to $total
        $total = calculate_total($_POST['budget'], $_POST['number']);
		//Make the query:
		$q = "INSERT INTO catering (occasion, date, time, address, location,budget,number,total,contact_person,company_name,contact,email,request,promo,subscribe) VALUES ('$occasion', '$date', '$time', '$address', '$location', '$budget', '$number','$total', '$contact_person', '$company_name', '$contact', '$email' ,'$request','$promo','$subscribe')";
		$r = mysqli_query ($dbc, $q); // Run the query. 
		if ($r) { // If it ran OK. 

			// Print a message:
			echo '<center><h1>Thank you!</h1> 
		<p>We have received your quatation, we will contact to you soon!</p><p><br /></p>';	

		} else {  //If it did not run OK.
	
			// Public message:
			echo '<font color="red"><center><h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</font></p>'; 
	
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
				
		} // End of if ($r) IF.
		
		mysqli_close($dbc); // Close the database connection.
		
		//Include the footer and quit the script:
		exit(); 
        
		
	 } 
	 // End of if (empty($errors)) IF. 
	else { // Report the errors.
        
		echo '<font color="red"><center><h1>Error!</h1> 
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
		echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</font></p><p><br /></p>';
        
        
    }

   
}// End of the main Submit conditional.


include ('includes/footer.html'); 

?>
</div>
</fieldset>
</body>
</html>