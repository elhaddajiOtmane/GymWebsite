<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './blad/headerAdmin.php'; ?>
</head>
<body>
    <?php include './blad/navbarAdmin.php'; ?>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Trainers</li>
  </ol>
  <div class="col-12">
         <h5 style="font-size:20px; font-weight:bold;">Trainers</h5>
         <hr>
      </div>
</nav>
    <div class="container" style="margin: top 20px;">
        <div class="row">
            <div class="col text-center">
                <img src="images/customer.png" alt="">
                <h3>Trainer Details</h3>
            </div>
        </div>
        <div class="row view-row1">
            <div class="col text-center abcd">
                <table class="table">
                    <tr>
                       
                       <th>First Name</th>
                       <th>Middle Name</th> 
                       <th>Last Name</th>
                       <th>Phone</th>
                       <th>Email</th> 
                       <th>Experience</th>
                       <th>Address</th>
                       <th>Adhar</th>
                              
                       <th>Delete</th>
                    </tr>
        
                    <?php
                    
                    include '../inc/connection.php';
                    
                    
                    $selectquery = "select * from trainer";
                    $query = mysqli_query($conn, $selectquery);
                    $num = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query))
                    {
                        ?>
                        <tr>
                        
                        <td><?php echo $res['firstname'] ?></td>   
                        <td><?php echo $res['middlename'] ?></td>                
                        <td><?php echo $res['lastname'] ?></td>
                        <td><?php echo $res['phone'] ?></td>
                        <td><?php echo $res['email'] ?></td>
                        <td><?php echo $res['experience'] ?></td>
                        <td><?php echo $res['address'] ?></td>
                        <td><?php echo $res['adhar'] ?></td>
                        
                        
                       
                        <td><a href="deleteTrainer.php?id=<?php echo $res['id']; ?>"><i class="fas fa-trash-alt" style="color:red"></i></td> 
                        
                    </tr>
                        
        
                 <?php   
                }
                ?>
                   
                    
                </table>
            </div>

        </div>
    </div>
    

    
</body>
</html>