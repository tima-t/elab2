<?php

// GET index route
/*$app->get('/', function () use ($app) {
    $oStuff = new models\Stuff();
    $hello = $oStuff->setStuff();
    $app->render('index.html', array('hello' => $hello));
});*/

$app->get('/', function () use ($app) {
    $app->render('home.html', array('hello' => $hello));
});

$app->post('/home', function () use ($app) {
    $uploader= new \models\FileUploader();
    $uploader->uploadFile();
    $title=$_POST['title'];
    $publish= $_POST['date'];
    $author=$_POST['author'];
    $format= $_POST['format'];
    $count = $_POST['count'];
    $resume = $_POST['resume'];
    $isbn= $_POST['isbn'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $image=$target_file;

    $insertBook =new models\Book($title,$publish,$author,$format,$count,$resume,$isbn,$image);
    $insertBook->insert();
    //$app->render('home.html', array('hello' => $hello));
});

