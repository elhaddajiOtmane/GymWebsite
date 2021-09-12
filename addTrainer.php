
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <?php include 'header.php'; ?>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
</style>
</head>
<body style="height:200vh">
<!--Navbaar-->

 <?php include 'navbar.php'; ?>
 <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Trainer</li>
  </ol>
  <div class="col-12">
         <h5 style="font-size:20px; font-weight:bold;">Add Trainer</h5>
         <hr>
      </div>
</nav>

<!--body of the reg. form-->
<section class="jumbotron bg-warning rounded-0" style="height:80vh;font-family: 'Nunito', sans-serif;">
  <div class="container" style="margin-top:-40px;">
    <h3 class="text-center text-white font-weight-bold mb-4" data-aos="fade-up">Add Trainer</h3>
    <div class="row">
      <div class="col-lg-10 offset-md-1">
        <div class="card bg-white">
          <div class="card-body">
           
          
          <!-- ----------form-start------- -->
            <form action="addTrainer.php" method="POST">
              <div class="form-group row">
                  <label for="firstname" class="col-lg-4 col-form-label font-weight-bold">First Name</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control bg-light"  name="firstname">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="firstname" class="col-lg-4 col-form-label font-weight-bold">Middle Name</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control bg-light"  name="middlename">
                  </div>
              </div>


              <div class="form-group row">
                  <label for="lastname" class="col-lg-4 col-form-label font-weight-bold">Last Name</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control bg-light"  name="lastname">
                  </div>
              </div>

              <div class="form-group row">
                   <label for="phone" class="col-lg-4 col-form-label font-weight-bold">Phone</label>
                   <div class="col-lg-8">
                       <input type="number" class="form-control bg-light"  name="phone" placeholder="Enter Your Phone Number">
                   </div>
               </div>

              <div class="form-group row">
                  <label for="emailid" class="col-lg-4 col-form-label font-weight-bold">Email</label>
                  <div class="col-lg-8">
                      <input type="email" class="form-control bg-light"  name="email">
                      
                    </div>
              </div>

              <div class="form-group row">
                   <label for="address" class="col-lg-4 col-form-label font-weight-bold">Experience</label>
                   <div class="col-lg-8">
                       <input type="text" class="form-control bg-light" name="experience">
                   </div>
               </div>

                

               <div class="form-group row">
                   <label for="address" class="col-lg-4 col-form-label font-weight-bold">Address</label>
                   <div class="col-lg-8">
                       <input type="text" class="form-control bg-light" name="address">
                   </div>
               </div>
               <div class="form-group row">
                   <label for="address" class="col-lg-4 col-form-label font-weight-bold">Adhar No</label>
                   <div class="col-lg-8">
                       <input type="text" class="form-control bg-light" name="adhar">
                   </div>
               </div>

               
            
               <br>
              <div class="form-group row">
                  <div class="offset-md-5 col-md-7">
                  <button  name="submit" class="btn btn-primary">Register</button>
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

</body>
</html>
<?php
include 'connection.php';
    if(isset($_POST['submit'])){
    

    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $exprience = $_POST['experience'];
    $address = $_POST['address'];
    $adhar = $_POST['adhar'];


    $sql = "INSERT INTO trainer1(firstname, middlename, lastname, phone, email, experience, address, adhar)VALUES('$firstname', '$middlename', '$lastname', '$phone', '$email', '$exprience', '$address',  '$adhar')";
           
    $res = mysqli_query($conn, $sql);

    if($res)
    {
        ?>
        <script>
            alert("Trainer Data Inserted Successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Trainers Data is not inserted");
        </script>
        <?php
    }
    
}         
?>


