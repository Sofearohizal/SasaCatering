<?php include ('includes/header.html'); 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data here
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $message = $_POST["message"];

    // Database insertion
    require('../mysqli_connect.php'); // Replace with your actual database connection file

    // Using prepared statements to prevent SQL injection
    $query = "INSERT INTO contact_us (first_name, last_name, email, mobile, message) 
              VALUES ('$first_name', '$last_name', '$email', '$mobile', '$message')";

    $stmt = mysqli_prepare($dbc, $query);

    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param( $firstName, $lastName, $email, $mobile, $message);

    // Execute the prepared statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        echo "Form submitted successfully!<br>";
        echo "First Name: " . $firstName . "<br>";
        echo "Last Name: " . $lastName . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Mobile: " . $mobile . "<br>";
        echo "Message: " . $message . "<br>";
    } else {
        echo "Error submitting the form. Please try again later.";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);

    mysqli_close($dbc); // Close the database connection

    exit(); // To prevent the form from being displayed again after submission
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactus.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>
        <?php include 'contactus.css'; ?>
    </style>
</head>
<body>
   <!--Contact Us start-->
        <div class="contactUs">
            <div class="title">
                <h2>Contact Us</h2>
            </div>
            <div class="box">
                <div class="contact form">
<!--Send Messages-->
                    <h3>Send a Message</h3>
                    <form>
                        <div class="formBox">
                            <div class="row50">
                                <div class="inputBox">
                                    <span>First Name</span>
                                    <input type="text" placeholder="Sofiya">
                                </div>
                                <div class="inputBox">
                                    <span>Last Name</span>
                                    <input type="text" placeholder="Sofiya">
                                </div>
                            </div>
                            <div class="row50">
                                <div class="inputBox">
                                    <span>Email Address</span>
                                    <input type="text" placeholder="sofiya@email.com">
                                </div>
                                <div class="inputBox">
                                    <span>Mobile</span>
                                    <input type="text" placeholder="60+ 123 4567">
                                </div>
                            </div>
                            <div class="row100">
                                <div class="inputBox">
                                    <span>Message</span>
                                    <textarea placeholder="Write Your Message Here..."></textarea>
                                </div>
                                </div>
                                    <div class="row100">
                                        <div class="inputBox">
                                            <button onclick="myFunction()">Send</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
<!--contact info-->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                  <div>
                    <span><ion-icon name="location"></ion-icon></span>
                    <p>SASA, Kuala Lumpur <br> Kuala Lumpur</p>
                  </div>
                   <div>
                    <span><ion-icon name="mail"></ion-icon></span>
                    <a href="mailto:SASA@gmail.com">SASA@gmail.com</a>
                   </div>
                   <div>
                    <span><ion-icon name="call"></ion-icon></span>
                    <a href="tel:03-21437999">03-2143 7999</a>
                </div>
            </div>
        </div>
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.791594335868!2d101.71043707497117!3d3.149607796825797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc362c83bcb4bd%3A0xc19beaf5c1ed7352!2sVictoria&#39;s%20Secret!5e0!3m2!1sen!2smy!4v1701722093356!5m2!1sen!2smy" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <?php include ('includes/footer.html'); ?>
        </div>
        </div>
        </section>
        <script>
            function myFunction() {
    alert("Already submitted!");
    }
        </script>
    </body>
</html>
