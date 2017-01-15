<?php

namespace Nimble\Component\Cache;

use Nimble\Component\Component;
use Illuminate\Cache\CacheManager;

class CacheComponent extends Component {

    /**
     * Set up the component.
     */
    public function setUp()
    {
        $this->app->singleton($this->name(), function () {
            return (new CacheManager($this->app));
        });

        $this->app->singleton("{$this->name()}.file", function () {
            return app($this->name())->store('file');
        });
    }

    /**
     * Returns the name of the component
     *
     * @return string
     */
    public function name()
    {
        return 'cache';
    }
}