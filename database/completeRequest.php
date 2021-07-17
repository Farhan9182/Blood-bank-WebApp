<?php
	include 'connection.php';
    include 'sanitizer.php';
    if(isset($_POST['id'])){

        $id = sanitize($_POST['id']);

        $stm = $pdo->prepare("UPDATE requests SET stat= 'Completed' WHERE id= ?");
        $stm->bindValue(1, $id);
        
        $stm->execute();
        
        echo "success";
        
    }
    else{
        header('location: ../index.php');
    }
	

?>