
<body>
    <?php include 'blad/navbar.php'; ?>

    <div class="container">
        <h1>Image Gallery</h1>
        <div id="btnContainer" class="filter-buttons">
            <button class="btn active" onclick="showAll()">Show All</button>
            <button class="btn" onclick="showNature()">Florida Nature</button>
            <button class="btn" onclick="showPets()">Pets</button>
            <button class="btn" onclick="showArt()">Artwork</button>
        </div>
        <div id="gallery"></div>
        <!-- /#gallery -->

        <div id="popUp">
            <img src="" alt="" id="selectedImage" />
        </div>
    </div>
    <!-- /.container -->
    <script src="js/index.js"></script>
</body>

</html>

<?php

require 'blad/footer.php';

?>