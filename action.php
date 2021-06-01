<?php

	session_start();
	$db = new mysqli('localhost', 'root','', 'parking_system');

	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=parking_system', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if(isset($_POST['btn_register']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$contact = $_POST['contact'];
		$password = $_POST['password'];

		

		$emailsql ="select * from users where email = '$email';";
		$stmt = $pdo->prepare($emailsql);
	    $stmt->execute(array(':email' => $email));

	     if($stmt->rowCount()==1){
	     	
	     	header("Location: index.php?regerror=er");
	     	die();
	     }
	     else
	     {
	     	$sql = "INSERT INTO users (name, email, contact, password) VALUES ('$name','$email','$contact','$password')";

			$db->query($sql);
			header("Location: index.php");
	     }

		

	}

	if(isset($_POST['btn_login']))
	{
		$email = $_POST['email'];
		$password =$_POST['password'];


		$sql = "Select count(*),id from users where email='$email' and password='$password';";
		$result = $db->query($sql);
		$row = $result->fetch_assoc();


	     if($row['count(*)']=="1"){

			$_SESSION['id']=$row['id'];
			header("Location: dashboard.php");

	     }
	     else{
	     		
	     	header("Location: index.php?logerror=er");
	     }

	}


	if(isset($_POST['btn_areainput']))
	{
		$area_name = $_POST['area_name'];
		$organizer_id = $_POST['organizer_id'];
		$address = $_POST['address'];
		$start_time = $_POST['start_time'];
		$end_time = $_POST['end_time'];
		$ondate = $_POST['ondate'];
		$hour_rate = $_POST['hour_rate'];

		$sql = "INSERT INTO area (organizer_id, area_name, address, start_time,end_time,ondate,hour_rate) VALUES ('$organizer_id','$area_name','$address','$start_time','$end_time','$ondate','$hour_rate')";

		$db->query($sql);
		header("Location: garage_create.php?msg=success");




	}


?>
