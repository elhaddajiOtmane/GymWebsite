<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/admindashborad.css">
  <?php include './blad/headerAdmin.php'; ?>
  </head>
  <body>
    
    <?php include './blad/navbarAdmin.php';?>
   
  <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Trainer</li>
  </ol>
  <div class="col-12">
         <h5 style="font-size:20px; font-weight:bold;">Trainer</h5>
         <hr>
      </div>
</nav>
    <!--body of the content-->
<section class="activities">
<div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <div class="card-header bg-success"> 
                    </div>
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:20px;"><i class="far fa-address-card"></i> Add Trainer</h5>
                      <a href="addTrainer.php" class="btn btn-primary" style="font-size:15px;">check</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <div class="card-header bg-success"> 
                    </div>
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:20px;"><i class="fas fa-clipboard-list"></i> Manage Trainer</h5>
                      <a href="viewTrainerDetails.php" class="btn btn-primary" style="font-size:15px;">check</a>
                    </div>
                  </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card mb-3">
                    <div class="card-header bg-success"> 
                    </div>
                    <div class="card-body">
                      <h5 class="card-title" style="font-size:20px;"><i class="fas fa-info-circle"></i> Trainer Details</h5>
                      <a href="#" class="btn btn-primary" style="font-size:15px;">check</a>
                    </div>
                  </div>
            </div>
        </div>
        </div>
</section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
  </html>
