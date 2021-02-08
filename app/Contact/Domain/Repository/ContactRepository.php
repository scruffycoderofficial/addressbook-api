<?php

namespace CocoaStudio\Component\Contact\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

use CocoaStudio\Component\Contact\Domain\{
    Model\ContactModel
};

/**
 * Class ContactRepository
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
class ContactRepository extends ContactModel
{
    /**
     * @return Collection
     */
    public function getActive()
    {
        return $this->getEntity()->whereNull('deleted_at')->get();
    }
}