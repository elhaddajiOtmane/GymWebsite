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
                <h1>Notices</h1>
            </div>
        </div>
        <div class="row view-row1">
            <div class="col text-center abcd">
                <table class="table">
                <tr>
                 
                 <th>ID</th>
                 <th>Notice</th> 
                      
                 <th>Delete</th>
              </tr>
        
              <?php
              
              include 'connection.php';
              
              
              $selectquery = "select * from notice1";
              $query = mysqli_query($conn, $selectquery);
              $num = mysqli_num_rows($query);
              while($res = mysqli_fetch_array($query))
              {
                  ?>
                  <tr>
                  
                  <td><?php echo $res['id'] ?></td>   
                  <td><?php echo $res['notice'] ?></td>                

                  <td><a href="deletenotice.php?id=<?php echo $res['id']; ?>"><i class="fas fa-trash-alt" style="color:red"></i></td> 
                  
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