<?php

require __DIR__ . '/../bootstrap.php';
 
use framework\Router;

$app = new Router;

$app->get("/",function(){
    return app\controller\Index::index();  
});
$app->get("/sobre",function(){
    echo "passou aqui!!!";exit;
    return app\controller\Page::institucional();  
});

$app->run();
