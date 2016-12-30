<?php
	$name = $_POST['nameField'];
	$email = $_POST['emailField'];
	$phone = $_POST['phoneField'];
	$dsn = "mysql:dbname=clubwebsite";
	$username = "jump";
	$password = "password";
	try {
		$conn = new PDO ( $dsn, $username, $password );
		$conn-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	
	} catch( PDOException $e ) {
		echo "Connection failed: " . $e-> getMessage();
	}
	
	if ( ! ($email == null || $name == null || $phone == null) ){
		try {
			$sql = "INSERT INTO newbies ( name, phone, email ) VALUES ( '" .$name. "', '" .$phone. "', '" .$email. "' )";
			$detail = $conn->query( $sql );
			header( "Location: thankyou.php");
			} catch ( PDOException $ex) {
			echo $ex;
		}
	}else{
		header( "Location: index.html#join");
	}
	$conn = null;
?>