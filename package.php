<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700&display=swap');
    </style>
    <script src="validation.js"></script>
    <?php include 'header.php'; ?>
</head>

<body style="font-family: 'Nunito', sans-serif;">
    <header>
        <?php include 'navbar.php';?>
    </header>
    <div class="container my-content pt-3">
        <h1 style="text-align: center"><i class="far fa-box-full"></i></h1>
        <h2 class="text-center" style="padding-bottom:20px;font-weight:bold;">Add Package</h2>
        <div class="col-lg-10 offset-1">
            <form method="POST" action="package.php" onsubmit="return packageValidation()">
                <div class="form-group row">
                    <label for="pack_name" class="col-md-3 col-form-label">Package Name</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="pack_name" name="package_name"
                            placeholder="Package Name">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="Amount" class="col-md-3 col-form-label">Amount</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                    </div>
                </div>


                <div class="form-group row">
                    <label for="description" class="col-md-3 col-form-label">Package Description</label>
                    <div class="col-md-9">
                        <textarea class="form-control" id="desc" name="description" rows="5"></textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-7 offset-5">
                        <button class="btn text-white btn-primary" name="submit" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="jquery/dist/jquery.slim.min.js"></script>
    <script src="popper.js/dist/umd/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>

</html>
<?php

    include 'connection.php';

    if(isset($_POST['submit'])){

        $packageName = $_POST['package_name'];
        $amount = $_POST['amount'];
        $description = $_POST['description'];

        $sql = "INSERT INTO `package`(`name`, `amount`, `description`) VALUES ('$packageName', '$amount', '$description')";
        $res = mysqli_query($conn, $sql);

    if($res)
    {
        ?>
        <script>
            alert("Package Inserted Successfully");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("Package is Not Inserted Successfully");
        </script>
        <?php
    }
    }
?>

    }


