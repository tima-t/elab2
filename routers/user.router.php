<?php



$app->get('/login', function () use ($app) {


	$app->render('login.html');
});

$app->post('/login', function () use ($app) {
	$clean = array();
	$name = $_POST['user'];
	$pass = $_POST['pass'];
	if (strlen($name) > 3 && strlen($pass) > 3) {
		$name = trim($name);
		$pass = trim($pass);
		$clean['name'] = stripslashes($name);
		$clean['pass'] = stripslashes($pass);

		$oUser = new models\User();
		$result = $oUser->getUserByLogin($clean['name'], $clean['pass']);


		if ($result) {

			$_SESSION['logged'] = true;
			$success = "Welcome, you are loged in our system! \n Now you can see all books, enjoy our library.";

			$app->render('serverMsg/serverResp.php', array('success' => $success));
		} else {
			$error = "You have entered wrong Username or Password";
			$app->render('serverMsg/serverResp.php', array('error_msg' => $error));
		}
	} else {

		$error = "The size of the name and password should be over 3 symbols";
		$app->render('serverMsg/serverResp.php', array('error_msg' => $error));
	}
});

// PUT route
$app->get('/register', function () use ($app) {


	$app->render('register.html');
});


$app->post('/register', function () use ($app) {
	$clean = array();
	$name = $_POST['user'];
	$pass = $_POST['pass'];
	$mail = $_POST["mail"];
	if (strlen($name) > 3 && strlen($pass) > 3 && strlen($mail)>4) {
		$name = trim($name);
		$pass = trim($pass);
		$mail = trim($mail);
		$clean['name'] = stripslashes($name);
		$clean['pass'] = stripslashes($pass);
		$clean['mail'] = stripslashes($mail);


		$oUser = new models\User();
		$result = $oUser->setUser($clean['name'], $clean['pass'],$clean['mail']);


		if ($result) {


			$success = "You are registered successfully! \n Now you can go back and log in";

			$app->render('serverMsg/serverResp.php', array('success' => $success));
		} else {
			$error = "You write wrong data, we cant confirm your registration";
			$app->render('serverMsg/serverResp.php', array('error_msg' => $error));
		}
	} else {

		$error = "The size of the name and password should be over 3 symbols";
		$app->render('serverMsg/serverResp.php', array('error_msg' => $error));
	}
});

