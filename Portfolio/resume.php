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