<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <?php include 'header.php'; ?>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4 firstDiv">
                <img src="images/bodyBuilder2.png" width="100%" alt="">
            </div>
            <div class="col-md-2 "></div>

            <!-- ----------login-mechnism-- -->
            <div class="col-md-6 loginPage text-center">
                
              <div class="loginP">
                  <img src="images/loginLogo.gif" width="45%">
                  <h1>Login</h1>
                  <form style="width:300px; margin: auto;">  
                    <div class="form-group input1">  
                      
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">  
                    </div>  
                    
                    <div class="form-group input1">  
                     
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">  
                    </div>  
                      
                    <button type="button" class="btn btn-primary">Login</button>  
                  </form>  

              </div>
             
           
     
            </div>
    
    
</body>
</html>