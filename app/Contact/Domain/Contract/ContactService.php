<?php

namespace CocoaStudio\Component\Contact\Domain\Contract;

use Illuminate\Database\Eloquent\Collection;

/**
 * Class DomainService
 *
 * @author Luyanda Siko <sikoluyanda@gmail.com>
 */
interface DomainService
{
    /**
     * A list of active Contacts
     *
     * @return Collection
     */
    public function getAllActive(): Collection;
}