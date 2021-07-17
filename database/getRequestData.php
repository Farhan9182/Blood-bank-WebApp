<?php
        $stm1 = $pdo->prepare("SELECT * FROM requests WHERE requested_by= ?");
        $value1 = isset($_SESSION['receiver']) ? $_SESSION['receiver'] : "0";
        $stm1->bindValue(1, $value1);
        
        $stm1->execute();

        $receiverRows = $stm1->fetchAll(PDO::FETCH_ASSOC);

        $stm2 = $pdo->prepare("SELECT * FROM requests WHERE requested_from= ?");
        $value2 = isset($_SESSION['hospital']) ? $_SESSION['hospital'] : "0";
        $stm2->bindValue(1, $value2);
        
        $stm2->execute();

        $hospitalRows = $stm2->fetchAll(PDO::FETCH_ASSOC);

        $stm3 = $pdo->prepare("SELECT count(*) as total_requests FROM requests WHERE requested_from= ?");
        $stm3->bindValue(1, $value2);
        
        $stm3->execute();

        $total_requests = $stm3->fetch(PDO::FETCH_ASSOC);
    
        $stm4 = $pdo->prepare("SELECT count(*) as pending_requests FROM requests WHERE requested_from= ? AND stat= 'Pending'");
        $stm4->bindValue(1, $value2);
        
        $stm4->execute();

        $pending_requests = $stm4->fetch(PDO::FETCH_ASSOC);

        $stm5 = $pdo->prepare("SELECT count(*) as completed_requests FROM requests WHERE requested_from= ? AND stat= 'Completed'");
        $stm5->bindValue(1, $value2);
        
        $stm5->execute();

        $completed_requests = $stm5->fetch(PDO::FETCH_ASSOC);
?>