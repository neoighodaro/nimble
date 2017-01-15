<?php

// ------------------------------------------------------------
// Load composer
// ------------------------------------------------------------

require "vendor/autoload.php";

// ------------------------------------------------------------
// Define constant(s)
// ------------------------------------------------------------

defined('NIMBLE_ROOT')      OR define('NIMBLE_ROOT', __DIR__);
defined('NIMBLE_APP')       OR define('NIMBLE_APP', NIMBLE_ROOT."/app");
defined('NIMBLE_STORAGE')   OR define('NIMBLE_STORAGE', __DIR__."/storage");
defined('NIMBLE_PUBLIC')    OR define('NIMBLE_PUBLIC', NIMBLE_ROOT."/public");
defined('NIMBLE_RESOURCES') OR define('NIMBLE_RESOURCES', NIMBLE_ROOT."/resources");

// ------------------------------------------------------------
// Load the container and plug all things
// ------------------------------------------------------------

$app = new Illuminate\Container\Container;

// ------------------------------------------------------------
// Load the helpers
// ------------------------------------------------------------

require NIMBLE_APP.'/helpers.php';

// ------------------------------------------------------------
// Load the components
// ------------------------------------------------------------

$components = require NIMBLE_APP.'/components.php';

foreach ($components as $component) {
    (new $component($app))->setUp();
}
