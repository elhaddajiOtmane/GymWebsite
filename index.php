<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <?php include 'header.php'; ?>
    
    <script src="https://kit.fontawesome.com/2dfceedea2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2dfceedea2.js" crossorigin="anonymous"></script>
     <style>
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
     </style>
</head>

<body  style=" font-family: 'Nunito', sans-serif;font-size:1rem;">
    <?php include 'navbar.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-3 text-center" style="height: 50px; background-color: rgb(129, 201, 129);">
                <p style="color: #000; padding-top: 15px; font-weight: 700;">Important Notice</p>

            </div>
            <div class="col-sm-9 col-md-9" style="background-color: rgb(120, 129, 102); height: 50px;">
                <marquee width="100%" direction="left">
                    <p style="color: #fff; font-weight: 600; padding-top: 10px;"> <?php
                    include 'connection.php';
                
                    $selectquery = "select * from notice";
                    $query = mysqli_query($conn, $selectquery);
                    $num = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query))
                    {
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
                <p class="textBe">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
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
                  <p class="card-text"  style="font-size: 0.9rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
           </div>
           <div class="col-lg-4 col-md-6 col-sm-12 pb-3">
            <div class="card" style="width: 18rem;">
                <img src="images/services3.jpg" class="card-img-top" alt="service image">
                <div class="card-body">
                  <h5 class="card-title text-center" style="font-weight: bold;">Build Perfect Body</h5>
                  <p class="card-text"  style="font-size: 0.9rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae cupiditate exercitationem odit maiores velit. Odio asperiores soluta laboriosam. Aperiam repellat iure sequi id blanditiis aut animi perspiciatis voluptate suscipit possimus.
                </p>
                <a href="#" style="margin-left: 200px;"><button class="btn btn-warning">See More</button></a>
            </div>
       </div>
    </section>
<br>
<br>


    


    <?php include 'footer.php'; ?>






</body>

</html>