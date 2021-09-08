<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <?php include 'header.php'; ?>
    <?php include 'navbar.php'; ?>
    <script src="https://kit.fontawesome.com/2dfceedea2.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3 text-center" style="height: 50px; background-color: rgb(129, 201, 129);">
                <p style="color: #000; padding-top: 15px; font-weight: 700;">Important Notice</p>

            </div>
            <div class="col-sm-9 col-md-9" style="background-color: rgb(120, 129, 102); height: 50px;">
                <marquee width="100%" direction="left">
                    <p style="color: #fff; font-weight: 600; padding-top: 10px;">This is a sample scrolling text that
                        has scrolls texts to right.</p>
                </marquee>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="padding: 20px;">
                <h4 class="heading1">Shape Your Body</h4>
                <h1 class="strongHeadMain">BE <span class="strongHead">STRONG</span> AND TRAINING HARD</h1>
                <p class="textBe">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                <button type="button" class="btn btn-warning" id="button1"><span class="spText">Know
                        More</span></button>

                <div class="container" style="margin-top: 60px;">
                    <div class="row">
                        <div class="col-md-4 fa text-center" id="abc">
                            <i class="fas fa-cog fa-4x"></i>
                            <h6 class="abcd">Beginners</h6>

                        </div>
                        <div class="col-md-4 text-center" id="abc">
                            <i class="fas fa-cogs fa-4x"></i>
                            <h6 class="abcd">Intermediate</h6>
                        </div>
                        <div class="col-md-4 text-center" id="abc">
                            <i class="fas fa-users-cog fa-4x"></i>
                            <h6 class="abcd">Advanced</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <img src="images/bodyBuilder2.png" width="100%" alt="">
            </div>


        </div>
        <div class="row">
            <div class="col-md-6 acd">
                <img src="images/second.jpg" width="100%">
            </div>
            <div class="col-md-6 justify-text" id="about-ab">
                <h1 style="text-align: center; padding-bottom: 10px;">About Us</h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis odio tempora, ipsum modi, mollitia,
                sapiente quis molestias eligendi iusto debitis incidunt quo cupiditate. Nam commodi ipsa saepe
                perferendis necessitatibus quam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis odio tempora, ipsum modi, mollitia,
                sapiente quis molestias eligendi iusto debitis incidunt quo cupiditate. Nam commodi ipsa saepe
                perferendis necessitatibus quam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis odio tempora, ipsum modi, mollitia,
                sapiente quis molestias eligendi iusto debitis incidunt quo cupiditate. Nam commodi ipsa saepe
                perferendis necessitatibus quam. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis odio tempora, ipsum modi, mollitia,
                sapiente quis molestias eligendi.
            </div>

        </div>
        



    </div>

    <!-- ----------------trainer part start----------- -->
    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <div class="col">
                <h1 class="trainer">Our Trainers</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/abc.png" width="70%">
                <h5 style="padding-top: 10px;">Homen Nath</h5>
                <p>Six Years Experienced</p>
                <button type="button" class="btn btn-info">About More</button>
            </div>
            
            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/bodyTrainer1.png" width="70%">
                <h5 style="padding-top: 20px;">Debashish Baruah</h5>
                <p>Five Years Experienced</p>
                <button type="button" class="btn btn-info">About More</button>
            </div>
            
            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/bodyTrainer3.png" width="70%">
                <h5 style="padding-top: 15px;">Homen Nath</h5>
                <p>Four Years Experienced</p>
                <button type="button" class="btn btn-info">About More</button>
            </div>
        </div>
    </div>
    <!-- ---------------Offer-Part---------- -->
    <div class="container">
        <div class="row">
            <div class="col offer-part">
                <h1>This is for offer part</h1>
            </div>
        </div>
    </div>



    


    <?php include 'footer.php'; ?>






</body>

</html>