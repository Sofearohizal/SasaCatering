<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Noto Sans' rel='stylesheet'>

       <style>
        .background{
            margin-top:100px;
        }
        .booking{
            margin-top:150px;
            margin-left:50px;
            color:#820D10;
            font-family: "Noto Sans";
            font-size:50px;
        }
       </style>
</head>
<?php
	include ('includes/header.html');
    require ('../mysqli_connect.php');

    // Define the query:
    $q = "SELECT occasion, date, time, address, location,budget,number,total,contact_person,company_name,contact,email,subscribe FROM catering";		
    $r = @mysqli_query ($dbc, $q);

    if ($num > 0) { // If it ran OK, display the records.

        // Print how many users there are:
        echo "<p>There are currently $num registered users.</p>\n";
    
        // Table header:
        echo '<table align="center" cellspacing="3" cellpadding="3" width="75%">
        <tr>
            <td align="left"><b>Occasion</b></td>
            <td align="left"><b>Date</b></td>
            <td align="left"><b>Time</b></td>
            <td align="left"><b>Address</b></td>
            <td align="left"><b>Location</b></td>
            <td align="left"><b>Budget</b></td>
            <td align="left"><b>Number</b></td>
            <td align="left"><b>Total</b></td>
            <td align="left"><b>Contact Person</b></td>
            <td align="left"><b>Company Name</b></td>
            <td align="left"><b>Contact</b></td>
            <td align="left"><b>Email</b></td>
            <td align="left"><b>Subsribe</b></td>


        </tr>
    ';
        
        // Fetch and print all the records:
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC)) {
            echo '<tr>
                <td align="left">' . $row['occasion'] . '</td>
                <td align="left">' . $row['date'] . '</td>
                <td align="left">' . $row['time'] . '</td>
                <td align="left">' . $row['address'] . '</td>
                <td align="left">' . $row['location'] . '</td>
                <td align="left">' . $row['budget'] . '</td>
                <td align="left">' . $row['number'] . '</td>
                <td align="left">' . $row['total'] . '</td>
                <td align="left">' . $row['contact_person'] . '</td>
                <td align="left">' . $row['company_name'] . '</td>
                <td align="left">' . $row['contact'] . '</td>
                <td align="left">' . $row['email'] . '</td>
                <td align="left">' . $row['subscribe'] . '</td>

            </tr>
            ';
        }
        echo '</table>';
	mysqli_free_result ($r); // Free memory associated with $r	

} else { // If no records were returned.
	echo '<p class="error">There are currently no registered users.</p>';
}
?>
<body>
    <div class = 'background'>
    <p class='booking'>BOOKING CONFIRMED</p>
        <p>
    </div>
    </div>
</body>
</html>