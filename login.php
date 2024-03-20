<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "<script>window.location.href = 'index.php';</script>";
    exit; // Make sure no further code is executed
}
include("db.php");
session_start();
include("header.html");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>

<body>

    <body>
        <div id="content" class="d-flex flex__center snippet-hidden">

            <div class="background">

                <div class="flex--item">

                    <div class="ta-center fs-title mx-auto mb24">
                        <a href="https://stackoverflow.com">

                            <svg aria-hidden="true" class="logo" width="32" height="37" viewBox="0 0 32 37">
                                <path d="M26 33v-9h4v13H0V24h4v9h22Z" fill="#BCBBBB"></path>
                                <path d="m21.5 0-2.7 2 9.9 13.3 2.7-2L21.5 0ZM26 18.4 13.3 7.8l2.1-2.5 12.7 10.6-2.1 2.5ZM9.1 15.2l15 7 1.4-3-15-7-1.4 3Zm14 10.79.68-2.95-16.1-3.35L7 23l16.1 2.99ZM23 30H7v-3h16v3Z" fill="#F48024"></path>
                            </svg> </a>
                    </div>



                    <div id="openid-buttons" class="mx-auto d-flex flex__fl-grow1 fd-column gs8 gsy mb16 wmx3">
                        <button class="button-6" data-provider="google" data-oauthserver="https://accounts.google.com/o/oauth2/auth" data-oauthversion="2.0">
                            <svg aria-hidden="true" class="native svg-icon iconGoogle" width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#4285F4" d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 0 0 2.38-5.88c0-.57-.05-.66-.15-1.18Z"></path>
                                <path fill="#34A853" d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 0 1-7.18-2.54H1.83v2.07A8 8 0 0 0 8.98 17Z"></path>
                                <path fill="#FBBC05" d="M4.5 10.52a4.8 4.8 0 0 1 0-3.04V5.41H1.83a8 8 0 0 0 0 7.18l2.67-2.07Z"></path>
                                <path fill="#EA4335" d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 0 0 1.83 5.4L4.5 7.49a4.77 4.77 0 0 1 4.48-3.3Z"></path>
                            </svg>
                            Log in with Google </button>
                        <button class="button-6" data-provider="github" data-oauthserver="https://github.com/login/oauth/authorize" data-oauthversion="2.0">
                            <svg aria-hidden="true" class="svg-icon iconGitHub" width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#010101" d="M9 1a8 8 0 0 0-2.53 15.59c.4.07.55-.17.55-.38l-.01-1.49c-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.42 7.42 0 0 1 4 0c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48l-.01 2.2c0 .21.15.46.55.38A8.01 8.01 0 0 0 9 1Z"></path>
                            </svg>
                            Log in with GitHub </button>
                        <button class="button-6" data-provider="facebook" data-oauthserver="https://www.facebook.com/v2.0/dialog/oauth" data-oauthversion="2.0">
                            <svg aria-hidden="true" class="svg-icon iconFacebook" width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#4167B2" d="M3 1a2 2 0 0 0-2 2v12c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3Zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5Z"></path>
                            </svg>
                            Log in with Facebook </button>
                    </div>

                    <div id="formContainer" class="mx-auto mb24 p24 wmx3 bg-white bar-lg bs-xl">
                        <form id="login-form" class="d-flex fd-column gs12 gsy" action="login.php" method="POST"><input type="hidden" name="fkey" value="87bc65e08a7d7c014256b3b7cdd4cc58cc0df2a58a90d37209f752aa43ff4415">
                            <input type="hidden" name="ssrc" value="head">
                            <div class="flex--item d-flex fd-column gs4 gsy js-auth-item ">


                                <div class="omrs-input-group">
                                    <label class="omrs-input-filled">
                                        <input type="email" name="email" required>
                                        <span class="omrs-input-label">Email</span>


                                    </label>
                                </div>
                                <p class="flex--item s-input-message js-error-message d-none">

                                </p>

                            </div>
                            <div class="flex--item d-flex fd-column-reverse gs4 gsy js-auth-item ">
                                <p class="flex--item s-input-message js-error-message d-none">

                                </p>

                                <div class="d-flex ps-relative js-password">
                                    <div class="omrs-input-group">
                                        <label class="omrs-input-filled">
                                            <input type="password" name="password" id="password" required>
                                            <span class="omrs-input-label">Password</span>


                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="d-flex ai-center ps-relative jc-space-between">


                                <a class="flex--item s-link fs-caption" href="/users/account-recovery">Forgot password?</a>
                            </div>
                            <div class="flex--item d-flex gs4 gsy fd-column js-auth-item pb16 bb bc-black-225">
                                <button type="submit" name="login" class="btn btn-dark btn-sm">Login</button>
                                <p class="flex--item s-input-message js-error-message d-none">

                                </p>

                            </div>

                            <input type="hidden" id="oauth_version" name="oauth_version">
                            <input type="hidden" id="oauth_server" name="oauth_server">



                        </form>
                    </div>



                    <div class="mx-auto ta-center fs-body1 p16 pb0 mb24 w100 wmx3">
                        Don’t have an account? <a href="/users/signup?ssrc=head&amp;returnurl=https%3a%2f%2fstackoverflow.com%2fquestions%2f21279442%2fxampp-mysql-not-starting-attempting-to-start-mysql-service">Sign up</a>


                    </div>
                </div>

                <script>
                    StackExchange.ready(function() {
                        auth.init(auth.pages.Login);
                    });
                </script>
            </div>
        </div>
        <script src="assets/js/main.js"></script>
    </body>
</body>

</html>

<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    // Removed password direct use here for security.

    // Prepare statement to prevent SQL Injection
    $stmt = $conn->prepare("SELECT id, email, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($_POST['password'], $row['password'])) {
            // Set session variables
            $_SESSION['user_id'] = $row['id']; // Assuming 'id' is the column name for user IDs.
            $_SESSION['email'] = $email;
            $_SESSION['loggedin'] = true;

            echo "<script>window.location.href = 'index.php';</script>";
            exit; // Make sure no further code is executed
        } else {
            // Password is not correct
            echo "<script>alert('Invalid email or password.');</script>";
        }
    } else {
        // No user found
        echo "<script>alert('Invalid email or password.');</script>";
    }
    $stmt->close();
    $conn->close();
}
include("footer.html");
?>