<?php

namespace spec\CocoaStudio\Component\Contact\Domain\Entity;

use PhpSpec\ObjectBehavior;
use CocoaStudio\Component\Contact\Domain\Entity\Contact;
use CocoaStudio\Component\Contact\Domain\Contract\EntityModel;

/**
 * Class ContactSpec
 */
class ContactSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Contact::class);
    }

    function it_is_an_entity_model()
    {
        $this->shouldImplement(EntityModel::class);
    }
}
