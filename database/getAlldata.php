<?php
    
    $stm = $pdo->prepare("SELECT * FROM hospitals");
    $stm->execute();

    $rows = $stm->fetchAll(PDO::FETCH_ASSOC);

?>