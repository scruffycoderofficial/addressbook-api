<?php

namespace CocoaStudio\Component\Contact\Domain\Providers;

use Illuminate\Support\ServiceProvider;

use CocoaStudio\Component\Contact\Domain\{
    Repository\ContactRepository,
    Service\ContactsService,
    Contract\DomainService
};

/**
 * Class ContactDomainServiceProvider
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactDomainServiceProvider extends ServiceProvider
{
    /** {@inheritdoc} */
    public function register()
    {
        $this->app->bind(DomainService::class, function(){
            return new ContactsService(
                $this->app->make(ContactRepository::class)
            );
        });
    }
}