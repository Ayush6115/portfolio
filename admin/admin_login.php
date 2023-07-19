<?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Define the predefined username and password
        $predefinedUsername = "Ayush";
        $predefinedPassword = "7667406057";

        // Get the submitted username and password
        $submittedUsername = $_POST['username'];
        $submittedPassword = $_POST['password'];

        // Check if the submitted credentials match the predefined credentials
        if ($submittedUsername === $predefinedUsername && $submittedPassword === $predefinedPassword) {
            // Successful login, redirect to the admin panel
            header("Location: admin_panel.html");
            exit();
        } else {
            // Invalid credentials, display an error message or redirect to a login failure page
            echo "Invalid username or password. Please try again.";
        }
    }
?>
