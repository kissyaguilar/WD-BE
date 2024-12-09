<script>
    function myFunction() {
        var x = document.getElementById("myGrid");
        var images = x.getElementsByTagName("img");

        if (x.className === "w3-row") {
            x.className = "w3-row-padding";
            for (var i = 0; i < images.length; i++) {
                images[i].style.borderRadius = "10px";
            }
        } else {
            x.className = x.className.replace("w3-row-padding", "w3-row");
            for (var i = 0; i < images.length; i++) {
                images[i].style.borderRadius = "";
            }
        }
    }

    function w3_open() {
        document.getElementById("mySidebar").style.width = "100%";
        document.getElementById("mySidebar").style.display = "block";
    }

    function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
    }
</script>