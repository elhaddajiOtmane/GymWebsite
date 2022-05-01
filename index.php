<?php include 'blad/header.php'; ?>

<script src="https://kit.fontawesome.com/2dfceedea2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="./assets/css/fontawesome.min.css">
<link rel="stylesheet" href="css/index.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
</style>
</head>

<body style=" font-family: 'Nunito', sans-serif;font-size:1rem;">
    <?php include 'navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3 text-center" style="height: 50px; background-color: rgb(129, 201, 129);">
                <p style="color: #000; padding-top: 15px; font-weight: 700;">Important Notice <i class="fa-solid fa-bars-filter"></i></p>

            </div>
            <div class="col-sm-9 col-md-9" style="background-color: rgb(120, 129, 102); height: 50px;">
                <marquee width="100%" direction="left">
                    <p style="color: #fff; font-weight: 600; padding-top: 10px;">
                        <?php
                        include './inc/connection.php';

                        $selectquery = "select * from notice";
                        $query = mysqli_query($conn, $selectquery);
                        $num = mysqli_num_rows($query);
                        while ($res = mysqli_fetch_array($query)) {
                            echo $res['notice'];
                        }


                        ?></p>
                </marquee>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="padding: 20px;">
                <h4 class="heading1 font-weight-bold">Shape Your Body</h4>
                <h1 class="strongHeadMain">BE <span class="strongHead">STRONG</span> AND TRAINING HARD</h1>
                <p class="textBe">The abc Gym Fitness Institute GGFI is India’s first International Fitness Management Institute. It offers certificate courses in Fitness
                    Management, Personal Training and Spinning Instructing. It covers a range of subjects to comprehensively address and ensure the best
                    international brand practices in India. The 3 month courses are monitored by qualified personnel of abc Gym, and also hosts guest lectures by the biggest names in the international fitness industry with guaranteed internships and a firsthand opportunity to experience</p>
                <a href="#" class="text-first"><button class="btn btn-warning text-dark">Know More</button></a>
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
                <img src="images/bodyBuilder2.png" width="100%" alt="body builder">
            </div>
        </div>
        <br><br>
        <div class="row">
            <h3 class="text-center p-3" style="font-weight: bold;">Our Services</h3>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/services1.jpg" class="card-img-top" alt="service image">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-weight: bold;">Free Consultation</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/services2.jpg" class="card-img-top" alt="service image">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-weight: bold;">Best Training</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
                <div class="card" style="width: 18rem;">
                    <img src="images/services3.jpg" class="card-img-top" alt="service image">
                    <div class="card-body">
                        <h5 class="card-title text-center" style="font-weight: bold;">Build Perfect Body</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <hr style="width:90px;margin:10px auto;height:3px" class="bg-warning">
    <br>
    <!-- ----------------trainer part start----------- -->
    <div class="container" style="margin-bottom: 40px;">
        <div class="row">
            <h1 class="trainer text-center">Our Trainers</h1>
            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/abc.png" width="70%">
                <h5 style="padding-top: 10px;font-weight:bold;">Gaurav Gogoi</h5>
                <p>Six Years Experienced</p>
            </div>

            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/bodyTrainer1.png" width="70%">
                <h5 style="padding-top: 20px; font-weight:bold;">Debashish Boruah</h5>
                <p>Five Years Experienced</p>
            </div>

            <div class="col-md-4 text-center" id="trainerImg">
                <img src="images/bodyTrainer3.png" width="70%">
                <h5 style="padding-top: 15px; font-weight:bold;">Homen Nath</h5>
                <p>Four Years Experienced</p>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark">
        <div class="row">
            <p class="text-center text-white" style="font-size:1rem;padding-top:20px;">Start Your</p>
            <h1 class="text-center text-white" style="padding-bottom:20px;">Training Today</h1>
            <a href="joinMember.php" class="text-center pb-3"><button type="button" class="btn btn-outline-warning">Click here to Enquiry</button></a>
        </div>
    </div>
    <br>
    <br>
    <section class="container">
        <div class="row">
            <div class="col-md-6 acd">
                <img src="images/second.jpg" width="100%">
            </div>
            <div class="col-md-6 justify-text" id="about-ab">
                <h1 style="text-align: center; padding-bottom: 10px;font-weight: bold;">About Us</h1>
                <p style="padding-left:30px">
                    abc Gym has been leading the fitness movement and redefining strength since 1965 when Joe Gold opened the original abc Gym in Venice, California. Long before the modern-day health club existed, the original abc Gym featured three simple ingredients: The best equipment, a passion for fitness and an unparalleled dedication to results. It was an instant hit.
                </p>
                <a href="#" style="margin-left: 200px;"><button class="btn btn-warning">See More</button></a>
            </div>
        </div>
    </section>
    <div class="container-fluid mt-5">
        <div class="row">


            <div class="img mt-5">
                <div class="rt-bmi-calculator rt-dark ">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="rt-left">
                                <h3 class="rt-title">CALCULATE YOUR BMI</h3>
                                <div class="rt-subtitle">BMI is a measurement of a person's leanness or corpulence based on their height and weight, and is intended to quantify tissue mass. It is widely used as a general indicator of whether a person has a healthy body weight for their height. Specifically, the value obtained from the calculation of BMI is used to categorize whether a person is underweight, normal weight, overweight, or obese depending on what range the value falls between.</div>
                                <form class="rt-bmi-form">
                                    <div class="rt-bmi-radio">
                                        <input id="rt-bmi-metric-2016876180" type="radio" name="rt-bmi-unit" value="metric" checked=""><label for="rt-bmi-metric-2016876180">Metric Units</label><input id="rt-bmi-imperial-2016876180" type="radio" name="rt-bmi-unit" value="imperial"><label for="rt-bmi-imperial-2016876180">Imperial Units</label>
                                    </div>
                                    <div class="rt-bmi-fields">
                                        <input type="text" class="mt-5 rt-bmi-fields-metric" name="rt-bmi-weight" placeholder="Weight / kg">
                                        <input type="text" class="rt-bmi-fields-metric" name="rt-bmi-height" placeholder="Height / cm">
                                        <input type="text" class="rt-bmi-fields-imperial" name="rt-bmi-pound" placeholder="Weight / lbs" style="display:none;">
                                        <input type="text" class="rt-bmi-fields-imperial" name="rt-bmi-feet" placeholder="Height / feet" style="display:none;">
                                        <input type="text" class="rt-bmi-fields-imperial" name="rt-bmi-inch" placeholder="Height / inch" style="display:none;">
                                    </div>
                                    <input type="submit" class="rt-bmi-submit" value="CALCULATE">
                                    <div class="rt-bmi-result" style="display:none;" data-chart="[[&quot;Below 18.5&quot;,&quot;Underweight&quot;],[&quot;18.5 - 24.9&quot;,&quot;Normal&quot;],[&quot;25 - 29.9&quot;,&quot;Overweight&quot;],[&quot;30 and Above&quot;,&quot;Obese&quot;]]">Your BMI is: <span class="rt-bmi-val"></span>, and weight status is: <span class="rt-bmi-status"></span></div>
                                    <div class="rt-bmi-error" data-emptymsg="Error: One or more fields are empty" data-numbermsg="Error: All field values must be a number"></div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="rt-right">
                                <table class="bmi-chart table  mt-5 tb">
                                    <tbody>
                                        <tr>
                                            <th>BMI</th>
                                            <th>Weight Status</th>
                                        </tr>
                                        <tr>
                                            <td>Below 18.5</td>
                                            <td>Underweight</td>
                                        </tr>
                                        <tr>
                                            <td>18.5 - 24.9</td>
                                            <td>Normal</td>
                                        </tr>
                                        <tr>
                                            <td>25 - 29.9</td>
                                            <td>Overweight</td>
                                        </tr>
                                        <tr>
                                            <td>30 and Above</td>
                                            <td>Obese</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-5 text-center">

                <p class="text-justify h1">online Shop</p>

            </div>
        </div>

        <br>
        <br>



    </div>

    <?php require 'blad/footer.php'; ?>






</body>

</html>