<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;


final class RouterFactory
{
	use Nette\StaticClass;

	public static function createRouter(): RouteList
	{
		$router = new RouteList;
		$router->addRoute('/', 'Landingpage:welcome');
		$router->addRoute('/myPodcasts', 'Podcast:tablecontents');
		$router->addRoute('/myPodcasts/add', 'Podcast:add');
		$router->addRoute('/myPodcasts/show', 'Podcast:show');
		$router->addRoute('/myPodcasts/delete', 'Podcast:delete');
		$router->addRoute('/myPodcasts/edit', 'Podcast:edit');
		$router->addRoute('/myPodcasts/signIn', 'Sign:in');
		$router->addRoute('/myPodcasts/signUp', 'Sign:register');
		$router->addRoute('/myPodcasts/signOut', 'Sign:out');
		
		
		return $router;
	}
}
