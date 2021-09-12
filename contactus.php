<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/contactus.css">
    <?php include 'header.php'; ?>
</head>
<body>


  <?php include 'navbar.php';?>

<nav aria-label="breadcrumb">
        <ol class="col-12 breadcrumb rounded-0">
            <li class="breadcrumb-item pl-2"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
        </ol>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3>Contact Us</h3>
                <hr>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        
        <div class="row row-content">
           <div class="col-12">
              <h3>Location Information</h3>
           </div>
            <div class="col-12 col-sm-4 offset-sm-1">
                   <h5>Our Address</h5>
                    <address style="font-size: 100%">
		              786610, Near River Brahmaputra<br>
		              BFC road, Mongoldoi,Assam<br>
		              INDIA<br>
		              <i class="fa fa-phone"></i>: +91 9090909090<br>
		              <i class="fa fa-fax"></i>: +91 9898989898<br>
		              <i class="fa fa-envelope"></i>:
                        <a href="mailto:mailto:abcGym@gmail.com">abcGym@gmail.com</a>
		           </address>
                   <div class="btn-group" role="group">
                    <a role="button" class="btn btn-primary" href="tel:+91 9999900000"><i class="fa fa-phone"></i> Call</a>
                    <a role="button" class="btn btn-info"><i class="fab fa-whatsapp"></i> Whatsapp</a>
                    <a role="button" class="btn btn-success" href="mailto:abcGym@gmail.com"><i class="fas fa-envelope"></i> Email</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 offset-sm-1">
                <h5>Map of our Location</h5>
                    <div class="card card-cascade narrower">
                      <div class="card-body card-body-cascade text-center">
                        <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
                          <iframe src="https://maps.google.com/maps?q=Mongoldoi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            style="border:0" allowfullscreen></iframe>
                        </div>
                      </div>
                    </div>
             </div>
        </div>

        <div class="row row-content">
           <div class="col-12">
              <h3>Send us your Feedback</h3>
           </div>
            <div class="col-12 col-md-9">
                <form action="" method="POST">
                    <div class="form-group row">
                        <label for="firstname" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control"  name="name" placeholder="Enter Name">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="telnum" class="col-12 col-md-2 col-form-label">Contact</label>
                        <div class="col-md-10">
                            <input type="tel" class="form-control"  name="phone" placeholder="phone">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="emailid" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input type="email" class="form-control"  name="email" placeholder="Email">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>
                        <div class="col-md-10">
                            <textarea class="form-control"  name="feedback" rows="12"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-2 col-md-10">
                            <button type="submit" name="submit" class="btn btn-primary">Send Feedback</button>
                        </div>
                    </div>
                </form>
            </div>
             <div class="col-12 col-md">
            </div>
       </div>

    </div>
</section>
</body>
</html>
<?php
    include 'connection.php';
    
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $feedback = $_POST['feedback'];

        $sql = "INSERT INTO `customer_feedback1` (`name`, `contact`, `email`, `feedback`) VALUES ('$name', '$phone', '$email', '$feedback');";
           
    $res = mysqli_query($conn, $sql);

    if($res)
    {
        ?>
        <script>
            alert("Feedback Submitted");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Feedback Not Submitted");
        </script>
        <?php
    }
    }



?>