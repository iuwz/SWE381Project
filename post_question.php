<?php
session_start(); // Start the session or continue the existing one
// Assuming db.php contains your database connection
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize the input
    $questionTitle = $conn->real_escape_string($_POST['questionTitle']);
    $questionBody = $conn->real_escape_string($_POST['questionBody']);
    $userId =  $_SESSION['user_id']; // Example user ID; you should replace this with the actual logged-in user's ID

    // SQL to insert the question
    $sql = "INSERT INTO questions (user_id, title, body) VALUES ('$userId', '$questionTitle', '$questionBody')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Question posted successfully.');</script>";
        echo "<script>window.location.href = 'index.php';</script>";
        exit;
        // Optionally, redirect to a page or show a success message
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
