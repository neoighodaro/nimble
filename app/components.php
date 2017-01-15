<?php

return [

    // ------------------------------------------------------------
    // Illuminate components that are pluged into your application
    // ------------------------------------------------------------

    // Core components
    Nimble\Component\Events\EventsComponent::class,
    Nimble\Component\Routing\RoutingComponent::class,

    // Optional components
    Nimble\Component\Filesystem\FilesystemComponent::class,
    Nimble\Component\View\ViewComponent::class,
    Nimble\Component\Config\ConfigComponent::class,
    Nimble\Component\Database\DatabaseComponent::class,

    // Custom components

];