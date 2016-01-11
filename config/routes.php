<?php
use Cake\Core\Plugin;
use Cake\Routing\Router;

Router::defaultRouteClass('DashedRoute');

// My Router #1
Router::scope('/posts', function($routes){
	
	$routes->connect('/',
			['controller' => 'Posts']
			);
	
	$routes->connect('/create',
			['controller' => 'Posts', 'action' => 'create']
			);
	
	$routes->connect('/:id',
				['controller' => 'Posts', 'action' => 'view'],
			// Validation 'id' has to be a Number/Digit
				['id' => '\d+', 'pass' => ['id']]
				);
	
	$routes->connect('edit/:id',
			['controller' => 'Posts', 'action' => 'edit'],
			['id' => '\d+', 'pass' => ['id']]
			);
});

Router::scope('/', function ($routes) {
    
    $routes->connect('/', ['controller' => 'Pages', 'action' => 'display', 'home']);
    
    $routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);
    
    $routes->fallbacks('DashedRoute');
    
});

Plugin::routes();
