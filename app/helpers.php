<?php

if ( ! function_exists('app'))
{
    /**
     * Get the illuminate container instance.
     *
     * @param  string $instance
     * @return \Illuminate\Container\Container|mixed
     */
    function app($instance)
    {
        global $app;

        return $instance ? $app->make($instance) : $app;
    }
}

if ( ! function_exists('config'))
{
    /**
     * Get a configuration value.
     *
     * @param  string $key
     * @param  mixed $default
     * @return mixed
     */
    function config($key, $default = false)
    {
        return app('config')->get($key, $default);
    }
}

if ( ! function_exists('view'))
{
    /**
     * Load views from the filesystem.
     *
     * @param  string $view
     * @param  array  $parameters
     * @param  array  $mergeData
     * @return \Illuminate\Contracts\View\View
     */
    function view($view, array $parameters = [], array $mergeData = [])
    {
        return app('view')->make($view, $parameters, $mergeData);
    }
}