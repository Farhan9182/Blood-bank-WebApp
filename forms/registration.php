<?php 
	include '../database/connection.php';
    include '../database/sanitizer.php';
    if(!empty($_POST)){
        if(isset($_POST['acc-type'])){
            if($_POST['acc-type'] == "Receiver" ){

                $name = sanitize($_POST['name']);
                $email = sanitize($_POST['email']);
                $password = $_POST['password'];
                $contact = sanitize($_POST['contact']);
                $blood_group = sanitize($_POST['blood_group']);
                $address = sanitize($_POST['address']);

                $stm = $pdo->prepare("INSERT INTO receivers (name,password,address,email,contact,blood_group) VALUES (? , ? , ? , ? , ?, ? ) ");
                $stm->bindValue(1, $name);
                $stm->bindValue(2, $password);
                $stm->bindValue(3, $address);
                $stm->bindValue(4, $email);
                $stm->bindValue(5, $contact);
                $stm->bindValue(6, $blood_group);
                
                
                $stm->execute();
                
                echo "OK";
                
                
            }
            else{
                $name = sanitize($_POST['name']);
                $email = sanitize($_POST['email']);
                $password = $_POST['password'];
                $contact = sanitize($_POST['contact']);
                $address = sanitize($_POST['address']);

                $stm = $pdo->prepare("INSERT INTO hospitals (name,password,address,email,contact) VALUES (? , ? , ? , ? , ?) ");
                $stm->bindValue(1, $name);
                $stm->bindValue(2, $password);
                $stm->bindValue(3, $address);
                $stm->bindValue(4, $email);
                $stm->bindValue(5, $contact);
                
                
                $stm->execute();
                
                echo "OK";
            }
            
        }
        else{
            
            echo "Please select account type.";
        }
    }
    else{
        header("location: ../index.php");
    }
	
    

?>