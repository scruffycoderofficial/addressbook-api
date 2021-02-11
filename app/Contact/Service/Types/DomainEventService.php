<?php

namespace CocoaStudio\Component\Contact\Service;

/**
 * Interface DomainEventService
 *
 * @package CocoaStudio\Component\Contact\Service
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
interface DomainEventService
{
    /** @TODO Create an EventResponse */
    public function createLog(): EventResponse;
}