
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
    <div class="container">
        <div class="row" style="margin-top: 40px;">
            <div class="col-md-4">
               <div style="width: 90%; border: 2px solid green; margin: auto; height: 400px; margin-top: 30px; border-radius: 30px;">
                    <h5 style="text-align:center; padding-top:40px">Durations:
                    <?php
                    include 'connection.php';
                
                    $selectquery = "select * from package where name = '3 Months'";
                    $query = mysqli_query($conn, $selectquery);
                    $num = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query))
                    {
                      echo $res['name'];
                      
                    }


                    ?>
                    </h5>
                    <h3 style="color: red; text-align: center;">
                    <?php
                   
                
                    $selectquery = "select * from package where name = '3 Months' ";
                    $query = mysqli_query($conn, $selectquery);
                    $num = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query))
                    {
                      echo $res['amount'];
                      
                    }


                    ?>
                   Rs only </h3>
                   <p style="text-align: center; color: tomato; padding-left: 30px; padding-right: 30px; padding-top: 40px;">
                    <?php
                   
                
                    $selectquery = "select * from package where name = '3 Months' ";
                    $query = mysqli_query($conn, $selectquery);
                    $num = mysqli_num_rows($query);
                    while($res = mysqli_fetch_array($query))
                    {
                      echo $res['description'];
                      
                    }


                    ?> 
                   </p>
                   
               </div>
            </div>
            <div class="col-md-4">

                <div style="width: 90%; border: 2px solid green; margin: auto; height: 400px; margin-top: 30px; border-radius: 30px;">

                    <h5 style="text-align:center; padding-top:40px">Durations:
                        <?php
                        include 'connection.php';
                    
                        $selectquery = "select * from package where id = 4";
                        $query = mysqli_query($conn, $selectquery);
                        $num = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query))
                        {
                          echo $res['name'];
                          
                        }
    
    
                        ?>
                        </h5>
                        <h3 style="color: red; text-align: center;">
                        <?php
                       
                    
                        $selectquery = "select * from package where id =4 ";
                        $query = mysqli_query($conn, $selectquery);
                        $num = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query))
                        {
                          echo $res['amount'];
                          
                        }
    
    
                        ?>
                       Rs only </h3>
                       <p style="text-align: center; color: tomato; padding-left: 30px; padding-right: 30px; padding-top: 40px;">
                        <?php
                       
                    
                        $selectquery = "select * from package where id = 4 ";
                        $query = mysqli_query($conn, $selectquery);
                        $num = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query))
                        {
                          echo $res['description'];
                          
                        }
    
    
                        ?> 
                       </p>



                </div>
            </div>
            <div class="col-md-4">

                <div style="width: 90%; border: 2px solid green; margin: auto; height: 400px; margin-top: 30px; border-radius: 30px;">
                    <h5 style="text-align:center; padding-top:40px">Durations:
                        <?php
                        include 'connection.php';
                    
                        $selectquery = "select * from package where id = 5";
                        $query = mysqli_query($conn, $selectquery);
                        $num = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query))
                        {
                          echo $res['name'];
                          
                        }
    
    
                        ?>
                        </h5>
                        <h3 style="color: red; text-align: center;">
                        <?php
                       
                    
                        $selectquery = "select * from package where id =5 ";
                        $query = mysqli_query($conn, $selectquery);
                        $num = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query))
                        {
                          echo $res['amount'];
                          
                        }
    
    
                        ?>
                       Rs only </h3>
                       <p style="text-align: center; color: tomato; padding-left: 30px; padding-right: 30px; padding-top: 40px;">
                        <?php
                       
                    
                        $selectquery = "select * from package where id = 5 ";
                        $query = mysqli_query($conn, $selectquery);
                        $num = mysqli_num_rows($query);
                        while($res = mysqli_fetch_array($query))
                        {
                          echo $res['description'];
                          
                        }
    
    
                        ?> 
                       </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center" style="margin-top:50px">
                <a href="joinMember.php"><button type="button" class="btn btn-info">Know More</button></a>
            </div>
        </div>
    </div>



</body>
</html>