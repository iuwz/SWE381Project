<?php
session_start(); // Start the session or continue the existing one

// Check if the session variable for logged-in status is set and true
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    include("logged_in_header.html"); // Path to the header file for logged-in users
} else {
    include("header.html"); // Path to the default header file for guests
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to the website</h1>

    <script src="assets/js/main.js"></script>
</body>

</html>
<?php
if (isset($_POST['logout'])) {
    session_destroy();
    echo "<script>window.location.href = 'welcome.php';</script>";
    exit;
}
include("footer.html");
?>