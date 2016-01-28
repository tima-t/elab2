<?php

// Get user
$app->get('/user', function () use ($app) {	
	
	$oLaboratory = new User ();
	$users = $oLaboratory->getUsers();
	$app->contentType('application/json');
	echo json_encode($users);
});

$app->get('/login', function () use ($app) {


	$app->render('login.html');
});

$app->post('/login', function () use ($app) {
	$clean=array();
	$name = $_POST['user'];
	$pass = $_POST['pass'];
	if(strlen($name)>3 && strlen($pass)>3){
        $name=trim($name);
        $pass=trim($pass);
        $clean['name']=stripslashes($name);
        $clean['pass']=stripslashes($pass);
		
		$oUser = new models\User();
		$result = $oUser->getUserByLogin($clean['name'],$clean['pass']);
	
		

        if($result){
			echo "right";
			$app->render('login.html', array('hello' => $hello));
		}
		else{
			echo"false";
		}
    }
    else{
        echo"false";
    }
	
	
	//echo "  despues: ".$pass. "   ";

	//$oUser = new User();
	
	//echo json_encode($oUser->getUserByLogin($email, $pass), true);
});

// PUT route
$app->put('/user', function () {
	echo 'This is a PUT route';
});

// DELETE route
$app->delete('/user', function () {
    echo 'This is a DELETE route';
});