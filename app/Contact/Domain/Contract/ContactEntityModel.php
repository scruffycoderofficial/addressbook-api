<?php

namespace CocoaStudio\Component\Contact\Domain\Contract;

use CocoaStudio\Component\Contact\Domain\Entity\Contact;

/**
 * Class ContactEntityModel
 *
 * A shallow implementation of an AggregateRoot
 *
 * @package CocoaStudio\Component\Contact\Domain\Contract
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
interface ContactEntityModel
{
    /**
     * A child class of Eloquent Model
     *
     * @return Contact
     */
    public function getEntityModel(): Contact;
}