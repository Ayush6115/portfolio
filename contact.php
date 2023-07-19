<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare the SQL statement
    $sql = "INSERT INTO portfolio_data (name, email, message) VALUES ('$name', '$email', '$message')";

    // Execute the SQL statement
    if ($conn->query($sql) === TRUE) {
        // Display a success message
        echo "Message sent successfully!";

        // Close the database connection
        $conn->close();

        // Redirect to the homepage after 2 seconds
        header("refresh:2; url=index.html");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
