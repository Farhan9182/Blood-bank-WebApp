<?php
	include 'connection.php';
    include 'sanitizer.php';
    include 'check_availability.php';
    if(isset($_SESSION['receiver'])){
        if(isset($_POST['id']) || isset($_GET['id'])){

            $receiverID = $_SESSION['receiver'];
            $hospitalID = $_POST['id'];
            $quantity = $_POST['quantity'];


            $res = checkQuantity($receiverID,$hospitalID,$quantity);

            $quantity = (float)$quantity;
            if($res['type'] == "Error"){
                echo $res['msg'];
            }
            else{
                $stm = $pdo->prepare("INSERT INTO requests (requested_by,requested_by_name,requested_from,requested_from_name,blood_group,quantity,req_date,stat) VALUES (? , ? , ? , ? , ?, ? , ?, ?) ");
                $stm->bindValue(1, $receiverID);
                $stm->bindValue(2, $res['receiver_name']);
                $stm->bindValue(3, $hospitalID);
                $stm->bindValue(4, $res['hospital_name']);
                $stm->bindValue(5, $res['msg']);
                $stm->bindValue(6, $quantity);
                $stm->bindValue(7, date("Y-m-d"));
                $stm->bindValue(8, "Pending");
                
                $stm->execute();
                
                echo "Requested Successfully";
            }
            
        }
        else{
            header('location: ../index.php');
        }
        
    }
    elseif(isset($_SESSION['hospital'])){
        echo "Hospital officials not allowed.";
    }
    else{
        
        echo "login required";
        
    }
	

?>