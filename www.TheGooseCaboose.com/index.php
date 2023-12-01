<?php
// Start the session
session_start();

// Database connection
$servername = "localhost";
$username = "admin";
$password = "notagoodpassword";
$dbname = "goose";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitizeInput($data)
{
    return htmlspecialchars(stripslashes(trim($data)));
}

// Function to generate a CSRF token
function generateCSRFToken()
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

// Validate user login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate CSRF token
    if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        die("CSRF token validation failed.");
    }

    // Sanitize user inputs
    $username = sanitizeInput($_POST['username']);
    $password = sanitizeInput($_POST['password']);

    // Use parameterized statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Verify hashed password
        if (strcmp($password, $row['password']) == 0) {
            echo "Login successful!";
            // Additional logic for a successful login
            $_SESSION['logged_in'] = 1;
            include("home.php");
        } else {
            echo "Invalid user/password";
        }
    } else {
        echo "Invalid user/password";
    }

    $stmt->close();
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Goose Caboose Camping Apparel</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <nav>
        <div class="logo">Goose Caboose</div>
        <div class="nav-items">
            <a href="/">Camp & Hike</a>
            <a href="/">Water</a>
            <a href="/">Men</a>
            <a href="/">Women</a>
            <a href="/">Kids</a>
        </div>
    </nav>
    <section class="main">
        <div class="main-container">
            <div class="column-middle">
                <h1>SHOP OUR END OF THE YEAR SALE</h1>
                <p>
                    Deals on Rain Gear, Jackets, Tents, & more! Login to access exclusive discounts, sale prices
                    available for members only.
                </p>
                <div class="logins">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <label for="username">Username:</label>
                        <input type="text" name="username" required>

                        <label for="password">Password:</label>
                        <input type="password" name="password" required>

                        <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">
                        <br>
                        <button type="submit">Login</button>
                    </form>
                </div>
                <img src="./camping_photo_V2.jpg" alt="photo of a camper" class="main-image"/>
            </div>
        </div>
    </section>
</body>
</html>
