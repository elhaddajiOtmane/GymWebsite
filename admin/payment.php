<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="validation.js"></script>
    <?php include '../header.php'; ?>
    <style>
        #label1{
            font-weight: 600;
        }
    </style>
    
</head>
<body>
    <?php include '../navbar.php'; ?>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Payment </li>
  </ol>
  <div class="col-12">
         <h5 style="font-size:20px; font-weight:bold;">Payment</h5>
         <hr>
      </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="height:60vh; margin-top: 20px;">
                <h1 style="text-align: center;"> <i class="fab fa-amazon-pay fa-2x" style="color: green;"></i></h1>
                <h2 style="text-align: center; font-weight: 600;">Monthly Payment Records</h2>
                
                <form action="payment.php" method="POST" onsubmit="return paymentValidation()">

                    <div class="form-group row" style="margin-top: 50px;">
                        <label for="firstname" class="col-lg-4 col-form-label font-weight-bold" id="label1">Name of the Customer</label>
                        
                        <div class="col-lg-8 text-center">
                            <select class="form-select" aria-label="Default select example" id="name" name="name">
                                 <option value=""disabled selected>----Choose---</option>
                                    <?php 
                                    include './inc/connection.php';
                                    $sql= "SELECT * FROM registrationmember";
                                    print_r($sql);
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
    
                   
                    <div class="form-group row" style="margin-top: 40px;">
                        <label for="firstname" class="col-lg-4 col-form-label font-weight-bold" id="label1">Enter the Amount</label>
                        <div class="col-lg-8">
                            <input type="text" class="form-control bg-light" id="amount"  name="amount" placeholder="Enter the Amount">
                        </div>
                    </div>


                    <div class="form-group row" style="margin-top: 40px;">
                        <label for="firstname" class="col-lg-4 col-form-label font-weight-bold" id="label1">Enter the Date</label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control bg-light" id="date"  name="date" placeholder="Enter the Date of Payment">
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
     include './inc/connection.php';

     if(isset($_POST['submit'])){
 
         $name = $_POST['name'];
         $amount = $_POST['amount'];
         $date = $_POST['date'];
         
         $sql = "SELECT * FROM payment where name ='$name'";
         $query = mysqli_query($conn, $sql);
         $res = mysqli_fetch_array($query);
 
 
         if($amount<0)
         {
             echo "<script type ='text/javascript'>";
             echo "alert('oops! Negative values cannot be transferred.')";
             echo "</script>";
         }
         else
         {
             
 
             $newbalance1 = $res['amount'] + $amount;
             $sql = "UPDATE payment SET amount = $newbalance1 WHERE name='$name'";
             mysqli_query($conn,$sql);
             $res1 = mysqli_query($conn, $sql);
 
             if($res1)
             {
                 ?>
                 <script>
                     alert("Customer Data Inserted Successfully");
                 </script>
                 <?php
             }else{
                 ?>
                 <script>
                     alert("Customer Data is not inserted");
                 </script>
                 <?php
             }
         }
     }

?>