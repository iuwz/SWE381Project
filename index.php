<?php
session_start(); // Start the session or continue the existing one

// Check if the session variable for logged-in status is set and true
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    include("logged_in_header.html"); // Path to the header file for logged-in users
} else {
    include("header.html"); // Path to the default header file for guests
}
include("db.php");

// Define the number of items per page
$perPage = 15;

// Determine the current page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $perPage;

// Fetch recent questions with pagination
$stmt = $conn->prepare("SELECT id, title, (SELECT COUNT(*) FROM answers WHERE answers.question_id = questions.id) AS answer_count FROM questions ORDER BY created_at DESC LIMIT ? OFFSET ?");
$stmt->bind_param("ii", $perPage, $offset);
$stmt->execute();
$recentQuestions = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();

// Calculate total pages
$totalRows = $conn->query("SELECT COUNT(*) FROM questions")->fetch_row()[0];
$totalPages = ceil($totalRows / $perPage);

// Fetch top questions based on the number of answers
$stmt = $conn->prepare("SELECT id, title, (SELECT COUNT(*) FROM answers WHERE answers.question_id = questions.id) AS answer_count FROM questions ORDER BY answer_count DESC LIMIT 10");
$stmt->execute();
$topQuestions = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/website/SWE381Project/assets/css/custom.css">
</head>



<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <!-- Recent Questions Column -->
            <div class="col-lg-6">
                <h2>Recent Questions</h2>
                <div class="list-group">
                    <?php foreach ($recentQuestions as $question) : ?>
                        <a href="/website/SWE381Project/question/<?php echo urlencode(str_replace(' ', '-', strtolower($question['title']))) . '-' . $question['id']; ?>" class="list-group-item">
                            <?php echo htmlspecialchars($question['title']); ?>
                            <span class="badge badge-primary badge-pill RQAS"><?php echo $question['answer_count']; ?> answers</span>
                        </a>
                    <?php endforeach; ?>
                </div>
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
                            <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </nav>
            </div>
            <!-- Top Questions Column -->
            <div class="card" id='topquestions' style="width: 18rem;">
                <div class="card-header">
                    Most Answered Questions
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach ($topQuestions as $question) : ?>
                        <li><a href="/website/SWE381Project/question/<?php echo urlencode(str_replace(' ', '-', strtolower($question['title']))) . '-' . $question['id']; ?>" class="list-group-item">
                                <?php echo htmlspecialchars($question['title']); ?>
                                <span class="badge badge-primary badge-pill MAQS"><?php echo $question['answer_count']; ?> answers</span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
    </div>
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