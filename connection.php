<?php


    $host = 'localhost:3307';
    $user = '';
    $pass = '';
    $dbname = 'rimi_gym';



    $conn = mysqli_connect($host, $user, $pass, $dbname);

    if(! $conn)
    {
        die ("Couldnot Connect :".mysqli_error());
    }
    echo "Connection is done";
?>