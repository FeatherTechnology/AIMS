<?php
session_start(); // Start the session to access and destroy it

// Destroy session data
session_unset(); 
session_destroy();

// Redirect the user to the login or home page
header("Location:'vidhyaparthihss-001-site5.etempurl.com");
exit();
?>