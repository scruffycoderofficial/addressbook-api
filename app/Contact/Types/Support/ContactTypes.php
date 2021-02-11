<?php

namespace CocoaStudio\Component\Contact\Types\Support;

use CocoaStudio\Component\Contact\Types;

/**
 * Interface ContactTypes
 *
 * @package CocoaStudio\Component\Contact\Types
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
interface ContactTypes
{
    /**
     * A Generic-Type Definition that is independent of
     * Storage and Processing
     */
    const TYPE_DEFINITIONS = [
        'business' => [
            'target' => Types\Business::class
        ],
        'private' => [
            'target' => Types\Closed::class
        ],
        'silent' => [
            'target' => Types\Silent::class
        ],
        'social' => Types\Social::class
    ];
}