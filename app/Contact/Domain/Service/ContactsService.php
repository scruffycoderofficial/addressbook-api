<?php

namespace CocoaStudio\Component\Contact\Domain\Service;

use Illuminate\Database\Eloquent\Collection;

use CocoaStudio\Component\Contact\Domain\{
    Repository\ContactRepository,
    Contract\DomainService
};

/**
 * Class ContactService
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactsService implements DomainService
{
    /**
     * @var ContactRepository
     */
    protected $contactRepository;

    /**
     * Class constructor
     * 
     * @param ContactRepository $contactRepository
     */
    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @return Collection
     */
    public function getAllActive(): Collection
    {
        return $this->contactRepository->getActive();
    }
}