<?php
// Requiring the db connection
require 'config.php';
session_start();

// Initialize error messages
$errorMessage = '';

// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $conn->prepare('SELECT username, password FROM admin WHERE username = ?')) {
    // Bind parameters (s = string, i = int, b = blob, etc), in our case the student_num is a string so we use "s"
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    // Store the result so we can check if the account exists in the database.
    $stmt->store_result();
    // If the student_num exists 
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($admin, $password);
        $stmt->fetch();
        // Account exists, now we verify the password.
        // Note: remember to use password_hash in your registration file to store the hashed passwords.
        if (password_verify($_POST['password'], $password)) {
            // Verification success! User has logged in!
            // Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['admin'] = $admin;

           header('Location: ../a/dashboard');

        } else {
            $errorMessage = 'Incorrect login details!';
            header('Location: ../adminlogin'); // Redirect back to the login page

        }
    } else {
        $errorMessage = 'Incorrect login details!';
        header('Location: ../adminlogin'); // Redirect back to the login page

    }

    // Set the error message in a session variable to be accessed on the login page
    $_SESSION['error_message'] = $errorMessage;
    setcookie("student_num", $_POST['student_num'], time() + 86400, "/");
}
