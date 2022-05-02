<?php
     include '../inc/connection.php';
    
    $id = $_GET['id'];
    print_r('<script>alert("Data Deleted Successfully"); </script>');

    $sql = "DELETE FROM `registrationmember` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        ?>
       
        <?php
        header('Location: manageMember.php');
        

    }else{
        ?>
        <script>
            alert("Data is not Deleted");
        </script>
        <?php
    }


    




?>