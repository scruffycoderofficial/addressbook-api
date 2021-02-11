<?php

namespace CocoaStudio\Component\Contact\Domain\Providers;

use Illuminate\Support\ServiceProvider;

use CocoaStudio\Component\Contact\Domain\{
    Service\ContactService as ConcreteContactService,
    Repository\ContactEntityRepository,
    Contract\ContactService
};

/**
 * Class ContactDomainServiceProvider
 *
 * @package CocoaStudio\Component\Contact\Domain\Providers
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactServiceProvider extends ServiceProvider
{
    /**
     * Registers bindings for Contact Bounded Context
    */
    public function register()
    {
        $this->app->bind(ContactService::class, function(){
            return new ConcreteContactService(
                $this->app->make(ContactEntityRepository::class)
            );
        });
    }
}