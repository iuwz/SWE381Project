<?php
session_start(); // Start the session or continue the existing one

// Check if the session variable for logged-in status is set and true
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    include("logged_in_header.html"); // Path to the header file for logged-in users
} else {
    include("header.html"); // Path to the default header file for guests
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stack Overflow - Where Developers Learn, Share, &amp; Build Careers</title>
    <link rel="shortcut icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/favicon.ico?v=ec617d715196">
    <link rel="apple-touch-icon" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a">
    <link rel="image_src" href="https://cdn.sstatic.net/Sites/stackoverflow/Img/apple-touch-icon.png?v=c78bd457575a">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>



    <section class="hero">
        <div class="hero-content">
            <h1 class="hero-title">We <span>
                    <3 </span> people who code</h1>
            <p class="hero-paragraph">
                We build products that empower developers and connect them to solutions that enable productivity,
                growth, and discovery.
            </p>
            <div class="hero-options">
                <a href="#" class="btn btn-developers">For developers</a>
                <a href="#" class="btn btn-businesses">For businesses</a>
            </div>
        </div>
    </section>


    <section class="for-developers">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title">For developers, by developers
                </h2>
                <div class="section-line"></div>
                <p class="section-description">Stack Overflow is an <a href="#">open community</a> for anyone that
                    codes. We help you get answers to your toughest coding questions, share knowledge with your
                    coworkers in private, and find your next dream job.
                </p>
            </div>
            <div class="options">
                <div class="option">
                    <div class="option-icon">
                        <img src="https://cdn.sstatic.net/Img/home/public-qa.svg?v=d82acaa7df9f" alt="Public Q & A">
                    </div>
                    <div class="option-title">
                        Public Q&A
                    </div>
                    <div class="option-description">
                        Get answers to more than 16.5 million questions and give back by sharing your knowledge with
                        others.
                        <a href="#">Sign up</a> for an account.
                    </div>
                    <div class="option-button">
                        <a href="#" class="option-link btn btn-dark-blue">
                            Browse questions
                        </a>
                    </div>
                </div>
                <div class="option">
                    <div class="option-icon">
                        <img src="https://cdn.sstatic.net/Img/home/private-qa.svg?v=2c1de180b6d7" alt="Private Q & A">
                    </div>
                    <div class="option-title">
                        Public Q&A
                    </div>
                    <div class="option-description">
                        Level up with Stack Overflow while you work. Share knowledge privately with your coworkers using
                        our flagship Q&A engine.
                    </div>
                    <div class="option-button">
                        <a href="#" class="option-link btn btn-orange">
                            Try for free
                        </a>
                    </div>
                </div>
                <div class="option">
                    <div class="option-icon">
                        <img src="https://cdn.sstatic.net/Img/home/jobs.svg?v=931d6c0863ee" alt="Browse jobs
">
                    </div>
                    <div class="option-title">
                        Public Q&A
                    </div>
                    <div class="option-description">
                        Find the right job through high quality listings and search for roles based on title, technology
                        stack, salary, location, and more.


                    </div>
                    <div class="option-button">
                        <a href="#" class="option-link btn btn-dark-blue">
                            Find a job
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="for-businesses">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title">For businesses, by developers</h2>
                <div class="section-line"></div>
                <p class="section-description">Our mission is to help developers write the script of the future. This
                    means helping you find and hire skilled developers for your business and providing them the tools
                    they need to share knowledge and work effectively.</p>
            </div>



            <div class="options">
                <div class="option">
                    <div class="option-icon">
                        <img src="https://cdn.sstatic.net/Img/home/private-questions.svg?v=a4f1cfb08f7e" alt="Private Q&A">
                    </div>
                    <div class="option-description">
                        Quickly find and share internal knowledge with <a href="#" class="option-link">Private Q&A</a>
                    </div>
                </div>
                <div class="option">
                    <div class="option-icon">
                        <img src="https://cdn.sstatic.net/Img/home/find-candidate.svg?v=9099aa106ad3" alt="Talent solutions">
                    </div>
                    <div class="option-description">
                        Find the perfect candidate for your growing technical team with <a href="#" class="option-link">Talent solutions</a>


                    </div>
                </div>
                <div class="option">
                    <div class="option-icon">
                        <img src="https://cdn.sstatic.net/Img/home/accelerate.svg?v=9d4c2786ff02" alt=" Advertising platform">
                    </div>
                    <div class="option-description">
                        Accelerate the discovery of your products or services through our <a href="#" class="option-link">Advertising platform</a>
                    </div>
                </div>
            </div>


        </div>
    </section>


    <section class="teams">
        <div class="container">
            <div class="teams-head">
                <h2 class="teams-title">Unlock siloed knowledge with Stack Overflow for Teams
                </h2>
                <p class="teams-description">Wikis, chat messages, or formal documentation for knowledge management
                    aren’t effective. Our question and answer format is a proven approach for accessing the right
                    information in less time.
                </p>
                <div class="teams-details">
                    <a href="#" class="btn btn-orange">Learn More</a>
                </div>
            </div>


        </div>


        <div class="teams-footer">
            <a class="teams-footer-item">
                <img src="https://cdn.sstatic.net/Img/product/teams/endorsements/g2.svg?v=670bf9279910" alt="">
                <div class="teams-footer-text"><strong>Leader</strong> <span>Summer 2020</span> </div>
            </a>
            <a class="teams-footer-item">
                <img src="https://cdn.sstatic.net/Img/product/teams/endorsements/g2.svg?v=670bf9279910" alt="">
                <div class="teams-footer-text"><strong>Users Love Us</strong> </div>
            </a>
            <a class="teams-footer-item">
                <img src="https://cdn.sstatic.net/Img/product/teams/endorsements/fastco.svg?v=5ebc802a76c7" alt="">
                <div class="teams-footer-text"><strong>Most Innovative Companies</strong> <span>2019</span> </div>
            </a>
        </div>


        </div>
    </section>

    <section class="hire">
        <div class="container">
            <div class="hire-content">
                <div class="hire-item">
                    <img src="https://cdn.sstatic.net/Img/home/find-candidate.svg?v=9099aa106ad3" alt="" class="hire-icon">
                    <h4 class="hire-item-title">Hire your technical talent</h4>
                    <p class="hire-item-description">We help expand your technical hiring strategy to promote your
                        employer brand and highlight relevant open roles to our community of over 100 million developers
                        and technologists.</p>
                    <a href="#" class="btn btn-orange">Stack Overflow Talent</a>
                </div>
                <div class="hire-item">
                    <img src="https://cdn.sstatic.net/Img/home/accelerate.svg?v=9d4c2786ff02" alt="" class="hire-icon">
                    <h4 class="hire-item-title">Reach developers worldwide
                    </h4>
                    <p class="hire-item-description">Use the world’s largest resource for people who code to help you
                        increase awareness and showcase your product or service across Stack Overflow’s network of Q&A
                        sites. </p>
                    <a href="#" class="btn btn-orange">Stack Overflow Advertising</a>
                </div>
            </div>
        </div>
    </section>

    <section class="questions">
        <div class="container">
            <div class="questions-content">
                <div class="questions-header">
                    <h3 class="question-title">Questions are everywhere, answers are on Stack Overflow</h3>
                </div>
                <div class="questions-body">
                    <div class="questions-body-items">
                        <div class="questions-body-item" data-id="0">
                            <img src="https://cdn.sstatic.net/Img/home/ask-a-question.svg?v=f4f2050b0297" alt="" class="question-item-icon">
                            <div class="question-item-text">Ask a question</div>
                            <div class="question-arrow-right"></div>
                        </div>
                        <div class="questions-body-item" data-id="1">
                            <img src="https://cdn.sstatic.net/Img/home/votes.svg?v=748a8f48a8e2" alt="" class="question-item-icon">
                            <div class="question-item-text">Vote on everything</div>
                            <div class="question-arrow-right"></div>
                        </div>
                        <div class="questions-body-item" data-id="2">
                            <img src="https://cdn.sstatic.net/Img/home/answer.svg?v=4cd8048a676c" alt="" class="question-item-icon">
                            <div class="question-item-text">Answer questions</div>
                            <div class="question-arrow-right"></div>
                        </div>
                    </div>
                    <div class="questions-body-item-content">
                        <img src="https://cdn.sstatic.net/Img/home/illo-feats-vote.svg?v=9d2eb0efdc17" alt="" class="question-item-content-img">
                        <h4 class="question-item-content-text">
                            Accept the answer which solved your problem to let others benefit from the valuable
                            information.
                        </h4>
                        <a href="#" class="btn btn-orange question-item-content-btn">Create an account</a>
                    </div>
                    <div class="questions-body-items">
                        <div class="questions-body-item" data-id="3">
                            <img src="https://cdn.sstatic.net/Img/home/tags.svg?v=913379eb09eb" alt="" class="question-item-icon">
                            <div class="question-item-text">Tag your question</div>
                            <div class="question-arrow-left"></div>
                        </div>
                        <div class="questions-body-item" data-id="4">
                            <img src="https://cdn.sstatic.net/Img/home/accept.svg?v=27d5be078970" alt="" class="question-item-icon">
                            <div class="question-item-text">Accept a answer</div>
                            <div class="question-arrow-left"></div>
                        </div>
                        <div class="questions-body-item" data-id="5">
                            <img src="https://cdn.sstatic.net/Img/home/get-recognized.svg?v=3b339d9aa10c" alt="" class="question-item-icon">
                            <div class="question-item-text">Get recognized</div>
                            <div class="question-arrow-left"></div>
                        </div>
                    </div>
                </div>
                <div class="questions-footer">
                    <h3 class="question-title">Learn and grow with Stack Overflow</h3>
                    <div class="questions-grid">
                        <div class="questions-grid-item">
                            <div class="grid-item-img">
                                <img src="https://cdn.sstatic.net/Img/home/developer.svg?v=b930de7967a7" alt="">
                            </div>
                            <h4 class="grid-item-title">Write the script of the future</h4>
                            <p class="grid-item-description">Get your coding questions answered to learn, build, and
                                level up whether you’re beginning with
                                <a href="#">JavaScript</a> or a <a href="#">React</a> professional.
                            </p>
                        </div>
                        <div class="questions-grid-item">
                            <div class="grid-item-img">
                                <img src="https://cdn.sstatic.net/Img/home/open-source.svg?v=847b604fd2ab" alt="">
                            </div>
                            <h4 class="grid-item-title">Support open source
                            </h4>
                            <p class="grid-item-description">Reach users of your project by following tags, answering
                                newcomer questions, and empowering experts in the community.
                                <a href="#"> Read the curl project creator’s story.</a>


                            </p>
                        </div>
                        <div class="questions-grid-item">
                            <div class="grid-item-img">
                                <img src="https://cdn.sstatic.net/Img/home/advocate.svg?v=4b03cfb93502" alt="">
                            </div>
                            <h4 class="grid-item-title">Acquire and share knowledge
                            </h4>
                            <p class="grid-item-description">Answer questions and <a href="#">gain insights</a> from an
                                audience of developers using your technology on Stack Overflow.
                            </p>
                        </div>
                        <div class="questions-grid-item">
                            <div class="grid-item-img">
                                <img src="https://cdn.sstatic.net/Img/home/career-switcher.svg?v=a41416ff19df" alt="">
                            </div>
                            <h4 class="grid-item-title">Find career opportunities
                            </h4>
                            <p class="grid-item-description">Create a profile that shows off your expertise and
                                credentials to help you make your next move. Start your
                                <a href="#">Developer Story</a>.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="jobs">
        <div class="container">

            <div class="jobs-content">
                <h3 class="jobs-title">Looking for a job?</h3>
                <div class="jobs-body">
                    <div class="jobs-items">
                        <div class="column">
                            <div class="jobs-item">
                                <img src="https://cdn.sstatic.net/Img/home/jobs-tech.svg?v=42f011c01763" alt="" class="jobs-item-img">
                                <p class="jobs-item-description">Browse jobs by technology</p>
                            </div>
                            <div class="jobs-item">
                                <img src="https://cdn.sstatic.net/Img/home/jobs-salary.svg?v=401840ff8931" alt="" class="jobs-item-img">
                                <p class="jobs-item-description">Browse jobs by salary</p>
                            </div>
                        </div>
                        <div class="column">
                            <div class="jobs-item">
                                <img src="https://cdn.sstatic.net/Img/home/jobs-visa.svg?v=1f3acc6dc772" alt="" class="jobs-item-img">
                                <p class="jobs-item-description">Browse jobs by visa sponsorship</p>
                            </div>
                            <div class="jobs-item">
                                <img src="https://cdn.sstatic.net/Img/home/jobs-remote.svg?v=a4b4d1b5a80c" alt="" class="jobs-item-img">
                                <p class="jobs-item-description">Browse remote-friendly jobs</p>
                            </div>
                        </div>
                    </div>
                    <div class="jobs-btn">
                        <div class="btn btn-orange jobs-btn">View all jobs</div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="assets/js/main.js"></script>
</body>

</html>
<?php
include("footer.html");
?>