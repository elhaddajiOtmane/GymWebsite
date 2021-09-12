<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/admindashborad.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <?php include 'header.php'; ?>
    
</head>
<body>
    <!--navbar-->
    
      <?php include 'navbar.php';?>
    
    <!--navbar ends here-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item active pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
          <li class="breadcrumb-item" aria-current="page">Add Notice</li>
        </ol>
        <div class="container-fluid" style="height:20px;">
        <div class="col-12">
               <h5 style="font-size:20px;font-weight:bold;">Add Notice</h5>
        </div>
        </div>
        <hr>
      </nav>
      <section class="container">
        <div class="row">
            <div class="col-lg-10 offset-md-1">
              <div class="card bg-white">
                <div class="card-body">
                  <form method="POST" action="addnotice.php">
                      <div class="form-group row">
                          <label for="Notice" class="col-lg-4 col-form-label font-weight-bold" style="font-size:1rem;  font-family: 'Nunito', sans-serif;">Notice</label>
                          <div class="col-lg-8">
                          <textarea class="form-control bg-light" name="notice" rows="6"></textarea>
                          </div>
                      </div>
                      <br>
                      <div class="form-group row">
                          <div class="offset-md-5 col-md-7">
                              <button type="submit" name="submit" class="btn btn-primary">POST</button>
                              <a href="viewNotice.php"><button type="button" class="btn btn-success" style="margin-left:30px">View all</button></a>
                          </div>
                      </div>
                </form>
               </div>
                <div class="col-12 col-md">
               </div>
             </div>
             </div>
             </div>

            
      </section>


      <!-- -----------notice table part---------- -->

      
<?php
  include 'connection.php';
  if(isset($_POST['submit'])){

    $notice = $_POST['notice'];

    $sql = "INSERT INTO notice1(notice)VALUES('$notice')";
    $res = mysqli_query($conn, $sql);

    if($res)
    {
        ?>
        <script>
            alert("Notice Posted Successfully");
        </script>
        <?php
        
    }else{
        ?>
        <script>
            alert("Notice is not Posted");
        </script>
        <?php
        
    }
  }
 

?>