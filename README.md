# Form

## A Form created using HTML and a PHP file to Send the form to the mail ID.

This project includes instructions on how to integrate a contact form into your HTML website using PHP and PHPMailer. The form will allow users to send emails directly to your inbox. The guide below walks you through the necessary steps.

## Prerequisites:

Basic understanding of HTML and PHP.
A Gmail account to receive form submissions.
Access to your project directory.

## Steps to Add a Form Using PHP and PHPMailer:

### Step 1: Download PHPMailer

1. Go to the PHPMailer GitHub repository(https://github.com/PHPMailer/PHPMailer).
2. Download the ZIP file of the PHPMailer library.

### Step 2: Extract PHPMailer Files

1. Unzip the downloaded PHPMailer file.
2. Navigate to the src folder within the unzipped directory.
3. Copy the following three files:

- PHPMailer.php
- SMTP.php
- Exception.php

### Step 3: Create PHPMailer Folder

1. In your project directory, create a new folder named "PHPMailer".
2. Paste the three files you copied earlier into this folder.

### Step 4: Create a php file

1. In your project directory, create a php file that will be used to send the form (E.g: send_email.php)
2. Copy and paste the code present in the file and modify it accordingly (https://github.com/isandeepsolankii/myform/blob/main/assets/php/send_email.php)

### Step 5: Customize the PHP Form

1. Open the PHP file you downloaded and modify it according to your requirements.
2. Add or remove form fields as needed.

### Step 6: Integrate PHPfile in Your HTML Form

1. Inside your HTML file where the form is located, set the form's method attribute to "post" and the action attribute to the location of your PHP file:

```
<form method="post" action="your-php-file-location.php">
```

### Step 7: Configure Gmail SMTP for PHPMailer

1. In your PHP file, you need to add your Gmail credentials.
2. Set your email as the username:

```
$mail->Username = 'your-email@gmail.com';
```

3. For the password, follow these steps:

- Login to your Gmail account.
- Visit Google Account Security.
- Enable Two-Factor Authentication.
- Find "App Passwords" under the Security tab.
- Create a new App Password (e.g., "myproject").
- Copy the generated password and add it to your PHP file

```
$mail->Password = 'your-app-password'(16 digits passwords);
```

### Step 8: Final Checks and Troubleshooting

1. Ensure your form is correctly set up:
2. Double-check the "action" attribute in your form.
3. Verify that the "id" and "name" attributes of your input fields match those in your PHP file.
4. Ensure PHPMailer is correctly configured:

- The following lines should be present without changes:
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

- The following lines should be changed as per the PHPMailer Location
  require 'PHPMailer/Exception.php';
  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';

- Ensure your mail settings are correct:

```
$mail->Host = 'smtp.gmail.com';
```

# For Custom Form Validation

This project includes a contact form integrated with PHP and PHPMailer, featuring custom validation to ensure users fill in the required details correctly before submission. The validation scripts, including email validation, are located in the "Validation" folder.

### Steps to add validation to form

1. Ensure that all fields in the form are being validated. You can adjust the validation rules as per your requirements.

2. Add a name "contactFormEmail" to the form and verify it in your JavaScript file.

```
<form name = "contactFormEmail" method = "post" action = "your php file location">

```

3. Check the id property of each field in the HTML and JavaScript files to ensure they match.

4. Assign the class "item" to each input field in the form.

```
<input class= "item">
```

5. Wrap each form field in a div and assign the class "field" to the div.

```
<div class = "field">
```

6. Add an error message in the same div with the class "error-txt" to display validation errors.

```
<div class = "error-txt">
```

7. Don't forget to copy the necessary CSS for the field, error-txt, and item classes.

```
<style>
.field .item {
        border-color: #3990df;
      }

      .error-txt {
        font-size: 12px;
        color: red;
        text-align: left;
        margin: 5px 0 0 0;
        display: none;
      }

      .field.error .item {
        border-color: red;
      }

      .field.error .error-txt {
        display: block;
      }
    </style>
```

For reference, here is a sample code snippet for one field:

```
<div class=" field">
    <label for="email" class="form-label">Email Address</label>
    <input
    type="email"
    class="item"
    id="email"
    name="email"
    placeholder="Enter your email"
    />
    <div class="error-txt email">Email cannot be blank</div>
</div>
```

### Conclusion:

By following these steps, your form should be up and running. If you encounter any issues, double-check your code and settings, especially the form and PHPMailer configuration.
