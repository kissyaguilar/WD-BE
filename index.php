<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kissy Aguilar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="Portfolio/images/kissyTab.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="Portfolio/stylesHome.css">
</head>
<style>
    /* Import Google Fonts */
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

    /* Background Styling */
    body {
        background: linear-gradient(to bottom, #07444d, #46c0d2);
        /* Consistent gradient */
        color: rgba(242, 230, 238, 1);
        overflow: auto;
        position: relative;
        min-height: 100vh;
        height: 100%;
    }

    /* Logo Styling */
    .logo-image {
        width: 35px;
        height: auto;
    }


    /* Profile Section */
    #Profile {
        margin-top: 80px;
    }

    .profile-image {
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2), 0 0 25px rgb(40, 112, 122, 0.8);
        animation: fadeIn 2s ease-in-out;
    }


    .auto-type {
        font-size: 4rem;
        font-weight: bold;
    }

    @media (max-width: 768px) {
        .auto-type {
            font-size: 2.5rem;
        }

        .profile-image {
            max-width: 75%;
        }

        .display-5 {
            font-size: 2rem;
        }

    }

    .typed-cursor {
        font-size: 3rem;
        font-weight: bold;
        color: white;
    }

    /* Social Links */
    .sociallinks {
        display: flex;
        flex-direction: row;
        justify-content: flex-start;
        align-items: center;
        position: absolute;
        bottom: 80px;
        left: 110px;
        gap: 25px;
    }

    .sociallinks a {
        font-size: 40px;
        color: rgba(242, 230, 238, 1);
        transition: color 0.3s ease;
    }

    .sociallinks a:hover {
        color: rgb(40, 112, 122);
        text-shadow: 0 0 10px rgb(255, 255, 255), 0 0 20px rgb(255, 255, 255), 0 0 30px rgb(0, 94, 128);
        transition: all 0.3s ease;
    }

    @media (max-width: 768px) {
        .sociallinks {
            position: static;
            bottom: auto;
            left: auto;
            justify-content: center;
            margin-top: 20px;
        }

        .sociallinks a {
            font-size: 30px;
        }
    }

    /* Starry Background */
    .stars {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: -1;
        pointer-events: none;
        background: linear-gradient(to bottom, #4aadcc, #02121a);
        /* Ensure gradient consistency */
    }

    .star {
        position: absolute;
        width: 2px;
        height: 2px;
        background: rgba(255, 255, 255, 0.8);
        border-radius: 50%;
        animation: moveStars linear infinite;
        box-shadow: 0 0 5px rgba(255, 255, 255, 1.0);
    }

    @keyframes moveStars {
        0% {
            transform: translateY(0);
            opacity: 1;
        }

        100% {
            transform: translateY(-100vh);
            opacity: 0;
        }
    }

    /* Navbar Styling */
    .header {
        background-color: 337e95;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 15px 0;
        z-index: 100;
        box-shadow: 0 4px 15px rgba(16, 0, 10, 0.4);
    }

    .navbar a {
        font-size: 18px;
        color: rgba(242, 230, 238, 1);
        text-decoration: none;
        font-weight: 500;
        margin-left: 20px;
        padding: 10px 15px;
        border-radius: 5px;
        position: relative;
        transition: color 0.3s;
    }

    .navbar a:hover {
        color: #18697c;
    }

    .navbar a:hover::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 10px;
        height: 10px;
        background: radial-gradient(circle, #fff, rgba(255, 255, 255, 0.6));
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.8), 0 0 15px rgba(255, 255, 255, 0.6), 0 0 25px rgba(255, 255, 255, 0.4);
        animation: starBurst 1.5s ease-out forwards;
    }

    /* Starburst Animation */
    @keyframes starBurst {
        0% {
            transform: translate(-50%, -50%) scale(0);
            opacity: 1;
        }

        50% {
            transform: translate(-50%, -50%) scale(1.5);
            opacity: 0.5;
        }

        100% {
            transform: translate(-50%, -50%) scale(0);
            opacity: 0;
        }
    }
</style>

<body>
    <!-- Header / Navbar -->
    <header class="header navbar navbar-expand-lg">
        <div class="container">
            <a href="#" class="navbar-brand logo">
                <img src="Portfolio/images/kissyLogo.png" alt="Logo" class="logo-image">
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Portfolio/skills.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Portfolio/projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Portfolio/resume.php">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Portfolio/education.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <!-- Profile Section -->
    <div class="container" id="Profile">
        <div class="row d-flex align-items-center" style="height: 100vh;">
            <!-- Intro -->
            <div class="col-12 col-lg-6 text-start order-2 order-lg-1">
                <h1 class="display-5">
                    Good day, I am <br />
                    <span class="display-3 auto-type"></span>
                </h1>
                <p>
                    Bachelor of Science in Information Technology
                    <br> Third-Year College
                    <br> Polytechnic University of the Philippines - Sto. Tomas Branch
                    <br> Mula sa Kasaysayan, Para sa Bayan.
                </p>
            </div>

            <!-- Image -->
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center order-1 order-lg-2">
                <img src="Portfolio/images/kissyPic.png" class="img-fluid profile-image" alt="Personal Image" />
            </div>
        </div>
    </div>


    <div class="sociallinks">
        <a href="https://github.com/kissyaguilar/kissyaguilar.github.io" target="_blank">
            <i class="fa-brands fa-github"></i>
        </a>
        <a href="https://www.linkedin.com/in/kissy-aguilar-928a97303/" target="_blank">
            <i class="fa-brands fa-linkedin"></i>
        </a>
        <a href="https://www.facebook.com/kissy.aguilar.3" target="_blank">
            <i class="fa-brands fa-facebook"></i>
        </a>
        <a href="https://www.instagram.com/kesah_ssy" target="_blank">
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://twitter.com/AguilarKissy" target="_blank">
            <i class="fa-brands fa-twitter"></i>
        </a>

        <a href="mailto:your-kissyaguilar1@gmail.com" target="_blank">
            <i class="fa-solid fa-envelope"></i>
    </div>

    <!-- Starry Background - purple -->
    <div class="stars">
        <!--stars-->
        <script>
            for (let i = 0; i < 300; i++) {
                let star = document.createElement("div");
                star.className = "star";
                star.style.left = Math.random() * 100 + "vw";
                star.style.top = Math.random() * 150 + "vh";
                star.style.animationDelay = Math.random() * 1 + "s";
                star.style.animationDuration = Math.random() * 10 + 4 + "s";
                document.querySelector(".stars").appendChild(star);
            }
        </script>

        <!-- Typing Effect -->
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
        <script>
            var typed = new Typed(".auto-type", {
                strings: ["Kissy Aguilar", "a Student", "a programmer", "a designer"],
                typeSpeed: 200,
                backSpeed: 150,
                loop: true,
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
        <script src="script.js"></script>

</body>

</html>