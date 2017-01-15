<?php

namespace Nimble\Component\View;

use Illuminate\View\Engines;
use Illuminate\View\Factory;
use Nimble\Component\Component;
use Illuminate\View\FileViewFinder;
use Illuminate\View\Compilers\BladeCompiler;

class ViewComponent extends Component {

    /**
     * Set up the component.
     */
    public function setUp()
    {
        $filesystem      = app('files');

        $eventDispatcher = app('events');

        $viewResolver  = new Engines\EngineResolver;

        $bladeCompiler = new BladeCompiler($filesystem, $this->compiledViewsPath());

        $viewResolver->register('blade', function () use ($bladeCompiler, $filesystem) {
            return new Engines\CompilerEngine($bladeCompiler, $filesystem);
        });

        $viewResolver->register('php', function () {
            return new Engines\PhpEngine;
        });

        $viewFinder = new FileViewFinder($filesystem, $this->viewPaths());

        $viewFactory = new Factory($viewResolver, $viewFinder, $eventDispatcher);

        $this->app->singleton($this->name(), function () use ($viewFactory) {
            return $viewFactory;
        });
    }

    /**
     * Returns the name of the component
     *
     * @return string
     */
    public function name()
    {
        return 'view';
    }

    /**
     * Get the view paths.
     *
     * @return array
     */
    protected function viewPaths()
    {
        return [
            NIMBLE_RESOURCES.'/views'
        ];
    }

    /**
     * Compiled views path
     *
     * @return string
     */
    protected function compiledViewsPath()
    {
        return NIMBLE_STORAGE.'/views';
    }
}