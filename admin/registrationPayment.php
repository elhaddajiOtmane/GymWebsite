<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../header.php'; ?>
    <style>
        #label1{
            font-weight: 600;
        }
    </style>
    
</head>
<body>
    <?php include 'navbar_admin.php'; ?>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Payment</li>
  </ol>
  <div class="col-12">
         <h5 style="font-size:20px; font-weight:bold;">Payment</h5>
         <hr>
      </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="height:60vh; margin-top: 10px;">
                <h1 style="text-align: center;"> <i class="fab fa-amazon-pay" style="color: green;"></i></h1>
                <h2 style="text-align: center; font-weight: 600;">Payment Records</h2>
                
                <form action="registrationPayment.php" method="post">

                    <div class="form-group row" style="margin-top: 50px;">
                        <label for="firstname" class="col-lg-4 col-form-label font-weight-bold" id="label1">Name of the Customer</label>
                        
                        <div class="col-lg-8 text-center">
                            <select class="form-select" aria-label="Default select example" name="name">
                                 <option value=""disabled selected>----Choose---</option>
                                    <?php 
                                    include 'connection.php';
                                    $sql= "SELECT * FROM registrationmember";
                                    $results=mysqli_query($conn,$sql);
                                    if(!$results)
                                    {
                                        echo "Error".$sql."<br>".mysqli_error($conn);
                                    }
                                    while ($rows = mysqli_fetch_array($results)) {
                                    ?>
                                    <option class="table" value="<?php echo $rows['firstname'];?>">
                                    <?php echo $rows['firstname'] ;?>
                                    </option>
                                    <?php } ?>
                                </option>
                              </select>
                        </div>
                    </div>
    
                    <div class="form-group row" style="margin-top: 50px;">
                        <label for="firstname" class="col-lg-4 col-form-label font-weight-bold" id="label1">Select the Packge </label>
                        
                        <div class="col-lg-8">
                            <select class="form-select" aria-label="Default select example" name="package">
                                <option value=""disabled selected>----Choose---</option>
                                        <?php 
                                        
                                        $sql= "SELECT * FROM package";
                                        $results=mysqli_query($conn,$sql);
                                        if(!$results)
                                        {
                                            echo "Error".$sql."<br>".mysqli_error($conn);
                                        }
                                        while ($rows = mysqli_fetch_array($results)) {
                                        ?>
                                        <option class="table" value="<?php echo $rows['name'];?>">
                                        <?php echo $rows['name'] ;?>
                                        </option>
                                        <?php } ?>
                                    </option>
                              </select>
                        </div>
                    </div>
                    <div class="form-group row" style="margin-top: 40px;">
                        <label for="firstname" class="col-lg-4 col-form-label font-weight-bold" id="label1">Enter the Amount</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control bg-light"  name="amount" placeholder="Enter the Amount">
                        </div>
                    </div>


                    <div class="form-group row" style="margin-top: 40px;">
                        <label for="firstname" class="col-lg-4 col-form-label font-weight-bold" id="label1">Enter the Date</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control bg-light"  name="date" placeholder="Enter the Date of Payment">
                        </div>
                    </div>

                    <div class="form-group text-center" style="margin-top: 40px;">
                        <button type="submit" name="submit" class="btn btn-outline-success">Submit</button>
                        <a href="viewPaymentRecord.php"><button type="button" class="btn btn-outline-success">View Records</button></a>
                    </div>
                    





                </form>


  
            
            </div>
            <div class="col-md-2">
                <p></p>
            </div>

        </div>
    </div>
    
</body>
</html>
<?php

    include 'connection.php';

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $package = $_POST['package'];
        $amount = $_POST['amount'];
        $date = $_POST['date'];

        $sql = "INSERT INTO `payment`(`name`, `package`, `amount`, `date`) VALUES ('$name', '$package', '$amount', '$date')";
        $res = mysqli_query($conn, $sql);

    if($res)
    {
        ?>
        <script>
            alert("Payment Inserted Successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Payment is Not Inserted Successfully");
        </script>
        <?php
    }
    }
?>

    }
