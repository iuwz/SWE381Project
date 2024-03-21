<?php
session_start();
include("db.php");

$loggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;

if ($loggedIn && isset($_POST['submit_answer'], $_POST['question_id'], $_POST['answer_body'])) {
    $question_id = filter_input(INPUT_POST, 'question_id', FILTER_SANITIZE_NUMBER_INT);
    $answer_body = filter_input(INPUT_POST, 'answer_body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $user_id = $_SESSION['user_id']; // Ensure you're setting this upon user login

    $stmt = $conn->prepare("INSERT INTO answers (question_id, body, user_id) VALUES (?, ?, ?)");
    $stmt->bind_param("isi", $question_id, $answer_body, $user_id);
    if (!$stmt->execute()) {
        // Handle error; for simplicity, we'll just output a message
        echo "<script>alert('Error submitting answer.');</script>";
    }
    $stmt->close();
}

if ($loggedIn && isset($_POST['submit_rating'], $_POST['answer_id'], $_POST['rating'])) {
    $answer_id = filter_input(INPUT_POST, 'answer_id', FILTER_SANITIZE_NUMBER_INT);
    $rating = filter_input(INPUT_POST, 'rating', FILTER_SANITIZE_NUMBER_INT);
    $user_id = $_SESSION['user_id'];

    $stmt = $conn->prepare("INSERT INTO ratings (answer_id, user_id, rating) VALUES (?, ?, ?) ON DUPLICATE KEY UPDATE rating = ?");
    $stmt->bind_param("iiii", $answer_id, $user_id, $rating, $rating);
    if (!$stmt->execute()) {
        echo "<script>alert('Error submitting rating.');</script>";
    }
    $stmt->close();
}

// Ensure redirects and other header modifications occur before output
if (isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    // Fetch question and answers...
} else {
    die("No question specified.");
}

// Header selection based on login status
if ($loggedIn) {
    include("logged_in_header.html");
} else {
    include("header.html");
}

// Fetch the question from the database


// Fetch answers for the question
$stmt = $conn->prepare("SELECT body FROM answers WHERE question_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
if ($question = $result->fetch_assoc()) {
    // Fetch answers for the question here or within HTML below as needed
} else {
    die("Question not found.");
}
$answers = $result->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($question['title']); ?></title>
    <link rel="stylesheet" href="/website/SWE381Project/assets/css/questions.css">
    <link rel="stylesheet" href="/website/SWE381Project/assets/css/stars.css">
</head>

<body>
    <div class="question">
        <h2><?php echo htmlspecialchars($question['title']); ?></h2>
        <p><?php echo htmlspecialchars($question['body']); ?></p>
    </div>

    <?php if ($loggedIn) : ?>
        <!-- Answer form -->
        <form method="POST" action="">
            <textarea name="answer_body" required placeholder="Your answer"></textarea>
            <input type="hidden" name="question_id" value="<?php echo $id; ?>">
            <button type="submit" name="submit_answer">Submit Answer</button>
        </form>
        <div class="answers">
            <h2>Answers</h2>
            <?php foreach ($answers as $answer) : ?>
                <div class="answer">
                    <h3><?php echo htmlspecialchars($answer['body']); ?></h3>
                    <!-- Star rating form -->
                    <?php if ($loggedIn) : ?>
                        <form action="" method="POST" class="rating-form">
                            <input type="hidden" name="answer_id" value="<?php echo $answer['id']; ?>">
                            <?php for ($i = 1; $i <= 5; $i++) : ?>
                                <input type="radio" id="star<?php echo $i; ?>-<?php echo $answer['id']; ?>" name="rating" value="<?php echo $i; ?>" />
                                <label for="star<?php echo $i; ?>-<?php echo $answer['id']; ?>">☆</label>
                            <?php endfor; ?>
                            <button type="submit" name="submit_rating">Rate</button>
                        </form>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>



        <?php else : ?>
            <p><a href="login.php">Log in</a> to answer or rate answers.</p>
        <?php endif; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            $(document).ready(function() {
                $('form.answer-form').on('submit', function(e) {
                    e.preventDefault(); // Prevent the form from submitting normally

                    var formData = $(this).serialize(); // Serialize the form data

                    $.ajax({
                        type: "POST",
                        url: "question.php", // Assuming the form action is "question.php"
                        data: formData,
                        success: function(response) {
                            // Handle success. You can refresh part of your page, show a message, etc.
                            alert('Answer submitted successfully!');
                            // Optionally clear the form or update the page content
                            $('form.answer-form').find("textarea").val(""); // Clear the text area
                        },
                        error: function() {
                            // Handle error
                            alert('There was an error submitting your answer. Please try again.');
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('form.rating-form').on('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission

                    var formData = $(this).serialize(); // Serialize the form data

                    $.ajax({
                        type: "POST",
                        url: "question.php", // Update as necessary
                        data: formData,
                        success: function(response) {
                            // Handle success
                            alert('Rating submitted successfully!');
                            // Here, you might want to update some part of your page
                        },
                        error: function() {
                            // Handle error
                            alert('There was an error submitting your rating. Please try again.');
                        }
                    });
                });
            });
        </script>

</body>

</html>
<?php
include("footer.html");

?>