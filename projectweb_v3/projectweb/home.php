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

// Retrieve flight information from the database
$sql = "SELECT * FROM flights";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Check if there are rows in the result set
    if ($result->num_rows > 0) {
        // Output flight information
        echo "<div id='flightContent' class='flight-content'>";
        echo "<h2>Flight Information</h2>";
        echo "<ul>";

        while ($row = $result->fetch_assoc()) {
            echo "<li>ID: " . $row["flightID"] . "</li>";
            echo "<li>Name: " . $row["name"] . "</li>";
            echo "<li>Itinerary: " . $row["itinerary"] . "</li>";
           // echo "<li>Pending passengers list: " . /* fetch and display pending passengers list here */ . "</li>";
           // echo "<li>Registered passengers list: " . /* fetch and display registered passengers list here */ . "</li>";
            echo "<li><a href='#' onclick='cancelFlight(" . $row["flightID"] . ")'>Cancel Flight</a></li>"; // Assuming flightID is a unique identifier
        }

        echo "</ul>";
        echo "</div>";
    } else {
        echo "No flights found";
    }
} else {
    echo "Error: " . $conn->error;
}

// Close the connection
$conn->close();
?>
