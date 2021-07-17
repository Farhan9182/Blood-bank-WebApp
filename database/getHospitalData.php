<?php
    
    $stm = $pdo->prepare("SELECT * FROM hospitals WHERE id= ?");
    $stm->bindValue(1, $_SESSION['hospital']);

    $stm->execute();

    $row = $stm->fetch(PDO::FETCH_ASSOC);

?>