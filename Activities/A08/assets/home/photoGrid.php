<div class="w3-row" id="myGrid" style="margin-bottom:128px">
    <?php
    $images = range(1, 18);
    foreach (array_chunk($images, 6) as $column) {
        echo '<div class="w3-third">';
        foreach ($column as $img) {
            echo "<img src='assets/img/$img.jpg' style='width:100%'>";
        }
        echo '</div>';
    }
    ?>
</div>