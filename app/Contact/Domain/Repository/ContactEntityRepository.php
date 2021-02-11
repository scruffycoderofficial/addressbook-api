<?php

namespace CocoaStudio\Component\Contact\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

use Illuminate\Database\Eloquent\Model;
use CocoaStudio\Component\Contact\Domain\{
    Model\ContactEntity,
    Entity\Contact
};

/**
 * Class ContactRepository
 *
 * @package CocoaStudio\Component\Contact\Domain\Repository
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactEntityRepository extends ContactEntity
{
    /**
     * @param array $conditions
     * @return Collection
     */
    public function getActive(array $conditions = []): Collection
    {
        return $this->getEntityModel()
            ->whereNull('deleted_at')
            ->get();
    }

    /**
     * @param Contact $contact
     *
     * @return Model
     */
    public function newContact(Contact $contact): Model
    {
        return $this->getEntityModel()
            ->create($contact->toArray());
    }
}