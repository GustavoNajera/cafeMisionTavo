<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

//Get por defecto
$app->get(
    '/',
    function () {
        $template = "hola mundo Tavo";
        echo $template;
    }
);

//View
// Render PHP template in route
$app->get('/usuario/:nombre/:apellido', function ($nombre,$apellido) use ($app) {
    $app->render('profile.php', array('nombre' => $nombre,'apellido' => $apellido));
});


/*
// POST route
$app->post(
    '/post',
    function () {
        echo 'This is a POST route';
    }
);
// PUT route
$app->put(
    '/put',
    function () {
        echo 'This is a PUT route';
    }
);
// PATCH route
$app->patch('/patch', function () {
    echo 'This is a PATCH route';
});
// DELETE route
$app->delete(
    '/delete',
    function () {
        echo 'This is a DELETE route';
    }
);*/
$app->run();