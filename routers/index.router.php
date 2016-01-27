<?php

// GET index route
/*$app->get('/', function () use ($app) {
    $oStuff = new models\Stuff();
    $hello = $oStuff->setStuff();
    $app->render('index.html', array('hello' => $hello));
});*/

$app->get('/', function () use ($app) {
    $app->render('login.html', array('hello' => $hello));
});

