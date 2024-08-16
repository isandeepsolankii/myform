# myform

Overview:
This project includes instructions on how to integrate a contact form into your HTML website using PHP and PHPMailer. The form will allow users to send emails directly to your inbox. The guide below walks you through the necessary steps.

Prerequisites:
Basic understanding of HTML and PHP.
A Gmail account to receive form submissions.
Access to your project directory.

Steps to Add a Form Using PHP and PHPMailer:

Step 1: Download PHPMailer
1.Go to the PHPMailer GitHub repository(https://github.com/PHPMailer/PHPMailer).
2.Download the ZIP file of the PHPMailer library.

Step 2: Extract PHPMailer Files
1.Unzip the downloaded PHPMailer file.
2.Navigate to the src folder within the unzipped directory.
3.Copy the following three files:
a.PHPMailer.php
b.SMTP.php
c.Exception.php

Step 3: Create PHPMailer Folder
1.In your project directory, create a new folder named "PHPMailer".
2.Paste the three files you copied earlier into this folder.

Step 4: Create a php file
1.In your project directory, create a php file that will be used to send the form (E.g: send_email.php)
2.Copy and paste the code present in the file and modify it accordingly (https://github.com/isandeepsolankii/myform/blob/main/assets/php/send_email.php)

Step 5: Customize the PHP Form
1.Open the PHP file you downloaded and modify it according to your requirements.
2.Add or remove form fields as needed.

Step 6: Integrate PHPfile in Your HTML Form
1.Inside your HTML file where the form is located, set the form's method attribute to "post" and the action attribute to the location of your PHP file:

<form method="post" action="your-php-file-location.php">

Step 7: Configure Gmail SMTP for PHPMailer
1.In your PHP file, you need to add your Gmail credentials.
2.Set your email as the username:
$mail->Username = 'your-email@gmail.com';
3.For the password, follow these steps:
a.Login to your Gmail account.
b.Visit Google Account Security.
c.Enable Two-Factor Authentication.
d.Find "App Passwords" under the Security tab.
e.Create a new App Password (e.g., "myproject").
f.Copy the generated password and add it to your PHP file
$mail->Password = 'your-app-password'(16 digits passwords);

Step 8: Final Checks and Troubleshooting
1.Ensure your form is correctly set up:
2.Double-check the "action" attribute in your form.
3.Verify that the "id" and "name" attributes of your input fields match those in your PHP file.
4.Ensure PHPMailer is correctly configured:

The following lines should be present without changes:
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

The following lines should be changed as per the PHPMailer Location
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

Ensure your mail settings are correct:
$mail->Host = 'smtp.gmail.com';

Conclusion:
By following these steps, your form should be up and running. If you encounter any issues, double-check your code and settings, especially the form and PHPMailer configuration.
