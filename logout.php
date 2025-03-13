<?php
// Start session
session_start();

// Destroy session data
session_destroy();

// Redirect to the login page or any other page you want
header("Location: index.html");
exit;
?>