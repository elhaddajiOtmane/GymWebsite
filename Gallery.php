<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'header.php'; ?>

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Image Gallery</title>
        <link rel="icon" type="image/png" href="https://raw.githubusercontent.com/connorocampo/image-gallery/master/images/favicon.png" />
        <meta name="description" content="An image gallery using HTML, CSS (CSS Grid for responsive styles), and vanilla JavaScript" />
        <meta name="theme-color" content="#ffffff" />
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="css/modern_galery.css" />
        <link rel="manifest" href="manifest.json" />
    </head>

<body>
    <?php include 'navbar.php'; ?>

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
    <script src="index.js"></script>
</body>

</html>

<?php

include 'footer.php';

?>