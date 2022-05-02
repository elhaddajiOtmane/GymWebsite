
    <?php include './blad/headerAdmin.php'; ?>
    <?php include './blad/navbarAdmin.php'; ?>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item pl-2" aria-current="page"><a href="admindashboard.php">Admin Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Customer Feedback</li>
        </ol>
        <div class="col-12">
                <h5 style="font-size:20px; font-weight:bold;">Trainer</h5>
                <hr>
            </div>
    </nav>

    <div class="container" style="margin: top 20px;">
        <div class="row">
            <div class="col text-center">
                <img src="images/customer.png" alt="">
                <h4><i class="far fa-comments" style="padding-right: 10px;"></i>Customer Feedback</h4>
            </div>
        </div>
        <div class="row view-row1">
            <div class="col text-center abcd">
                <table class="table">
                    <tr>
                       
                       <th>Name</th>
                       <th>Contact</th>
                       <th>Email</th> 
                       <th>Feedback</th>       
                    </tr>
        
                    <?php
                    
                    include '../inc/connection.php';
                    
                    
                    $selectquery = "SELECT * FROM `customer_feedback`";
                    $query = mysqli_query($conn, $selectquery);
                    $num = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query))
                    {
                        ?>
                        <tr>
                        
                        <td><?php echo $res['name'] ?></td>   
                        <td><?php echo $res['contact'] ?></td>                
                        <td><?php echo $res['email'] ?></td>
                        <td><?php echo $res['feedback'] ?></td>
                        
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