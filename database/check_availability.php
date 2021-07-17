<?php

    function checkQuantity($receiverID,$hospitalID,$quantity){
        $host     = "localhost";//Ip of database, in this case my host machine    
        $user     = "root";	//Username to use
        $pass     = "";//Password for that user
        $dbname   = "blood-bank";//Name of the database

        $pdo;

        try {
            $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e)
        {
        echo $e->getMessage();                         
        }

        $stm1 = $pdo->prepare("SELECT * FROM receivers WHERE id= ? ");
        $stm1->bindValue(1, $receiverID);

        $stm1->execute();
        $row1 = $stm1->fetch(PDO::FETCH_ASSOC);

        $stm2 = $pdo->prepare("SELECT * FROM hospitals WHERE id= ? ");
        $stm2->bindValue(1, $hospitalID);

        $stm2->execute();
        $row2 = $stm2->fetch(PDO::FETCH_ASSOC);

        $stm3 = $pdo->prepare("SELECT * FROM requests WHERE requested_by= ? AND requested_from= ?");
        $stm3->bindValue(1, $receiverID);
        $stm3->bindValue(2, $hospitalID);

        $stm3->execute();
        $row3 = $stm3->fetch(PDO::FETCH_ASSOC);

        if((float)($row2[$row1['blood_group']]) < (float)$quantity){
            $res['type'] = "Error";
            $res['msg'] = "Not enough supply";
            return $res;
        }
        elseif(is_array($row3)){
            $res['type'] = "Error";
            $res['msg'] = "Request already exists from same hospital.";
            return $res; 
        }
        else{
            $res['type'] = "Success";
            $res['receiver_name'] = $row1['name'];
            $res['hospital_name'] = $row2['name'];
            $res['msg'] = $row1['blood_group'];
            return $res;
        }
    }
?>