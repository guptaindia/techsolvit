Contact Form with PHP Processing
This is a simple contact form implemented using HTML and PHP. The form allows users to submit their contact details and a message. Upon submission, the data is processed and stored in a database, and an email notification is sent to a specified email address.

Contents
Usage
Form Fields
Form Validation
Database Connection
Email Notification
Redirect
Usage


Place the HTML code in a file (e.g., index.html) on your web server.

Create a PHP file (e.g., connect.php) and place the provided PHP code in it.

Make sure you have a MySQL database set up, and adjust the database connection details in the PHP code accordingly.
   create database test;
   use test;
   CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PhoneNumber` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Message` varchar(2040) NOT NULL
);
insert values inside the users table



Adjust the email address ($to) where you want to receive notifications. 


Create a "thankyou.html" file that users will be redirected to after successfully submitting the form.

Access the contact form through your web browser and fill out the required fields. Upon submission, the data will be processed and stored, and an email notification will be sent.


Form Fields
The contact form includes the following fields:
Full Name
Phone Number
Email
Subject
Message
All fields are required, and appropriate validation is performed to ensure the data is correctly formatted.


Form Validation
Form validation is performed using PHP to ensure that all required fields are filled out before the data is processed. The test_input() function is used to sanitize user input and prevent potential errors.

Database Connection
The form data is stored in a MySQL database. Modify the database connection details (host, username, password, database name) in the PHP code to match your database configuration.

Email Notification
Upon successful form submission, an email notification is sent to the specified email address ($to). The email includes the user's contact details and message.

Redirect
After successful form submission, users are redirected to a "thankyou.html" page to acknowledge their submission.

Please note that this README provides a basic overview of the functionality and usage of the code. Make sure to thoroughly test the code in your own environment and adapt it to your specific needs and security considerations.