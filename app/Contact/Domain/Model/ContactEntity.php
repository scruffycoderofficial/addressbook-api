<?php

namespace CocoaStudio\Component\Contact\Domain\Model;

use CocoaStudio\Component\Contact\Domain\{
    Contract\ContactEntityModel,
    Entity\Contact
};

/**
 * Class ContactEntity
 *
 * package CocoaStudio\Component\Contact\Domain\Model
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
abstract class ContactEntity implements ContactEntityModel
{
    /**
     * @var ContactEntityModel $entity
     */
    protected $entity;

    /**
     * @param Contact $entity
     */
    public function __construct(Contact $entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return Contact
     */
    public function getEntityModel(): Contact
    {
        return $this->entity;
    }
}