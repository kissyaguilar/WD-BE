<?php
include("assets/view/connect.php");
include("assets/view/islandRepository.php");
include("assets/view/functions.php");

$islandRepository = fetchIslands();
$selectedIsland = $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['island_name'])
    ? $islandRepository->getByName($_POST['island_name'])
    : $islandRepository->getDefault();
$islandContents = $selectedIsland ? fetchIslandContents($selectedIsland->islandOfPersonalityID) : [];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islands of Personality and Content</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/font/font.css">
    <link rel="stylesheet" href="assets/css/listStyle.css">
    <link rel="shortcut icon" href="assets/img/kissyTab.png" type="image/png" />
    <!-- //No Bootstrap since it changes the style -->
    <style>
        .bgimg {
            background: url('assets/gif/kissy.gif') center no-repeat;
            background-size: cover;
            min-height: 100%;
        }

        .selected-thumbnail {
            border: 5px solid;
            opacity: 1 !important;
            cursor: default;
        }

        .thumbnail img {
            opacity: 0.7;
            transition: opacity 0.3s;
        }

        .thumbnail img:hover {
            opacity: 1;
        }

        .mySlides {
            transition: background-color 0.5s ease;
        }
    </style>
</head>

<body class="w3-border-left w3-border-right">
    <nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:500px" id="mySidebar">
        <div class="bgimg"></div>
    </nav>

    <div class="w3-main w3-white" style="margin-left:500px">
        <div class="w3-container">
            <div style="display: flex; justify-content: center; align-items: center; height: 100px;">
                <h2 class="w3-text-<?= strtolower($selectedIsland->color ?? 'black') ?>">List of Islands Personality
                </h2>
            </div>

            <?php foreach ($islandRepository->getAll() as $island): ?>
                <div class="w3-display-container mySlides"
                    style="display: <?= ($selectedIsland && $selectedIsland->name === $island->name) ? 'block' : 'none' ?>;">
                    <div class="w3-card"
                        style="background-color: <?= ($island->color) ?>; box-shadow: 0px 4px 15px rgba(0, 0, 1, 1);">
                        <img src="<?= $island->image ?>" style="width:100%; margin-bottom:-6px;">
                        <div class="w3-display-bottomleft w3-container" style="background-color: <?= ($island->color) ?>;">
                            <p style="font-family: 'Inside Out', sans-serif; color:white;"> <?= $island->name ?> </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <form method="post" class="w3-row-padding w3-section">
            <?php foreach ($islandRepository->getAll() as $island): ?>
                <div class="w3-col s3 thumbnail">
                    <button name="island_name" value="<?= $island->name ?>" class="w3-button"
                        style="border:none;padding:0;">
                        <img class="<?= ($selectedIsland && $selectedIsland->name === $island->name) ? 'selected-thumbnail' : '' ?>"
                            src="<?= $island->image ?>"
                            style="width:100%;cursor:pointer; <?= $selectedIsland && $selectedIsland->name === $island->name ? 'border-color: ' . $selectedIsland->color . ';' : '' ?>"
                            title="<?= $island->name ?>">
                    </button>
                </div>
            <?php endforeach; ?>
        </form>

        <div class="w3-container">
            <h4><strong>Welcome!</strong></h4>
            <p style="text-indent: 50px;">
                <?= $selectedIsland ? $selectedIsland->shortDescription : "Select an island to view its short description here." ?>
            </p>
            <h4><strong>........................................................................................................................</strong>
            </h4>
            <p style="text-indent: 50px;">
                <?= $selectedIsland ? nl2br($selectedIsland->longDescription) : "Select an island to view its detailed description here." ?>
            </p>

            <?php if ($selectedIsland): ?>
                <button onclick="document.getElementById('islandModal').style.display='block'"
                    class="w3-button w3-<?= strtolower($selectedIsland->color) ?> w3-third">
                    View <?= $selectedIsland->name ?> Content
                </button>
            <?php endif; ?>
        </div>

        <div id="islandModal" class="w3-modal">
            <div class="w3-modal-content w3-animate-opacity">
                <?php if ($selectedIsland): ?>
                    <header class="w3-container w3-<?= strtolower($selectedIsland->color) ?>">
                        <span onclick="document.getElementById('islandModal').style.display='none'"
                            class="w3-button w3-display-topright">&times;</span>
                        <h2><?= $selectedIsland->name ?></h2>
                    </header>
                    <div class="w3-container">
                        <?php if (!empty($islandContents)): ?>
                            <?php foreach ($islandContents as $content): ?>
                                <img src="<?= $content['image'] ?>" alt="<?= $selectedIsland->name ?>" style="width:100%;">
                                <h4>.................................................................................................................
                                </h4>
                                <p style="text-indent: 50px;"> <?= nl2br($content['content']) ?> </p>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No additional content available for this island.</p>
                        <?php endif; ?>
                    </div>
                    <footer class="w3-container w3-<?= strtolower($selectedIsland->color) ?>">
                        <p>End of Content</p>
                    </footer>
                <?php else: ?>
                    <header class="w3-container w3-red">
                        <span onclick="document.getElementById('islandModal').style.display='none'"
                            class="w3-button w3-display-topright">&times;</span>
                        <h2>Error</h2>
                    </header>
                    <div class="w3-container">
                        <p>No island selected or available.</p>
                    </div>
                    <footer class="w3-container w3-red">
                        <p>End of Modal</p>
                    </footer>
                <?php endif; ?>
            </div>
        </div>

        <footer class="w3-container w3-padding-16">
            Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
                class="w3-hover-text-green">w3.css</a>
        </footer>
    </div>
</body>

</html>