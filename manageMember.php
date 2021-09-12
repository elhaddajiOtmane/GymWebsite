<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container" style="margin: top 20px;">
        <div class="row">
            <div class="col text-center">
                <img src="images/customer.png" alt="">
                <h1>Customer</h1>
            </div>
        </div>
        <div class="row view-row1">
            <div class="col text-center abcd">
                <table class="table">
                    <tr>
                       
                       <th>First Name</th>
                       <th>Middle Name</th> 
                       <th>Last Name</th>
                       <th>Email</th> 
                       <th>Contact</th>
                       <th>Address</th>
                       <th>Current_Address</th>
                       <th>adhar</th>
                              
                       <th>Delete</th>
                    </tr>
        
                    <?php
                    
                    include 'connection.php';
                    
                    
                    $selectquery = "select * from registrationmember1";
                    $query = mysqli_query($conn, $selectquery);
                    $num = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query))
                    {
                        ?>
                        <tr>
                        
                        <td><?php echo $res['firstname'] ?></td>   
                        <td><?php echo $res['middlename'] ?></td>                
                        <td><?php echo $res['lastname'] ?></td>
                        <td><?php echo $res['email'] ?></td>
                        <td><?php echo $res['phone'] ?></td>
                        <td><?php echo $res['address'] ?></td>
                        <td><?php echo $res['caddress'] ?></td>
                        <td><?php echo $res['adhar'] ?></td>
                        
                        
                       
                        <td><a href="deleteCustomer.php?id=<?php echo $res['id']; ?>"><i class="fas fa-trash-alt" style="color:red"></i></td> 
                        
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