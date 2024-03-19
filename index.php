<?php
session_start();
include("header.html");
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
    <form action="index.php" method="post">
        <input type="submit" name="logout" value="logut">
    </form>
    <script src="assets/js/main.js"></script>
</body>

</html>
<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: login.php");
}
include("footer.html");
?>