<?php

namespace Royalcms\Component\DefaultRoute;

use Royalcms\Component\Support\ServiceProvider;

class DefaultRouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //$router = royalcms('router');
        
        //$router->get('/{action?}', '\Royalcms\Component\DefaultRoute\DefaultRouteController@runAction');
        //$router->any('/{controller}/{action?}', '\Royalcms\Component\DefaultRoute\DefaultRouteController@runControllerAction');
        //$router->any('/{module}/{controller}/{action?}', '\Royalcms\Component\DefaultRoute\DefaultRouteController@runModuleControllerAction');
    }

    public function register()
    {
        $this->royalcms['default-router'] = $this->royalcms->share(function($royalcms)
        {
            $route = new HttpQueryRoute();

            define('ROUTE_M', $route->getModule());
            define('ROUTE_C', $route->getController());
            define('ROUTE_A', $route->getAction());

            return $route;
        });
    }
    
}
