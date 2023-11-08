<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
use Hyperf\HttpServer\Router\Router;

Router::get('/user/{id}/show', 'App\User\Controller\IndexController@show');
Router::post('/user/store', 'App\User\Controller\IndexController@store');
Router::post('/user/{id}/update', 'App\User\Controller\IndexController@update');
