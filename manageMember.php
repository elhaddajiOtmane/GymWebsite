<?php
include "connection.php";
session_start();
if(!isset($_SESSION["email"])){
    header("Location: admindashboard.php");
}else{



?>
  <?php include 'blad/navbar.php';?>
    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">View Members</li>
  </ol>
  <div class="col-12">
         <h5 style="font-size:20px; font-weight:bold;">View Members</h5>
         <hr>
      </div>
</nav>
    <div class="container" style="margin: top 20px;">
        <div class="row">
            <div class="col text-center">
                <img src="images/customer.png" alt="">
                <h3>Registered Members</h3>
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
                       <th>price</th>
                              
                       <th>Delete</th>
                    </tr>
        
                    <?php
                    
                    include 'connection.php';
                    
                    
                    $selectquery = "select * from registrationmember";
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
<?php
}
?>