<?php

namespace CocoaStudio\Component\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

/**
 * Class EventServiceProvider
 */
class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'CocoaStudio\Component\Events\SomeEvent' => [
            'CocoaStudio\Component\Listeners\EventListener',
        ],
    ];
}
