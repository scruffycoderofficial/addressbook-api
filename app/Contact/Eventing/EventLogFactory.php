<?php

namespace CocoaStudio\Component\Contact\Eventing;

/**
 * Class EventLogFactory
 *
 * @package CocoaStudio\Component\Contact\Eventing
 */
class EventLogFactory
{
    /**
     * @param array $data
     * @return mixed
     */
    static public function logData(array $data)
    {
        return ContactResponseEvent($data);
    }
}