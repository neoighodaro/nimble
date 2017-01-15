<?php

namespace Nimble\Component\Events;

use Nimble\Component\Component;
use Illuminate\Events\Dispatcher;

class EventsComponent extends Component {

    /**
     * Set up the component.
     */
    public function setUp()
    {
        $this->app->instance($this->name(), new Dispatcher($this->app));
    }

    /**
     * Returns the name of the component
     *
     * @return string
     */
    public function name()
    {
        return 'events';
    }
}