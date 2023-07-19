<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_data";

try {
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the id parameter is set
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Prepare and execute the DELETE statement
        $stmt = $pdo->prepare("DELETE FROM portfolio_data WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        // Return success message
        echo "Message deleted successfully.";
    } else {
        // Return error message if the id parameter is missing
        echo "Error: Missing id parameter.";
    }
} catch (PDOException $e) {
    // Return error message if there's an exception
    echo "Error: " . $e->getMessage();
}
?>
