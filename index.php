<?php

require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();
$app = new \Slim\Slim();

/*
 * Get por defecto y ventana principal
 */
$app->get('/', function () use ($app) {
    $app->render('cliente/index.php');
});


/*
 * Vista referente a testimonios
 */
$app->get('/testimonials', function () use ($app) {
    $app->render('cliente/testimonials.php');
});

/*
 * Vista referente a acerca de
 */
$app->get('/about', function () use ($app) {
    $app->render('cliente/about.php');
});

/*
 * Vista referente a servicios
 */
$app->get('/service', function () use ($app) {
    $app->render('cliente/service.php');
});



//View
// Render PHP template in route
/*
$app->get('/usuario/:nombre/:apellido', function ($nombre,$apellido) use ($app) {
    $app->render('profile.php', array('nombre' => $nombre,'apellido' => $apellido));
});
*/



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