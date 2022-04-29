<?php
     include 'connection.php';
    
    $id = $_GET['id'];

    $sql = "DELETE FROM `trainer` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        ?>
        <script>
            alert("Trainer Deleted Successfully huh");
            
        </script>
        <?php
        header('Location: viewTrainerDetails.php');
        

    }else{
        ?>
        <script>
            alert("Data is not Deleted");
        </script>
        <?php
        header('Location: viewTrainerDetails.php');
    }


    




?>