<?php
	include 'connection.php';
    include 'sanitizer.php';
	if(!empty($_POST)){
		$username = sanitize($_POST['username']);
		$password = sanitize($_POST['password']);

		$stm = $pdo->prepare("SELECT * FROM receivers WHERE email = ? ");
        $stm->bindValue(1, $username);

        $stm->execute();
        $row = $stm->fetch(PDO::FETCH_ASSOC);

		if(!is_array($row)){
            $response['type'] = 'Error';
			$response['message'] = 'Cannot find account with the username';

		}
		else{

			if(($password == $row['password'])){
				$_SESSION['receiver'] = $row['id'];

                $response['type'] = 'url';
                $response['url'] = 'index.php#availability';
			}
			else{
                $response['type'] = 'Error';
				$response['message'] = 'Incorrect password';
			}
		}
        header('Content-Type: application/json');  // <-- header declaration
        echo json_encode($response, true); 
		
	}
	else{
		header('location: ../login.html');
	}

    
?>