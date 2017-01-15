<?php

namespace Nimble\Component\Config;

use Nimble\Component\Component;
use Illuminate\Config\Repository as Config;

class ConfigComponent extends Component {

    /**
     * Set up the component.
     */
    public function setUp()
    {
        $this->app->singleton($this->name(), function () {
            $configDir = NIMBLE_ROOT."/config";

            if (is_dir($configDir)) {
                $config_items = [];

                foreach (glob($configDir."/*.php") as $file) {
                    $namespace = str_replace('.php', '', basename($file));

                    $config_items[strtolower($namespace)] = require $file;
                }

                return new Config($config_items);
            }
        });
    }

    /**
     * Returns the name of the component
     *
     * @return string
     */
    public function name()
    {
        return 'config';
    }
}