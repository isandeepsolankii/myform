<?php

// Keep this As it is

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


//Change the path as per your file
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userName = trim($_POST["fullName"]); // fullName = index.html file - name = "fullname"
    $userEmail = trim($_POST["email"]); // email = index.html file - name = "email"
    $userMessage = trim($_POST["message"]); // message = index.html file - name = "message"
    $toEmail = "youremail@gmail.com"; // to which email you want to receive replace with it
    $message = ''; // This message will be received in your email

    // Basic validation
    if (!empty($userName) && !empty($userEmail)) {
        // Initialize PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Server settings
            $mail->isSMTP();                                            // Send using SMTP 
            $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through - use this only sending to gmail
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'youremail@gmail.com';       // SMTP username (replace with your verified email)
            $mail->Password   = 'success';                  // SMTP password (replace with your (16 digits password) password - steps written in Readme file)
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS for SSL
            $mail->Port       = 587;                                    // TCP port to connect to

            // Recipients
            $mail->setFrom($userEmail, $userName);                      // Set sender of the email (user's email)
            $mail->addAddress($toEmail);                                // Add a recipient (your email)
            $mail->addReplyTo($userEmail, $userName);                   // Add reply-to as user's email

            // Content
            $mail->isHTML(true);                                        // Set email format to HTML
            $mail->Subject = "New Contact from " . $userName;
            $mail->Body    = "<strong>Full Name:</strong> " . $userName . "<br>" .
                             "<strong>Email:</strong> " . $userEmail . "<br>" .
                             "<strong>Message:</strong> " . nl2br($userMessage);

            // Send email
            if ($mail->send()) {
                $message = "Your contact information is received successfully."; // This message will be shown in url if form is sent successfully
                header("Location: ../../thankyou.html?message=" . urlencode($message)); // if successfully sent it will go to thankyou.html page
            } else {
                $message = "There was an error sending your message."; // This message will be shown in url, if any error
                header("Location: ../../index.html?error=" . urlencode($message)); // if not sent it will go back to index.html page
            }
            exit();

        } catch (Exception $e) {
            $message = "Mailer Error: {$mail->ErrorInfo}";
            header("Location: ../../index.html?error=" . urlencode($message));
            exit();
        }

    } 
}
?>
