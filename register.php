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

// Debugging: Check if data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data using POST
    $register_name = $_POST['register_name'];
    $department = $_POST['department'];
    $student_id = $_POST['student_id'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO registration_users (register_name, department, student_id, email, phone_number) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $register_name, $department, $student_id, $email, $phone_number);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>
                alert('Registration successful!');
                window.location.href='index.html'; // Redirect to home page
              </script>";
    } else {
        echo "Error: " . $stmt->error; // Display SQL error
    }

    $stmt->close();
}

$conn->close();
?>