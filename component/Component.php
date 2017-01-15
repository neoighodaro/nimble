<?php

namespace Nimble\Component;

use Illuminate\Container\Container;

abstract class Component {

    /**
     * Container instance.
     *
     * @var Container
     */
    protected $app;

    /**
     * Component constructor.
     *
     * @param Container $app
     */
    public function __construct(Container $app)
    {
        $this->app = $app;
    }

    /**
     * Get the name of the plug in
     *
     * @return string
     */
    abstract public function name();
}