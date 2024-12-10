<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="" X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Kissy Aguilar</title>
    <link rel="shortcut icon" href="images/kissyTab.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesHome.css">

</head>

<style>
    #resume {
        padding-top: 120px;
        text-align: center;
        padding: 100px;
    }

    /*Duplicate CSS here to ensure it works correctly.
   This is because it doesn't always work in my browser.*/
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

    /* Logo Styling */
    .logo-image {
        width: 35px;
        height: auto;
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
                <img src="images/kissyLogo.png" alt="Logo" class="logo-image">
            </a>
            <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="skills.php">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resume.php">Resume</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="education.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Resume Section -->
    <section id="resume">
        <div class="container text-center py-5">
            <span class="display-3 auto-type"></span>
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
                    strings: ["Resume"],
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