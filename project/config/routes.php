<?php

use \Core\Route;

return [
	new Route('/page/all/','page', 'all'),
	new Route('/user/first/:n/','user', 'first'),
	new Route('/user/all/','user', 'all'),
	new Route('/page/one/:id/','page', 'one'),
	new Route('/chekbd/','page', 'test'),
	new Route('/hello/', 'hello', 'index'),
	new Route('/page/','page', 'act'),
	new Route('/page/:id/','page', 'show'),
	new Route('/user/:id/','user', 'show'),
	new Route('/user/:id/:key/','user', 'info'),
	new Route('/product/all/','product', 'all'),
	new Route('/product/:n/','product', 'show'),
];
