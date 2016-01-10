<?php
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

// web/index.php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'dbs.options' => array(
        'mysql_read' => array(
            'driver' => 'pdo_mysql',
            'host' => 'localhost',
            'dbname' => 'umwerk_locations',
            'user' => 'root',
            'password' => '',
            'charset' => 'utf8mb4'
        )
    )
));

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

$app->get('/', function (Request $request) use ($app) {
    return $app['twig']->render('index.twig');
});

$app->get('/list', function (Request $request) use ($app) {
    $locations = $app['db']->fetchAll('SELECT * FROM locations');
    $response = new JsonResponse();
    $response->setData($locations);
    return $response;
});

$app->get('/detail/{id}', function ($id) use ($app) {
    $sql = "SELECT * FROM locations WHERE id = ?";
    $post = $app['db']->fetchAssoc($sql, array((int) $id));
    $response = new JsonResponse();
    $response->setData($post);
    return $response;
});

$app->run();