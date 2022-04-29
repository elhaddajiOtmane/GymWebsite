<?php
session_start();
session_unset();
session_destroy();
if(!isset($_SESSION['email'])){
    header('Location:../loginPage.php');
}