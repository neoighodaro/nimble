<?php

namespace Nimble\Component\Filesystem;

use Nimble\Component\Component;
use Illuminate\Filesystem\Filesystem;

class FilesystemComponent extends Component {

    /**
     * Set up the component.
     */
    public function setUp()
    {
        $this->app->instance($this->name(), new Filesystem);
    }

    /**
     * Returns the name of the component
     *
     * @return string
     */
    public function name()
    {
        return 'files';
    }
}