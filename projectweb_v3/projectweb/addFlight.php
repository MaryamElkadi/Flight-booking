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
    $name = $_POST["name"];
    $flightID = $_POST["id"];
    $itinerary = $_POST["itinerary"];
    $fees = $_POST["fees"];
    $passengers = $_POST["passengers"];
    $time = $_POST["time"];

    // Prepare and bind SQL statement
    $stmt = $conn->prepare("INSERT INTO flights (name, flightID, itinerary, fees, passengers, time) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $name, $flightID, $itinerary, $fees, $passengers, $time);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Flight added successfully!";
        // You can redirect to a different page or perform additional actions here
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
