<?php

namespace TarekAdam\OrmBindingValidation;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class ServiceProvider
 * @package TarekAdam\OrmBindingValidation
 */
class ServiceProvider extends BaseServiceProvider{

	/**
	 * Bootstrap the application services.
	 *
	 * @param Router $router
	 *
	 * @return void
	 */
	public function boot(Router $router){

		$router->aliasMiddleware('orm', Middleware::class);

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register(){

	}

}