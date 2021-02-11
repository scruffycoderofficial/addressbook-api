<?php

namespace CocoaStudio\Component\Contact\Domain\Contract;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class ContactService
 *
 * @package CocoaStudio\Component\Contact\Domain\Contract
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
interface ContactService
{
    /**
     * A list of active Contacts
     *
     * Condition: `deleted_at` must be null
     *
     *
     * @return Collection
     */
    public function getActiveCollection(): Collection;
}