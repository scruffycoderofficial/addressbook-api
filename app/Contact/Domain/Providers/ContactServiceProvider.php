<?php

namespace CocoaStudio\Component\Contact\Domain\Providers;

use Illuminate\Support\ServiceProvider;

use CocoaStudio\Component\Contact\Domain\{
    Repository\ContactEntityRepository,
    Service\ContactsService,
    Contract\ContactService
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
        $this->app->bind(ContactService::class, function(){
            return new ContactsService(
                $this->app->make(ContactEntityRepository::class)
            );
        });
    }
}