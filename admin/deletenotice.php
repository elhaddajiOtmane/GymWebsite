<?php
     include '../inc/connection.php';
    
    $id = $_GET['id'];

    $sql = "DELETE FROM `notice` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        ?>
        <script>
            alert("Notice Deleted Successfully");
            
        </script>
        <?php
        header('Location: viewNotice.php');
        

    }else{
        ?>
        <script>
            alert("Notice is not Deleted");
        </script>
        <?php
        header('Location: viewNotice.php');
    }


    




?>