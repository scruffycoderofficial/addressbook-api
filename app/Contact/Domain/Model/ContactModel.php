<?php

namespace CocoaStudio\Component\Contact\Domain\Model;

use CocoaStudio\Component\Contact\Domain\{
    Contract\EntityModel,
    Entity\Contact
};

/**
 * Class ContactModel
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
abstract class ContactModel implements EntityModel
{
    /**
     * @var EntityModel $entity
     */
    protected $entity;

    /**
     * @param $entityModel
     */
    public function __construct(Contact $entity)
    {
        $this->entity = $entity;
    }

    /**
     * @return Contact
     */
    public function getEntity(): Contact
    {
        return $this->entity;
    }
}