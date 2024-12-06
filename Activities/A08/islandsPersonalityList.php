<!DOCTYPE html>
<html lang="en">

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/font/font.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: purple;
            color: purple;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Inside Out", sans-serif;
        }

        .mySlides {
            display: none
        }

        .bgimg {
            background-image: url('assets/gif/kissy.gif');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 100%;
        }
    </style>
</head>

<body class="w3-border-left w3-border-right">

    <!-- Sidebar/menu -->
    <nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:500px" id="mySidebar">
        <div class="bgimg"></div>
    </nav>

    <!-- Top menu on small screens -->
    <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
        <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i
                class="fa fa-bars"></i></a>
    </header>

    <!-- Overlay effect for small screens -->
    <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" id="myOverlay"
        title="close side menu"></div>

    <!-- PAGE CONTENT -->
    <div class="w3-main w3-white" style="margin-left:500px">
        <div class="w3-hide-large" style="margin-top:80px"></div>

        <!-- Slideshow Header -->
        <div class="w3-container" id="apartment">
            <h2 class="w3-text-purple">List of Islands Personality</h2>
            <div class="w3-display-container mySlides">
                <img src="assets/gif/familyIsland.gif" style="width:100%;margin-bottom:-6px">
                <div class="w3-display-bottomleft w3-container w3-purple">
                    <p>Family Island</p>
                </div>
            </div>
            <div class="w3-display-container mySlides">
                <img src="assets/gif/friendIsland.gif" style="width:100%;margin-bottom:-6px">
                <div class="w3-display-bottomleft w3-container w3-purple">
                    <p>Friend Island</p>
                </div>
            </div>
            <div class="w3-display-container mySlides">
                <img src="assets/gif/studyIsland.gif" style="width:100%;margin-bottom:-6px">
                <div class="w3-display-bottomleft w3-container w3-purple">
                    <p>Study Island</p>
                </div>
            </div>
            <div class="w3-display-container mySlides">
                <img src="assets/gif/hobbyIsland.gif" style="width:100%;margin-bottom:-6px">
                <div class="w3-display-bottomleft w3-container w3-purple">
                    <p>Hobby Island</p>
                </div>
            </div>
        </div>

        <!-- Thumbnail Images -->
        <div class="w3-row-padding w3-section">
            <div class="w3-col s3">
                <img class="demo w3-opacity w3-hover-opacity-off" src="assets/gif/familyIsland.gif"
                    style="width:100%;cursor:pointer" onclick="currentDiv(1); updateDescriptions('Family Island');"
                    title="Family Island">
            </div>
            <div class="w3-col s3">
                <img class="demo w3-opacity w3-hover-opacity-off" src="assets/gif/friendIsland.gif"
                    style="width:100%;cursor:pointer" onclick="currentDiv(2); updateDescriptions('Friend Island');"
                    title="Friend Island">
            </div>
            <div class="w3-col s3">
                <img class="demo w3-opacity w3-hover-opacity-off" src="assets/gif/studyIsland.gif"
                    style="width:100%;cursor:pointer" onclick="currentDiv(3); updateDescriptions('Study Island');"
                    title="Study Island">
            </div>
            <div class="w3-col s3">
                <img class="demo w3-opacity w3-hover-opacity-off" src="assets/gif/hobbyIsland.gif"
                    style="width:100%;cursor:pointer" onclick="currentDiv(4); updateDescriptions('Hobby Island');"
                    title="Hobby Island">
            </div>
        </div>


        <div class="w3-container">
            <h4><strong>Short Description</strong></h4>
            <p id="shortDescription">Select an island to view its short description here.</p>

            <h4><strong>Long Description</strong></h4>
            <p id="longDescription">Select an island to view its detailed description here.</p>

            <button id="submitButton" class="w3-button w3-purple w3-third" onclick="openSubscribeModal()">Choose
                Island Above</button>
        </div>



        <hr>

        <!-- Footer -->
        <footer class="w3-container w3-padding-16">
            Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"
                class="w3-hover-text-purple">w3.css</a>
        </footer>
    </div>

    <!-- Subscribe Modal -->
    <div id="subscribe" class="w3-modal">
        <div class="w3-modal-content w3-animate-zoom w3-padding-large">
            <div class="w3-container w3-white w3-center">
                <i onclick="document.getElementById('subscribe').style.display='none'"
                    class="fa fa-remove w3-button w3-xlarge w3-transparent"></i>
                <h2 class="w3-wide">Explore Island Content</h2>
                <div id="modalContent"></div> <!-- Dynamic Content Area -->
                <button class="w3-button w3-padding-large w3-purple w3-margin-bottom"
                    onclick="document.getElementById('subscribe').style.display='none'">Close</button>
            </div>
        </div>
    </div>

    <script>
        // Sidebar toggle
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("myOverlay").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("myOverlay").style.display = "none";
        }

        // Function to open the subscribe modal
        function openSubscribeModal() {
            document.getElementById('subscribe').style.display = 'block';
        }

        // Slideshow control
        let slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            let i, x = document.getElementsByClassName("mySlides"), dots = document.getElementsByClassName("demo");
            if (n > x.length) slideIndex = 1;
            if (n < 1) slideIndex = x.length;
            for (i = 0; i < x.length; i++) x[i].style.display = "none";
            for (i = 0; i < dots.length; i++) dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
            x[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " w3-opacity-off";
        }
    </script>

    <script>
        // Update descriptions and open modal content based on the selected island
        function updateDescriptions(island) {
            const shortDescription = document.getElementById('shortDescription');
            const longDescription = document.getElementById('longDescription');
            const submitButton = document.getElementById('submitButton');

            if (island === 'Family Island') {
                shortDescription.innerHTML = "A place for family bonding.";
                longDescription.innerHTML = "Family Island is perfect for bonding moments with your loved ones. Enjoy activities that bring the family closer in a relaxing and warm environment.";
                submitButton.innerHTML = "View Family Island Content"; // Button Text
                submitButton.onclick = function () { openIslandContent('Family Island'); };
            } else if (island === 'Friend Island') {
                shortDescription.innerHTML = "Create memories with friends.";
                longDescription.innerHTML = "Friend Island is designed for you and your friends to hang out, share laughs, and strengthen connections. It's a hub for friendship and fun.";
                submitButton.innerHTML = "View Friend Island Content"; // Button Text
                submitButton.onclick = function () { openIslandContent('Friend Island'); };
            } else if (island === 'Study Island') {
                shortDescription.innerHTML = "Focus on learning and growth.";
                longDescription.innerHTML = "Study Island offers a quiet and serene environment, ideal for focused learning, research, and personal development.";
                submitButton.innerHTML = "View Study Island Content"; // Button Text
                submitButton.onclick = function () { openIslandContent('Study Island'); };
            } else if (island === 'Hobby Island') {
                shortDescription.innerHTML = "Explore your creativity.";
                longDescription.innerHTML = "Hobby Island is where you can immerse yourself in your favorite hobbies and creative pursuits. Perfect for art, music, or anything you love doing.";
                submitButton.innerHTML = "View Hobby Island Content"; // Button Text
                submitButton.onclick = function () { openIslandContent('Hobby Island'); };
            } else {
                shortDescription.innerHTML = "Select an island to view its short description here.";
                longDescription.innerHTML = "Select an island to view its detailed description here.";
                submitButton.innerHTML = "Choose Island"; // Default Button Text
                submitButton.onclick = openSubscribeModal; // Default modal trigger
            }
        }

        // Open modal with dynamic content based on the island
        function openIslandContent(island) {
            const modalContent = document.getElementById('modalContent');

            if (island === 'Family Island') {
                modalContent.innerHTML = `
                    <h3>Family Island Content</h3>
                    <img src="assets/gif/fam1.gif" style="width:100%" alt="Family Activity 1">
                    <p>Join in family activities like bonding exercises and games.</p>
                    <img src="assets/gif/fam2.gif" style="width:100%" alt="Family Activity 2">
                    <p>Experience nature walks and picnics with your loved ones.</p>
                    <img src="assets/gif/familyIsland.gif" style="width:100%" alt="Family Activity 3">
                    <p>Engage in creative activities for all ages.</p>
                `;
            } else if (island === 'Friend Island') {
                modalContent.innerHTML = `
                    <h3>Friend Island Content</h3>
                    <img src="assets/friend1.jpg" style="width:100%" alt="Friend Activity 1">
                    <p>Create lasting memories with friends through exciting adventures.</p>
                    <img src="assets/friend2.jpg" style="width:100%" alt="Friend Activity 2">
                    <p>Enjoy fun games and experiences with your best buddies.</p>
                    <img src="assets/friend3.jpg" style="width:100%" alt="Friend Activity 3">
                    <p>Challenge each other in creative competitions.</p>
                `;
            } else if (island === 'Study Island') {
                modalContent.innerHTML = `
                    <h3>Study Island Content</h3>
                    <img src="assets/study1.jpg" style="width:100%" alt="Study Activity 1">
                    <p>Immerse yourself in a quiet environment for focused learning.</p>
                    <img src="assets/study2.jpg" style="width:100%" alt="Study Activity 2">
                    <p>Engage in deep research and personal development.</p>
                    <img src="assets/study3.jpg" style="width:100%" alt="Study Activity 3">
                    <p>Expand your knowledge with structured study sessions.</p>
                `;
            } else if (island === 'Hobby Island') {
                modalContent.innerHTML = `
                    <h3>Hobby Island Content</h3>
                    <img src="assets/hobby1.jpg" style="width:100%" alt="Hobby Activity 1">
                    <p>Explore new hobbies and immerse yourself in creativity.</p>
                    <img src="assets/hobby2.jpg" style="width:100%" alt="Hobby Activity 2">
                    <p>Engage in fun art, craft, and music activities.</p>
                    <img src="assets/hobby3.jpg" style="width:100%" alt="Hobby Activity 3">
                    <p>Enjoy time dedicated to your passions and interests.</p>
                `;
            }

            // Show the modal
            document.getElementById('subscribe').style.display = 'block';
        }

        // Function to open the subscribe modal
        function openSubscribeModal() {
            document.getElementById('subscribe').style.display = 'block';
        }
    </script>

</body>

</html>