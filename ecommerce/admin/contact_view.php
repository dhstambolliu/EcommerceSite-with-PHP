<?php
	include 'includes/session.php';

	if(isset($_POST['desc'])){
		$id = $_POST['id'];
		
		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("SELECT message FROM contact WHERE id=:id");
			$stmt->execute(['id'=>$id]);

			$_SESSION['success'] = 'Message successfully';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}

		$pdo->close();
	}
	else{
		$_SESSION['error'] = 'Select message to delete first';
	}

	header('location: contact.php');
	
?>