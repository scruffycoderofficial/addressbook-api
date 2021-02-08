<?php

namespace CocoaStudio\Component\Contact\Domain\Contract;

use CocoaStudio\Component\Contact\Domain\Entity\Contact;

/**
 * Class EntityModel
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
interface EntityModel
{
    /**
     * An entity model that acts as an AggregateRoot
     *
     * @return Contact
     */
    public function getEntity(): Contact;
}