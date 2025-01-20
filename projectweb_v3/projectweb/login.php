<?php
$servername = "localhost";
//$username = "your_mysql_username";  // Replace with your actual MySQL username
//$password = "your_mysql_password";  // Replace with your actual MySQL password
$dbname = "flightbooking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);

    // Execute the statement
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $row["password"])) {
            echo "Login successful!";
            // You can redirect to a different page or perform additional actions here
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "User not found";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
