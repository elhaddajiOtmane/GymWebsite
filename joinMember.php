<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="./js/validation.js"></script>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
</style>
</head>
<body>
<!--Navbaar-->

<?php include 'blad/navbar.php';?>

<!--body of the reg. form-->
<section class="jumbotron bg-warning rounded-0" style="height:80vh;font-family: 'Nunito', sans-serif;">
  <div class="container" style="margin-top:-40px;">
    <h3 class="text-center text-white font-weight-bold mb-4" data-aos="fade-up">Get in touch with us</h3>
    <div class="row">
      <div class="col-lg-10 offset-md-1">
        <div class="card bg-white">
          <div class="card-body">
            <!-- ----------form-start------- -->
            <form method="POST" action="joinMember.php" onsubmit="return joinMemberValidation()">
                <div class="form-group row">
                    <label for="firstname" class="col-lg-4 col-form-label font-weight-bold">Name</label>
                    <div class="col-lg-8">
                        <input type="text" class="form-control bg-light" id="name" name="name">
                    </div>
                </div>


             
              <div class="form-group row">
                  <label for="emailid" class="col-lg-4 col-form-label font-weight-bold">Email</label>
                  <div class="col-lg-8">
                      <input type="email" class="form-control bg-light" id="email" name="emailid">
                      
                    </div>
              </div>

                 <div class="form-group row">
                   <label for="phone" class="col-lg-4 col-form-label font-weight-bold">Phone</label>
                   <div class="col-lg-8">
                       <input type="number" class="form-control bg-light" id="phone" name="phone" placeholder="Enter Your Phone Number">
                   </div>
               </div>

               <div class="form-group row">
                   <label for="address" class="col-lg-4 col-form-label font-weight-bold">Address</label>
                   <div class="col-lg-8">
                       <input type="text" class="form-control bg-light" id="address" name="address">
                   </div>
               </div>

               
             
               <br>
              <div class="form-group row">
                  <div class="offset-md-5 col-md-7">
                      <button type="submit" name="submit" class="btn btn-primary">Join</button>
                  </div>
              </div>
          </form>

<!-- ----------------------------form-end----------- -->

         </div>
          <div class="col-12 col-md">
         </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>
</html>


<?php 
    require 'inc/connection.php';
    if(isset($_POST['submit']))
    {


          $name = $_POST['name'];
          $emailid = $_POST['emailid'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];

          $sql = "INSERT INTO join_member(name, email, phone, address)VALUES('$name', '$emailid' ,'$phone', '$address')";

          $res = mysqli_query($conn, $sql);

            if($res)
            {
                ?>
                <script>
                    alert("Yahooo! Your Record is Submitted");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("Ohh No!!!!  Your Record is not Submitted");
                </script>
                <?php
            }




    }


    require 'blad/footer.php';

?>