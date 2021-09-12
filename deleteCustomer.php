<?php
     include 'connection.php';
    
    $id = $_GET['id'];

    $sql = "DELETE FROM `registrationmember1` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        ?>
        <script>
            alert("Data Deleted Successfully");
            
        </script>
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