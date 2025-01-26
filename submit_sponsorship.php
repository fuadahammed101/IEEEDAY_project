<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "web_project"; // Name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the form data using POST
$name = $_POST['name'];
$email = $_POST['email'];
$organization = $_POST['organization'];
$request_details = $_POST['request_details'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO sponsorship_requests (name, email, organization, request_details) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $organization, $request_details);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>
            alert('Sponsorship request submitted successfully!');
            window.location.href='sponsorship_request.php'; // Redirect back to the form
          </script>";
} else {
    echo "Error: " . $stmt->error; // Display SQL error
}

$stmt->close();
$conn->close();
?>