<?php
    require_once '../config.php';

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        // Prepare and execute a SELECT query to retrieve the row based on username
        
    } else {
        // If 'submit' was not set, redirect to login page with error message
        header("Location: vendorlogin.html?error=What are you doing?");
        exit;
    }    
?>
