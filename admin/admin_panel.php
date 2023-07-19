<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
</head>
<body>
<header>
        <div class="header-container">
            <div class="header-left">
            <a href="/portfolio/index.html"><img src="/portfolio/image/hero.jpg" alt="Your Photo" class="header-photo"></a>
                <span class="header-text">Hello, Ayush 👋🏻</span>
            </div>
            <div class="header-right">
                <h1>Welcome to the Admin Panel</h1>
            </div>
        </div>
    </header>

    <section>
        <h2>Messages</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
            
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

                    // Fetch messages from the database
                    $stmt = $pdo->query("SELECT * FROM portfolio_data");

                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['message'] . "</td>";
                        echo "<td>" . $row['created_at'] . "</td>";
                        echo "<td><button class='delete-button' onclick='deleteMessage(" . $row['id'] . ")'>Delete</button></td>";
                        echo "</tr>";
                    }
                } catch (PDOException $e) {
                    echo "Error: " . $e->getMessage();
                }

            ?>
        </table>
        <a href="/portfolio/index.html" class="logout-button">Logout</a>
    </section>

    <footer>
        <p>Logged in as Admin</p>
    </footer>

    
</body>
</html>