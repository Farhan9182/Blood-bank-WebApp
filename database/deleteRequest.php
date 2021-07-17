<?php
	include 'connection.php';
    include 'sanitizer.php';
    if(isset($_POST['id'])){

        $id = sanitize($_POST['id']);

        $stm = $pdo->prepare("DELETE FROM requests WHERE id= ? ");
        $stm->bindValue(1, $id);
        
        $stm->execute();
        
        echo "success";
        
    }
    else{
        header('location: ../index.php');
    }
	

?>