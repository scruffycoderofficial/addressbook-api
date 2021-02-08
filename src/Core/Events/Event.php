<?php

namespace CocoaStudio\Component\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class Event
 */
abstract class Event
{
    use SerializesModels;
}
