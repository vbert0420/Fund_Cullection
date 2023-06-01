<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Replace with your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = '9fsfomain@gmail.com'; // Replace with your SMTP username
        $mail->Password = 'quhjkjldirdgteeb'; // Replace with your SMTP password
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('employee@gmail.com', 'Employee '); // Replace with the sender's email and name
        $mail->addAddress('9fsfomain@gmail.com', 'Admin'); // Replace with the recipient's email and name

        // Email content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = "<p>Name: $name</p><p>Email: $email</p><p>Message: $message</p>";

        // Send email
        $mail->send();

        // Display success message
       
        echo '<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; height: 100vh; background-image: url(background.jpg); background-size: cover; background-position: center;">
        <p style="text-align: center; border: 2px solid black; padding: 10px; color: green; font-weight: bold; font-size: 24px; background-color: rgba(0, 128, 0, 0.2);">Email sent. Please await further <br> instructions from the Admin.</p>
        <a href="index.php" style="margin-top: 20px; display: inline-block; text-decoration: none;">
          <button style="padding: 10px 20px; background-color: green; color: white; font-size: 16px; border: none; border-radius: 4px;">Back to index</button>
        </a>
      </div>';








    } catch (Exception $e) {
        // Display error message
        echo "Email could not be sent. Error: {$mail->ErrorInfo}";
    }
}
?>
