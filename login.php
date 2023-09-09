php

<?php

session_start();


if(isset($_POST['username']) && isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];

	if($username == '12123' && $password == '45536'){
		$_SESSION['username'] = $username;
		header('Location: welcome.php');
		exit();
	}
	elseif($username == '4433' && $password == '55353'){
		$_SESSION['username'] = $username;
		header('Location: welcome.php');
		exit();
	}
	else{
		echo "Invalid username or password";
	}

}

?>