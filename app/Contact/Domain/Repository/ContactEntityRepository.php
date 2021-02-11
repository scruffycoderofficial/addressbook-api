<?php

namespace CocoaStudio\Component\Contact\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

use CocoaStudio\Component\Contact\Domain\{
    Model\ContactModelContact
};

/**
 * Class ContactRepository
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactRepository extends ContactModelContact
{
    /**
     * @return Collection
     */
    public function getActive()
    {
        return $this->getEntity()->whereNull('deleted_at')->get();
    }
}