<?php

namespace TarekAdam\OrmBindingValidation;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Illuminate\Routing\Router;

/**
 * Class ServiceProvider
 * @package FuquIo\LaravelCors
 */
class ServiceProvider extends BaseServiceProvider{
	CONST VENDOR_PATH = 'tarek-adam/laravel-orm-binding-validation';
	CONST SHORT_NAME = 'binding-validation';

	/**
	 * Bootstrap the application services.
	 *
	 * @param Router $router
	 *
	 * @return void
	 */
	public function boot(Router $router){

		$this->bootMiddleware($router);

	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register(){

	}


	/**
	 * @internal
	 *
	 * @param Router $router
	 */
	private function bootMiddleware(Router $router){
		$router->aliasMiddleware('orm', Middleware::class);
	}
}