<?php
     include 'connection.php';
    
    $id = $_GET['id'];

    $sql = "DELETE FROM `join_member` WHERE id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        ?>
        <script>
            alert("Enquiry  Deleted Successfully");
            
        </script>
        <?php
        header('Location: nquiryMember.php');
        

    }else{
        ?>
        <script>
            alert("Notice is not Deleted");
        </script>
        <?php
        header('Location: EnquiryMember.php');
    }


    




?>