<?php
session_start(); // Start the session at the very beginning
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "<script>window.location.href = 'index.php';</script>";
    exit; // Make sure no further code is executed
}
include("header.html");
require('db.php'); // Include the database connection
?>
<html>

<head>
    <meta charset="UTF-8">


    <title>Stack Overflow - Where Developers Learn, Share, &amp; Build Careers</title>

    <link rel="stylesheet" href="assets/css/signup.css">


    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body data-new-gr-c-s-check-loaded="14.1162.0" data-gr-ext-installed="" class="vsc-initialized">
    <div class="container">
        <div id="content">
            <div>
                <div class="upPartSignUP">
                    <div class="upPartRight">
                        <svg aria-hidden="true" class="logosignup" width="253" height="50" viewBox="0 0 253 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.8552 32.177V45.3321H4.86813V32.177H0.200195V50H40.5142V32.177H35.8552Z" fill="#BCBBBB"></path>
                            <path d="M9.13574 41.0885H31.6026V36.8449H9.13574V41.0885ZM9.5848 30.9399L31.4089 35.5202L32.307 31.1644L10.4829 26.584L9.5848 30.9399ZM12.4587 20.4769L32.6662 29.907L34.5523 25.8655L14.3448 16.4354L12.4587 20.4769ZM18.0719 10.5528L35.2258 24.8327L38.0998 21.4199L20.901 7.13997L18.0719 10.5528ZM29.1187 0L25.5263 2.64942L38.8183 20.5667L42.4107 17.9173L29.1187 0Z" fill="#F48024"></path>
                            <path d="M57.8981 31.0824L55.0323 30.8218C52.7743 30.6481 51.9059 29.7218 51.9059 28.2165C51.9059 26.3928 53.2954 25.2638 55.9007 25.2638C57.7534 25.2638 59.3744 25.6981 60.6481 26.6823L62.3561 24.9744C60.7639 23.6717 58.4771 23.0638 55.9296 23.0638C52.1085 23.0638 49.3585 25.0323 49.3585 28.3034C49.3585 31.256 51.2112 32.8192 54.6849 33.1087L57.6376 33.3692C59.6929 33.5429 60.6192 34.4113 60.6192 35.9745C60.6192 38.0877 58.7955 39.1298 55.8717 39.1298C53.6428 39.1298 51.7322 38.5509 50.3138 37.0745L48.5769 38.8114C50.5454 40.693 52.8901 41.3878 55.9007 41.3878C60.2139 41.3878 63.1666 39.3904 63.1666 35.9456C63.1666 32.5876 61.0245 31.3718 57.8981 31.0824ZM80.2458 23.0638C77.38 23.0638 75.5852 23.6428 73.9931 25.6402C73.9641 25.6691 75.701 27.3481 75.701 27.3481C76.7431 25.8717 77.93 25.3217 80.2168 25.3217C83.4879 25.3217 84.7906 26.6244 84.7906 29.2297V30.9376H79.4063C75.4115 30.9376 73.2404 32.964 73.2404 36.0903C73.2404 37.5088 73.7036 38.8404 74.572 39.7088C75.701 40.8667 77.1484 41.3299 79.6089 41.3299C82.0116 41.3299 83.3143 40.8667 84.7617 39.4193V41.1272H87.367V28.9981C87.3959 25.1481 85.0511 23.0638 80.2458 23.0638ZM84.7906 34.8166C84.7906 36.293 84.5011 37.3351 83.8932 37.914C82.7643 39.014 81.4327 39.1009 79.8984 39.1009C77.0615 39.1009 75.7878 38.1167 75.7878 36.0614C75.7878 34.0061 77.0905 32.9061 79.7826 32.9061H84.7906V34.8166ZM97.6434 25.3796C99.3513 25.3796 100.393 25.9007 101.754 27.377L103.491 25.6691C101.667 23.7007 100.104 23.0638 97.6434 23.0638C93.1276 23.0638 89.7407 26.1033 89.7407 32.2113C89.7407 38.3193 93.1565 41.3588 97.6434 41.3588C100.104 41.3588 101.667 40.693 103.52 38.6956L101.754 36.9877C100.422 38.464 99.3513 39.014 97.6434 39.014C95.9066 39.014 94.4592 38.3193 93.5039 36.9877C92.6644 35.8298 92.346 34.4403 92.346 32.1824C92.346 29.9244 92.6644 28.5639 93.5039 27.377C94.4592 26.0744 95.9066 25.3796 97.6434 25.3796ZM120.02 23.2664H116.749L108.644 31.1402V15.3058H106.038V41.1562H108.644V34.6429L111.828 31.4587L117.82 41.1562H121.062L113.652 29.635L120.02 23.2664ZM132.323 22.3401C129.573 22.3401 127.72 23.4112 126.562 24.627C124.883 26.3639 124.449 28.477 124.449 31.835C124.449 35.2219 124.883 37.3351 126.562 39.0719C127.691 40.2877 129.573 41.3588 132.323 41.3588C135.073 41.3588 136.955 40.2877 138.112 39.0719C139.791 37.3351 140.226 35.2219 140.226 31.835C140.226 28.477 139.791 26.3639 138.112 24.627C136.955 23.4112 135.073 22.3401 132.323 22.3401ZM134.494 36.3509C133.944 36.9009 133.249 37.1614 132.323 37.1614C131.397 37.1614 130.702 36.8719 130.181 36.3509C129.225 35.3956 129.11 33.7455 129.11 31.806C129.11 29.8665 129.225 28.2744 130.181 27.3191C130.731 26.7691 131.397 26.5086 132.323 26.5086C133.249 26.5086 133.973 26.7981 134.494 27.3191C135.449 28.2744 135.565 29.8955 135.565 31.806C135.565 33.7455 135.449 35.3956 134.494 36.3509ZM152.557 22.5428L148.794 34.035L145.002 22.5428H140.139L146.999 41.1562H150.647L157.479 22.5428H152.557ZM165.352 22.3401C160.518 22.3401 157.247 25.756 157.247 31.835C157.247 39.3614 161.473 41.3588 165.844 41.3588C169.202 41.3588 171.026 40.3167 172.908 38.4351L170.1 35.6851C168.913 36.8719 167.929 37.4219 165.873 37.4219C163.268 37.4219 161.792 35.6851 161.792 33.2824H173.429V31.1981C173.458 26.1033 170.534 22.3401 165.352 22.3401ZM161.821 30.0981C161.85 29.2876 161.965 28.7665 162.255 28.1007C162.747 27.0007 163.789 26.1612 165.352 26.1612C166.915 26.1612 167.958 26.9718 168.45 28.1007C168.739 28.7665 168.855 29.2876 168.884 30.0981H161.821ZM180.318 24.3375V22.5428H175.774V41.1562H180.405V29.9534C180.405 27.6086 181.968 26.5375 183.416 26.5375C184.545 26.5375 185.153 26.9139 185.876 27.6376L189.379 24.1059C188.105 22.8322 186.803 22.3691 184.979 22.3691C183.01 22.3401 181.216 23.2664 180.318 24.3375ZM190.826 20.6032V41.1272H195.458V26.4507H198.903V22.9191H195.487V20.8927C195.487 19.8217 196.037 19.2138 197.137 19.2138H198.932V15.2769H196.298C192.476 15.2769 190.826 17.969 190.826 20.6032ZM218.008 22.3401C215.258 22.3401 213.406 23.4112 212.248 24.627C210.569 26.3639 210.135 28.477 210.135 31.835C210.135 35.2219 210.569 37.3351 212.248 39.0719C213.377 40.2877 215.258 41.3588 218.008 41.3588C220.758 41.3588 222.64 40.2877 223.798 39.0719C225.477 37.3351 225.911 35.2219 225.911 31.835C225.911 28.477 225.477 26.3639 223.798 24.627C222.669 23.4112 220.758 22.3401 218.008 22.3401ZM220.208 36.3509C219.658 36.9009 218.964 37.1614 218.037 37.1614C217.111 37.1614 216.416 36.8719 215.895 36.3509C214.94 35.3956 214.824 33.7455 214.824 31.806C214.824 29.8665 214.94 28.2744 215.895 27.3191C216.445 26.7691 217.111 26.5086 218.037 26.5086C218.964 26.5086 219.687 26.7981 220.208 27.3191C221.164 28.2744 221.279 29.8955 221.279 31.806C221.279 33.7455 221.164 35.3956 220.208 36.3509ZM247.854 22.5428L244.843 34.035L241.022 22.5428H237.635L233.843 34.035L230.832 22.5428H225.911L231.614 41.1562H235.435L239.314 29.4902L243.193 41.1562H247.014L252.746 22.5428H247.854ZM205.763 35.5403V15.2769H201.132V35.8298C201.132 38.464 202.753 41.1562 206.574 41.1562H209.208V37.2193H207.413C206.227 37.2193 205.763 36.6403 205.763 35.5403ZM70.4035 26.1033L72.8062 23.7007H67.8561V17.7953H65.2508V36.3509C65.2508 39.014 66.7851 41.1562 69.8246 41.1562H71.6772V38.8983H70.2878C68.6088 38.8983 67.8561 37.914 67.8561 36.293V26.1033H70.4035Z" fill="#222426"></path>
                        </svg>

                        <div class="feat">
                            <div>
                                <svg width="26" height="26" class="svg-icon mtn2" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.99999 18.4002L0.799988 22.6002V3.0002C0.799988 1.4602 2.05999 0.200195 3.59999 0.200195H20.4C21.9251 0.200195 23.2 1.47513 23.2 3.0002V15.6002C23.2 17.1253 21.9251 18.4002 20.4 18.4002H4.99999ZM15.85 12.8422C16.8553 11.6798 17.222 10.2446 17.222 8.7262C17.222 6.41444 16.2318 4.22493 13.9933 3.36333C12.6987 2.86508 11.0646 2.86755 9.7695 3.36246C7.60473 4.18971 6.38577 6.4455 6.52599 8.7262C6.52599 10.5322 7.01599 11.9322 7.96799 12.9262C9.01575 13.9543 10.4925 14.5087 11.958 14.4242C12.826 14.4242 13.638 14.2702 14.352 13.9482C15.262 14.5642 15.752 14.9002 15.836 14.9282C16.158 15.1102 16.48 15.2502 16.816 15.3482L17.642 13.7662C17.0047 13.5428 16.4016 13.2318 15.85 12.8422ZM14.072 11.5822C13.4355 11.1003 12.7267 10.7223 11.972 10.4622L11.342 11.7222C11.804 11.8902 12.266 12.1282 12.714 12.4222C12.434 12.5202 12.126 12.5762 11.804 12.5762C10.95 12.5762 10.236 12.2542 9.67599 11.6242C8.467 10.2339 8.46692 7.26063 9.67599 5.8702C10.7974 4.60837 12.9647 4.60789 14.086 5.8702C15.3491 7.29117 15.2966 10.1127 14.072 11.5822Z" fill="#1B75D0"></path>
                                </svg>
                            </div>
                            <div>Get unstuck - ask a question!</div>
                        </div>
                        <div class="feat">
                            <div>
                                <svg width="26" height="26" class="svg-icon mtn2">
                                    <path d="M14.8 3a2 2 0 00-1.4.6l-10 10a2 2 0 000 2.8l8.2 8.2c.8.8 2 .8 2.8 0l10-10c.4-.4.6-.9.6-1.4V5a2 2 0 00-2-2h-8.2zm5.2 7a2 2 0 110-4 2 2 0 010 4z"></path>
                                    <path opacity=".5" d="M13 0a2 2 0 00-1.4.6l-10 10a2 2 0 000 2.8c.1-.2.3-.6.6-.8l10-10a2 2 0 011.4-.6h9.6a2 2 0 00-2-2H13z"></path>
                                </svg>
                            </div>
                            <div>Save your favorite posts, tags and filters</div>
                        </div>
                        <div class="feat">
                            <div>
                                <svg width="26" height="26" class="svg-icon mtn2">
                                    <path d="M21 4V2H5v2H1v5c0 2 2 4 4 4v1c0 2.5 3 4 7 4v3H7s-1.2 2.3-1.2 3h14.4c0-.6-1.2-3-1.2-3h-5v-3c4 0 7-1.5 7-4v-1c2 0 4-2 4-4V4h-4zM5 11c-1 0-2-1-2-2V6h2v5zm11.5 2.7l-3.5-2-3.5 1.9L11 9.8 7.2 7.5h4.4L13 3.8l1.4 3.7h4L15.3 10l1.4 3.7h-.1zM23 9c0 1-1 2-2 2V6h2v3z"></path>
                                </svg>
                            </div>
                            <div>Answer questions and earn reputation</div>
                        </div>

                    </div>
                </div>
                <div>

                    <div>
                    </div>
                    <div id="formContainer">
                        <form id="login-form" class="signupform" action="" method="POST">

                            <h1 class="flex--item fs-headline1 fw-bold lh-xs mb8 ws-nowrap">Create your account</h1>

                            <div class="omrs-input-group">
                                <label class="omrs-input-filled">
                                    <input type="email" name="email" required>
                                    <span class="omrs-input-label">Email</span>


                                </label>
                            </div>
                            <p class="flex--item s-input-message js-error-message d-none">
                            </p>
                            <p class="flex--item s-input-message js-error-message d-none">

                            </p>

                            <div class="omrs-input-group">
                                <label class="omrs-input-filled">
                                    <input type="password" name="password" id="password" required>
                                    <span class="omrs-input-label">Password</span>


                                </label>
                            </div>
                            <p>
                                Must contain 8+ characters, at least 1 letter and 1 number.
                            </p>

                            <button class="button-6" type="submit" name="submit-button">Sign up</button>


                    </div>


                    <div id="openid-buttons" class="flex--item d-flex flex__fl-grow1 fd-column gs8 gsy g8">
                        <button class="button-6" data-provider="google" data-oauthserver="https://accounts.google.com/o/oauth2/auth" data-oauthversion="2.0">
                            <svg aria-hidden="true" class="native svg-icon iconGoogle" width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#4285F4" d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 0 0 2.38-5.88c0-.57-.05-.66-.15-1.18Z"></path>
                                <path fill="#34A853" d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 0 1-7.18-2.54H1.83v2.07A8 8 0 0 0 8.98 17Z"></path>
                                <path fill="#FBBC05" d="M4.5 10.52a4.8 4.8 0 0 1 0-3.04V5.41H1.83a8 8 0 0 0 0 7.18l2.67-2.07Z"></path>
                                <path fill="#EA4335" d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 0 0 1.83 5.4L4.5 7.49a4.77 4.77 0 0 1 4.48-3.3Z"></path>
                            </svg>
                            Sign up with Google
                        </button>
                        <button class="button-6" data-provider="github" data-oauthserver="https://github.com/login/oauth/authorize" data-oauthversion="2.0">
                            <svg aria-hidden="true" class="svg-icon iconGitHub" width="18" height="18" viewBox="0 0 18 18">
                                <path fill="#010101" d="M9 1a8 8 0 0 0-2.53 15.59c.4.07.55-.17.55-.38l-.01-1.49c-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.42 7.42 0 0 1 4 0c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48l-.01 2.2c0 .21.15.46.55.38A8.01 8.01 0 0 0 9 1Z"></path>
                            </svg>
                            Sign up with GitHub
                        </button>
                    </div>

                    </form>
                </div>



                <div class="haveAcc">
                    Already have an account? <a href="login.php" name="login">Log in</a>


                </div>

            </div>
        </div>


    </div>
    </div>
</body>

</html>

<?php
include("footer.html");


// Insert user into the database
if (isset($_POST['submit-button'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security

    // Check if email already exists
    $checkEmail = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($checkEmail->num_rows > 0) {
        echo "<script>alert('Email already exists. Please use another email.');</script>";
    } else {
        // Insert user into the database
        $insert = $conn->query("INSERT INTO users (email, password) VALUES ('$email', '$password')");
        if ($insert) {
            // Set session variables
            $_SESSION['user_id'] = $conn->insert_id; // Or any other user identifier
            $_SESSION['email'] = $email;
            $_SESSION['loggedin'] = true;

            // Optionally redirect to a different page
            echo "<script>window.location.href = 'index.php';</script>";
            exit;
            // Adjust the redirection URL as necessary
            exit; // Prevent further script execution after redirection
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    }
}

$conn->close();
?>