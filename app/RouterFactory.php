<?php

declare(strict_types=1);

namespace App;

use Nette\Application\Routers\RouteList;


final class RouterFactory {
	public static function createRouter(): RouteList {
		$router = new RouteList;
		$router->addRoute('/users?[page=<page>]]', 'Main:users');
		$router->addRoute('/<action>', 'Main:default');
		return $router;
	}
}
