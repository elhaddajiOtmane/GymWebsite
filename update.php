<?php
    include 'connection.php';

    $id = $_GET['id'];

    $selectquery = " select * from registrationmember where id = '$id'";
    $query = mysqli_query($conn, $selectquery);

    $res = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
    $id = $_GET['id'];


    $firstname = mysqli_real_escape_string( $conn, $_POST['firstname']);
    $middlename = mysqli_real_escape_string( $conn, $_POST['middlename']);
    $lastname = mysqli_real_escape_string( $conn, $_POST['lastname']);
    $email = mysqli_real_escape_string( $conn, $_POST['email']);
    $phone = mysqli_real_escape_string( $conn, $_POST['phone']);
    $address = mysqli_real_escape_string( $conn, $_POST['address']);
    $caddress =mysqli_real_escape_string( $conn, $_POST['caddress']);
    $adhar =mysqli_real_escape_string( $conn, $_POST['adhar']);
    



$updatequery = "UPDATE `registrationmember` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`email`='$email',`phone`='$phone',`address`='$address',`caddress`='$caddress',`adhar`='$adhar' WHERE id = $id";

$result = mysqli_query($conn, $updatequery);

if($result)
{
    ?>
    <script>
        alert("Data Updated Successfully");
        
    </script>
    <?php
      
      

}else{
    ?>
    <script>
        alert("Data is not Updated");
    </script>
    <?php
}


   


}



?>
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

<!--body of the reg. form-->
<section class="jumbotron bg-warning rounded-0" style="height:80vh;font-family: 'Nunito', sans-serif;">
  <div class="container" style="margin-top:-40px;">
    <h3 style="color:#fff; text-align:center; font-weight:700" ><i class="fas fa-users" style="padding-right:10px; padding-bottom:30px"></i>Members Data Update</h3>
    <div class="row">
      <div class="col-lg-10 offset-md-1">
        <div class="card bg-white">
          <div class="card-body">
           
          
          <!-- ----------form-start------- -->
            <form action="update.php" method="POST">
              <div class="form-group row">
                  <label for="firstname" class="col-lg-4 col-form-label font-weight-bold">First Name</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control bg-light"  name="firstname" value="<?php echo $res['firstname']; ?>">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="firstname" class="col-lg-4 col-form-label font-weight-bold">Middle Name</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control bg-light"  name="middlename" value="<?php echo $res['middlename']; ?>">
                  </div>
              </div>


              <div class="form-group row">
                  <label for="lastname" class="col-lg-4 col-form-label font-weight-bold">Last Name</label>
                  <div class="col-lg-8">
                      <input type="text" class="form-control bg-light"  name="lastname" value="<?php echo $res['lastname']; ?>">
                  </div>
              </div>

              <div class="form-group row">
                  <label for="emailid" class="col-lg-4 col-form-label font-weight-bold">Email</label>
                  <div class="col-lg-8">
                      <input type="email" class="form-control bg-light"  name="email" value="<?php echo $res['email']; ?>">
                      
                    </div>
              </div>

                 <div class="form-group row">
                   <label for="phone" class="col-lg-4 col-form-label font-weight-bold">Phone</label>
                   <div class="col-lg-8">
                       <input type="number" class="form-control bg-light"  name="phone" value="<?php echo $res['phone']; ?>" placeholder="Enter Your Phone Number">
                   </div>
               </div>

               <div class="form-group row">
                   <label for="address" class="col-lg-4 col-form-label font-weight-bold">Address</label>
                   <div class="col-lg-8">
                       <input type="text" class="form-control bg-light" name="address" value="<?php echo $res['address']; ?>">
                   </div>
               </div>

               <div class="form-group row">
                   <label for="current-address" class="col-lg-4 col-form-label font-weight-bold">Current Address</label>
                   <div class="col-lg-8">
                       <input type="text" class="form-control bg-light"  name="caddress" value="<?php echo $res['caddress']; ?>">
                   </div>
               </div>

               
              <div class="form-group row">
                   <label for="adharno" class="col-lg-4 col-form-label font-weight-bold">Adhaar No</label>
                   <div class="col-lg-8">
                       <input type="number" class="form-control bg-light"  name="adhar" value="<?php echo $res['adhar']; ?>">
                   </div>
               </div>
               
               <br>
              <div class="form-group row">
                  <div class="offset-md-5 col-md-7">
                  <button  name="submit" class="btn btn-primary">Update</button>
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
<!-- -------php------------ -->
