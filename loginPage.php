<?php
session_start();
include 'inc/connection.php';
// CHECK SESSION START

//   $_SESSION['email']=$_POST['email'];
//   $_SESSION['pass']=$_POST['password'];
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $query = "SELECT * from adminpass where email = '$email' and password='$pass' ";
    $result = mysqli_query($conn, $query);
    $row = mysqli_num_rows($result);

    if ($row > 0) {
        $_SESSION['email'] = $_POST['email'];
        header("Location: admin/admindashboard.php");
    } else {
        `<script> function myFunction() 
        {
            var element = document.getElementById("eror");
            element.classList.add("alert alert-danger mt-3");<script>`;
    }
}
if (isset($_SESSION['email'])) {
    header("Location: admin/admindashboard.php");
}
?>
<?php include 'blad/navbar.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 firstDiv">
            <img src="images/bodyBuilder2.png" width="100%" alt="">
        </div>
        <div class="col-md-2 "></div>
        <!-- ---------login-mechnism-- -->
        <div class="col-md-6 loginPage text-center">
            <div class="loginP">
                <img src="images/loginLogo.gif" width="45%">
                <h1>Login</h1>
                <form method="POST" action="loginPage.php" style="width:400px; margin: auto;">
                    <div class="form-group row">
                        <div class="col-lg-8" style="margin: auto; margin-top: 20px;">
                            <input type="text" class="form-control bg-light" id="emailid" name="email" placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-8" style="margin: auto; margin-top: 20px;">
                            <input type="password" class="form-control bg-light" id="emailid" name="password" placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-md-5 col-md-7" style="margin: auto; margin-top: 20px;">
                            <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        </div>
                        <div id="eror" class="" role="alert"></div>
                </form>
            </div>
        </div>
        <div class="slider">
            <div>photo1 </div>
            <div>photo3</div>
            <div>photo3</div>
        </div>
        <script>
 $('.slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
        </script>
        </body>

        </html>