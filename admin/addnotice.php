
    
      <?php include 'blad/navbarAdmin.php';?>
    
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
                  <form method="POST" action="addnotice.php" onsubmit = "return noticeValidation()">
                      <div class="form-group row">
                          <label for="Notice" class="col-lg-4 col-form-label font-weight-bold" style="font-size:1rem;  font-family: 'Nunito', sans-serif;">Notice</label>
                          <div class="col-lg-8">
                          <textarea class="form-control bg-light" id ="notice" name="notice" rows="6"></textarea>
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
  include '../inc/connection.php';
  if(isset($_POST['submit'])){

    $notice = $_POST['notice'];

    $sql = "INSERT INTO notice(notice)VALUES('$notice')";
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

<?php require "blad/footerAdmin.php";