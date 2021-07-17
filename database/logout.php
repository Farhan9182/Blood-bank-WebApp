<?php 

    include("connection.php");

    if(isset($_SESSION['receiver']) || isset($_SESSION['hospital'])){
        session_destroy();

    }
    
    header('location: ../index.php');
    
    

?>