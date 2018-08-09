<?php

namespace TarekAdam\OrmBindingValidation;

use Illuminate\Http\Request;
use Closure;

/**
 * Class Middleware
 * @package FuquIo\LaravelCors
 */
class Middleware{
	/**
	 * Handle an incoming API requests and permitting certain domains.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure                 $next
	 *
	 * @return mixed
	 */
	public function handle(Request $request, Closure $next){
		//

		$controller = $request->route()->controller;
		$params = $request->route()->parameters;

		foreach($controller->parent_child_relationships as $parent_child_relationship){
			$parent = $parent_child_relationship['parent'];
			$parent = $params[$parent];

			$child = $parent_child_relationship['child'];
			$child = $params[$child];

			$relationship = $parent_child_relationship['relationship'];

			if(!$parent->$relationship->contains($child)){
				abort(404);
			}
		}

		return $next($request);
	}
}
