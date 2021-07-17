<?php
	include 'connection.php';
    include 'sanitizer.php';
    if(isset($_SESSION['hospital'])){

        $a = sanitize($_POST['A+']);
        $aa = sanitize($_POST['A-']);
        $b = sanitize($_POST['B+']);
        $bb = sanitize($_POST['B-']);
        $ab = sanitize($_POST['AB+']);
        $abab = sanitize($_POST['AB-']);
        $o = sanitize($_POST['O+']);
        $oo = sanitize($_POST['O-']);

        $stm = $pdo->prepare("UPDATE hospitals SET `A+`= ?,`A-`= ?,`B+`= ?,`B-`= ?,`AB+`= ?,`AB-`= ?,`O+`= ?,`O-`= ? WHERE id= ? ");
        $stm->bindValue(1, $a);
        $stm->bindValue(2, $aa);
        $stm->bindValue(3, $b);
        $stm->bindValue(4, $bb);
        $stm->bindValue(5, $ab);
        $stm->bindValue(6, $abab);
        $stm->bindValue(7, $o);
        $stm->bindValue(8, $oo);
        $stm->bindValue(9, $_SESSION['hospital']);
        
        $stm->execute();
        
        echo "success";
        
    }
    else{
        header('location: ../index.php');
    }
	

?>