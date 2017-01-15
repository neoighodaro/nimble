<?php

namespace Nimble\Component\Database;

use Nimble\Component\Component;
use Illuminate\Database\Capsule\Manager as Capsule;

class DatabaseComponent extends Component {

    /**
     * Set up the component.
     */
    public function setUp()
    {
        $capsule = new Capsule;

        $driver = config('database.driver', 'mysql');

        $capsule->addConnection([
            'driver'    => $driver,
            'host'      => config("database.{$driver}.host"),
            'database'  => config("database.{$driver}.database"),
            'username'  => config("database.{$driver}.username"),
            'password'  => config("database.{$driver}.password"),
            'charset'   => config("database.{$driver}.charset", 'utf8'),
            'collation' => config("database.{$driver}.collation", 'utf8_unicode_ci'),
            'prefix'    => config("database.{$driver}.prefix"),
        ]);

        $capsule->setAsGlobal();

        if (config('database.eloquent', true) === true) {
            $capsule->setEventDispatcher(app('events'));
            $capsule->bootEloquent();
        }

        $this->app->singleton($this->name(), function () use ($capsule) {
            return $capsule;
        });
    }

    /**
     * Returns the name of the component
     *
     * @return string
     */
    public function name()
    {
        return 'database';
    }
}