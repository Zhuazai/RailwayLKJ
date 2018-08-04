<?php

if (php_sapi_name() === 'cli-server' && is_file(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))){
    return false;
}

require_once __DIR__.'/../vendor/autoload.php';

use Plume\Application;

$app = new Application();
$app['plume.root.path'] = __DIR__.'/../';// 指定根路径
$app['plume.module.default']='lkj';// 指定默认模块
//$app['plume.log.debug']=true;// 开启debug日志
//$app['plume.log.time']=true;// 开启性能日志
$app->run();
