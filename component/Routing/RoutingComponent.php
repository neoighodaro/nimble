<?php

namespace Nimble\Component\Routing;

use Illuminate\Routing\Router;
use Nimble\Component\Component;

class RoutingComponent extends Component {

    /**
     * Set up the component.
     */
    public function setUp()
    {
        $router = new Router($this->app->make('events'));

        $this->app->singleton($this->name(), function () use ($router) {
            return $router;
        });

        $routerOptions = ['namespace' => 'App\Http\Controllers'];

        $router->group($routerOptions, function () use ($router) {
            $routesFile = NIMBLE_ROOT."/routes.php";

            require file_exists($routesFile) ? $routesFile : 'routes.php';
        });
    }

    /**
     * Returns the name of the component
     *
     * @return string
     */
    public function name()
    {
        return 'routing';
    }
}