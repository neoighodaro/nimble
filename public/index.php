<?php
/**
 * Nimble
 *
 * Nimble is a fast PHP framework for those that like it small. It was
 * built on optional Laravel components.
 *
 * @author Neo Ighodaro <neo@creativitykills.co>
 */

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\UrlGenerator;

// Prepare ...
require __DIR__."/../bootstrap.php";

// Abstract
$router   = $app->make('routing');
$request  = Request::capture();
$redirect = new Redirector(new UrlGenerator($router->getRoutes(), $request));
$response = $router->dispatch($request);
$response->send();