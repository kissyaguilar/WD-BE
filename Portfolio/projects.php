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
    .btn-primary {
        background-color: #3b074d;
        border-color: #3b074d;
        color: white;
    }

    .btn-primary:hover {
        background-color: #852d69;
        border-color: #852d69;
    }

    .projects {
        text-align: center !important;
        margin-top: 60px;
        padding: 40px
    }

    .projects .card {
        background-color: transparent;
        color: rgb(253, 253, 253);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        background-image: url('images/bgProjCard.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.7;
        z-index: 1;
        border-radius: 5px;
    }

    .projects .card * {
        position: relative;
        z-index: 2;
    }

    .projects .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 10px 20px rgba(166, 160, 160, 0.2);
    }

    .projects .card {
        animation: fadeIn 1.0s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
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

    <div class="projects">
        <div class="container text-center py-5">
            <span class="display-3 auto-type"></span>
        </div>
        <div class="row my-5" id="container">
        </div>
    </div>

    <script>
        var contents = [
            {
                "link": "Project1",
                "description": "Inside and Out"
            },

        ]

        var container = document.getElementById("container");

        for (var i = 0; i < contents.length; i++) {

            var courseCode = "WD";
            var title = contents[i].link;
            var siteLink = "https://kissyaguilar/WD-BE/" + title;
            var githubLink = "https://github.com/kissyaguilar/WD-BE/tree/main/tree/main/" + title;


            var description = contents[i].description;

            container.innerHTML += `
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-3">
                      <div class="card my-3 rounded-5 overflow-hidden" style="height: fit-content">
                        <embed type="text/html" src="`+ siteLink + `" width="100%" height="200px">
                        <div class="card-body shadow-lg">
                          <h4 class="card-title">`+ title + `</h4>
                         <h8 <p class="card-text text-body-primary">`+ description + ` </p> </h8>
                          <a href="`+ githubLink + `" class="btn btn-primary">GitHub</a>
                          <a href="`+ siteLink + `" class="btn btn-primary">Site</a>
                        </div>
                      </div>
                    </div>
                  `;
        }
    </script>

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
    </div>

    <!-- Typed.js Typing Effect -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
        var typed = new Typed(".auto-type", {
            strings: ["Projects"],
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