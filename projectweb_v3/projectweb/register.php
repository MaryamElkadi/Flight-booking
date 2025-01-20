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

// Execute SQL query to select all users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Username: " . $row["username"] . "<br>"; // Add this line for the username
            echo "Name: " . $row["name"] . "<br>";
            echo "Telephone: " . $row["tel"] . "<br>";
            echo "Type: " . $row["type"] . "<br>";
            echo "<hr>"; // Separating each user's information
        }
    } else {
        echo "No users found";
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>
