<?php

namespace CocoaStudio\Component\Contact\Domain\Service;

use Illuminate\Database\Eloquent\Collection;

use CocoaStudio\Component\Contact\Domain\{
    Contract\ContactService as AbstractContactService,
    Repository\ContactEntityRepository
};

/**
 * Class ContactService
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactService implements AbstractContactService
{
    /**
     * @var ContactEntityRepository
     */
    protected $contactRepository;

    /**
     * Class constructor
     * 
     * @param ContactEntityRepository $contactRepository
     */
    public function __construct(ContactEntityRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    /**
     * @return Collection
     */
    public function getActiveCollection(): Collection
    {
        return $this->contactRepository->getActive();
    }
}